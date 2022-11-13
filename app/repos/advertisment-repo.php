<?php
require_once './app/models/advertisment.php';
require_once './app/lib/mysql-database.php';
    
interface AdvertismentRepoInterface {
    public function getAllAdvertisments();
}

/**
 * AdvertismentRepo Hirdetéseket tároló osztály
 */
class AdvertismentRepo implements AdvertismentRepoInterface {
    
    /**
     * advertisments Az adatábzisból legyűjtött hirdetések
     *
     * @var mixed
     */
    protected $advertisments;

    public function __construct() {
        $this->advertisments=array();
    }
        
    /**
     * getAllAdvertisment Legyűjti az összes hirdetéseket
     *      
     * @return void
     */
    public function getAllAdvertisments()
    {      
        /*array_push($this->advertisments,new Advertisment(1,"Autó eladás",1));
        array_push($this->advertisments,new Advertisment(2,"Kiscica elvihető",1));        
        array_push($this->advertisments,new Advertisment(3,"Komposztot keresek",2));
        array_push($this->advertisments,new Advertisment(4,"Ház eladó",2));   
        array_push($this->advertisments,new Advertisment(5,"Korepetálást vállalok",3));   
        array_push($this->advertisments,new Advertisment(6,"Programozást tanítok",3));   */

        if (empty($this->advertisments)){
            $database=new MySqLDatabase();
            $this->advertisments=$database->findAllAdvertismnets();      
            $database->close();
        }    
        return $this->advertisments;    
    }
}
?>