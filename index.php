<?php
// https://r.je/mvc-php-router-dependency-injection
// https://dev.to/mvinhas/simple-routing-system-for-a-php-mvc-application-16f7
// https://www.youtube.com/watch?v=WRgHBu3msA4&ab_channel=Codecourse
// https://github.com/keefekwan/php_crud_mvc_oop_bootstrap/blob/master/controller/ContactsController.php
// https://windicss.org/utilities/layout/tables.html

    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', 1);

    require_once('app/init.php');
   
    $app = new App();

    //require_once 'controllers/user-controller.php';
    //require_once 'controllers/advertisment-controller.php';


    //$userController = new UserController();    
    //$userResult = $userController->allUser();
    //require 'views/user-list.php';



    //$advertisementController = new AdvertisementController();    
    //$advertisementResult = $advertisementController->allAdvertisement();
    //require 'views/advertisement-list.php';

?>