<?php

require_once './app/models/advertisment.php';
require_once './app/models/advertisment-user.php';

require_once './app/repos/user-repo.php';
require_once './app/repos/advertisment-repo.php';

interface WrapperInterface {
    public function gettAllAdvertismentUser();
}

class WrapperRepo implements WrapperInterface {

    protected $userRepo;
    protected $advertismentRepo;

    public function __construct() {
        $this->userRepo=new UserRepo();   
        $this->advertismentRepo=new AdvertismentRepo();
    }

    public function gettAllAdvertismentUser() {  
        $advertismentsUsers=array();
        $users=$this->userRepo->getAllUser();

        $advertisments=$this->advertismentRepo->getAllAdvertisments();
        if ($advertisments!=null) {
            foreach($advertisments as $advertisment) {                       
                $userName=$this->userRepo->getUserName($advertisment->getUserId());
                if ($userName==null)
                    $userName="";
                $newAdvertisment=AdvertismentUser::create()->setAdvertismentWithName($advertisment,$userName);
                array_push($advertismentsUsers,$newAdvertisment);
            }
        }
        return $advertismentsUsers;
    }
}

?>