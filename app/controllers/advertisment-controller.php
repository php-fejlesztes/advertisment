<?php

require_once('./app/services/advertisment-service.php');

class AdvertismentController {
    public static function index() {
        $advertismentService=new AdvertisementService();
        $advertisments=$advertismentService->getAllAdvertisements();
        require_once('./app/views/advertisement-list.php');
    }
}

?>