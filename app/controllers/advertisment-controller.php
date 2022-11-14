<?php

require_once('./app/services/advertisment-service.php');


/**
  * AdvertismentController A hirdetéseket kezelő controller.
  * 
 */
class AdvertismentController {
    
     /**
     * index Meghatározz a megjelenítendő hirdetéseket és azokat átadja a view-nak
     */
    public static function index() {
        $advertismentService=new AdvertisementService();
        $advertisments=$advertismentService->getAllAdvertisements();
        require_once('./app/views/advertisement-list.php');
    }
}

?>