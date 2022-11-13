<?php

require_once('./app/services/user-service.php');

class UserController {
    public static function index() {
        $userService=new UserService();        
        $users=$userService->getAllUser();
        require_once('./app/views/user-list.php');
    }
}

?>