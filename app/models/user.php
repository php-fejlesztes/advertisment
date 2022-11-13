<?php

class User {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id=$id;
        $this->name=$name;
    }

    public function __destruct() {
        
    }

    public function getUserId() {
        return $this->id;
    }
    
    public function getUserName() {
        return $this->name;
    }

    public function setUserName($name) {
        $this->name=$name;
    }

    public function setUserId($id) {
        $this->id=$id;
    }
}

?>