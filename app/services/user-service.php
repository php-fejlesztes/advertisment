<?php

require_once './app/repos/user-repo.php';

interface UserServiceInterface {
    public function getAllUser();
}

/**
 * UserService Felhasználókat kezelő service
 */
class UserService implements UserServiceInterface {
    
    /**
     * getAllUser Legyűjti a felhasználókat
     */
    public function getAllUser()
    {
        $userRepo=new UserRepo();
        return $userRepo->getAllUser();        
    }

}

?>