# Food Ordering Web application
## Xento TrainnHire Program

This system is built with CodeIgniter – PHP framework, bootstrap. The system can be manipulated by one user as an admin. 
Customers will first singup using thier email and then singin. They can add food items to cart and placed order.
Diffrent Restuarents and there menus are given in the web application.


  Frontend:
  http://localhost/foodienator/

  Backend :

  dashboard:
  http://localhost/foodienator/admin/home/
  

 Please Read:

To run this system, you need to create a database in the phpMyAdmin. Either you can create a database namely sms or something else. If you have a database name something else then, you have to change it in the source code. To change the database name in the source code.

Step 1: Go to the application > config > Database.php file.

Step 2: You will see the database name in the $db array. Change the name of the database whatever you desired. As shown below:

```$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'mysql',
    'database' => 'foodienator',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);```
