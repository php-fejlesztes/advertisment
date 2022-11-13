<?php
class Advertisment {
    private $id;
    private $title;
    private $userId;

    public function __construct($id, $title,$userId) {
        $this->id=$id;
        $this->title=$title;
        $this->userId=$userId;
    }

    public function __destruct() {
        
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

    public function setAdvertisementTitle($title) {
        $this->title=$title;
    }

    public function setAdvertisementId($id) {
        $this->id=$id;
    }

    public function setUserId($userId) {
        $this->userId=$userId;
    }  
}

?>