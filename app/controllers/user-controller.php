<?php

require_once('./app/services/user-service.php');

/**
 * UserController Meghatározza a megjelenítendő felhasz
 */
class UserController {


    /**
     * index Meghatározz a megjelenítendő felhasználókat és azokat átadja a view-nak
     */
    public static function index() {
        $userService=new UserService();        
        $users=$userService->getAllUser();
        require_once('./app/views/user-list.php');
    }
}

?>