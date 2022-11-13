<?php

require_once './app/repos/wrapper-repo.php';

interface AdvertisementServiceInterface {
    public function getAllAdvertisements();
}

class AdvertisementService implements AdvertisementServiceInterface {
    public function getAllAdvertisements() {
        $wrapperRepo=new WrapperRepo();
        return $wrapperRepo->gettAllAdvertismentUser();
    }
}
?>