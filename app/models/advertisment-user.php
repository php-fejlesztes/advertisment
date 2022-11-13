<?php
require_once './app/models/advertisment.php';
/**
 * AdvertismentUser DTO osztály. A View-n a user-id helyett a user neve jelenik meg.
 */
class AdvertismentUser {
    private $id;
    private $title;
    private $userId;

    private $userName;

    public function __construct() {
        
    }

    public function __destruct() {        
    }

    public static function create() {
        return new self();
    }

    public function setAdvertisementUser($id, $title,$userId, $userName) {
        $this->id=$id;
        $this->title=$title;
        $this->userId=$userId;
        $this->userName=$userName;
        return $this;
    }

    public function setAdvertismentWithName($advertisement, $userName) {
        if ($advertisement instanceof Advertisment) {
            $this->id=$advertisement->getAdvertisementId();
            $this->title=$advertisement->getAdvertisementTitle();
            $this->userId=$advertisement->getUserId();
        }
        $this->userName=$userName;
        return $this;
    }

    public function getAdvertisementId() {
        return $this->id;
    }
    
    public function getAdvertisementTitle() {
        return $this->title;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setAdvertisementTitle($title) {
        $this->title=$title;
    }

    public function setAdvertisementId($id) {
        $this->id=$id;
    }

    public function setUserId($userId) {
        $this->userId=$userId;
    }

    public function setUserName($userName) {
        $this->userName=$userName;
    }    
}

?>