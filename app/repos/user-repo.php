<?php
    
require_once './app/models/user.php';
require_once './app/lib/mysql-database.php';
    
interface UserRepoInterface {
    public function getAllUser();
    public function getUserName($userId);
}

/**
 * UserRepo Felhasználókat kezelő osztály
 */
class UserRepo implements UserRepoInterface {
    
    /**
     * users Az adatábzisból legyűjtött felhasználók
     *
     * @var mixed
     */
    protected $users;
    public  function __construct()
    {
        $this->users=array();
    }
    
    /**
     * getAllUser Legyűjti az összes felhasználót az adatábázisból
     *
     * @return void
     */
    public function getAllUser()
    {                
        //array_push($this->users,new User(1,"Hirdető Hedvig"));
        //array_push($this->users,new User(2,"Olvasó Olga"));
        //array_push($this->users,new User(3,"Író István"));   

        if (empty($this->users)) {
            $database=new MySqLDatabase();
            $this->users=$database->findAllUsers();   
            $database->close();  
        }
        return $this->users;   
    }
    
    /**
     * getUserName A legyűjtött felhasználók alapján a felhasználó id lapján meghatározza a felhasználó nevet
     *
     * @param  mixed $userId A felhasználó azonosítója
     * @return void
     */
    public function getUserName($userId) {
        if (empty($this->users))
            return null;
        foreach($this->users as $user) {
            if ($user->getUserId()==$userId)
                return $user->getUserName();
        }
        return null;
    }
}
?>