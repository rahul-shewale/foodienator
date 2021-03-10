<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Checkout extends CI_Controller {

    function __construct() {
        parent::__construct();

        $user = $this->session->userdata('user');
            if(empty($user)) {
                $this->session->set_flashdata('msg', 'Your session has been expired');
                redirect(base_url().'login/');
            }

        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->model('Menu_model');
        $this->load->model('Mainuser_model');
        $this->controller = 'checkout';
    }

    public function index() {
       $loggedUser = $this->session->userdata('user');
       $u_id = $loggedUser['user_id'];
       $user = $this->Mainuser_model->getUser($u_id);

        if($this->cart->total_items() <= 0) {
            redirect(base_url().'restaurant');
        }
        $custData = $data = array();

        $submit = $this->input->post('placeholder');
            $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
            $this->form_validation->set_rules('name', 'name','trim|required');
            $this->form_validation->set_rules('email', 'Email','trim|required');
            $this->form_validation->set_rules('phone', 'Phone','trim|required');
            $this->form_validation->set_rules('address', 'Address','trim|required');

            if($this->form_validation->run() == true) { 
                $custData['name'] = $this->input->post('name');
                $custData['email'] = $this->input->post('email');
                $custData['phone'] = $this->input->post('phone');
                $custData['address'] = $this->input->post('address');
                
                //insert data into customer table and get last inserted custid
                $insert = $this->Menu_model->createCustomer($custData);
                if($insert) {
                    $order = $this->placeOrder($insert);

                    if($order) {
                        $this->session->set_userdata('success_msg', 'Order placed successfully');
                        redirect($this->controller.'/orderSuccess/'.$order);
                    } else {
                        $data['error_msg'] = "Order submission failed, please try again.";
                    }
                }else {
                    $data['error_msg'] = "Some problems occured, please try again.";
                }
            }

        $data['user'] = $user;
        $data['custData'] = $custData;
        $data['cartItems'] = $this->cart->contents();

        $this->load->view('front/checkout',$data);
    }

    public function placeOrder($custID) {
        //insert order data
        $orderData['c_id'] = $custID;
        $orderData['grand_total'] = $this->cart->total();

        //insert data into order table and get last inserted custid
        $insertOrder = $this->Menu_model->insertOrder($orderData);

        if($insertOrder) {
            //Retrive cart data from the session
            $cartItems = $this->cart->contents();
            $orderItemData = array();
            $i = 0;
            foreach($cartItems as $item) {
                $orderItemData[$i]['o_id'] = $insertOrder;
                $orderItemData[$i]['d_id'] = $item['id'];
                $orderItemData[$i]['quantity'] = $item['qty'];
                $orderItemData[$i]['sub_total'] = $item['subtotal'];
                $i++;
            }
            if(!empty($orderItemData)) {
                //insert order items
                $insertOrderItems = $this->Menu_model->insertOrderItems($orderItemData);

                if($insertOrderItems) {
                    $this->cart->destroy();

                    //return order id
                    return $insertOrder;
                }
            }   
        }
        return false;
    }

    function orderSuccess($ordID){
        // Fetch order data from the database
        $data['order'] = $this->Menu_model->getOrder($ordID);
        $custID = $data['order']['c_id'];   
        $data['custData'] = $this->Menu_model->getCustomer($custID);
        // Load order details view
        $this->load->view('front/order_success', $data);
    }
}