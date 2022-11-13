<?php

require_once './app/repos/user-repo.php';

interface UserServiceInterface {
    public function getAllUser();
}

class UserService implements UserServiceInterface {
    public function getAllUser()
    {
        $userRepo=new UserRepo();
        return $userRepo->getAllUser();        
    }

}

?>