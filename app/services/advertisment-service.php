<?php

require_once './app/repos/wrapper-repo.php';

interface AdvertisementServiceInterface {
    public function getAllAdvertisements();
}

/**
 * AdvertisementService Hirdetéseket kezelő service
 */
class AdvertisementService implements AdvertisementServiceInterface {
    
    
    /**
     * getAllAdvertisements Lekéri a repo-ból a hirdetéseket felhasználó nevekkel
     */
    public function getAllAdvertisements() {
        $wrapperRepo=new WrapperRepo();
        return $wrapperRepo->gettAllAdvertismentUser();
    }
}
?>