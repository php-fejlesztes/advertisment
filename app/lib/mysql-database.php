<?php

require_once('app/models/user.php');
require_once('app/models/advertisment.php');
require_once('app/config/config.php');
interface MySqLDatabaseInterface {
    public function findAllUsers();
    public function close();
}


/**
 * MySqLDatabase osztály
 * Adatbázis kezelés 
 * Mivel a feladat egyszerű volt, ezt a részt nem bontottam további részekre
 */
class MySqLDatabase implements MySqLDatabaseInterface {
    protected $connection;

        
    /**
     * __construct
     *
     * @param  mixed $dbhost MySQL adatbázis host
     * @param  mixed $dbuser MySQL adatbázis user, alapértelmezetten root
     * @param  mixed $dbpass MySQL adatbázis jelszó, alapértelmezetten üres
     * @param  mixed $dbname Adatbázis neve, alapértelmezettent "advertisment"
     * @param  mixed $charset Karakterkódolás
     * @return void
     */
    public function __construct($dbhost = DB_HOST, $dbuser = DB_USER, $dbpass = DB_PASS, $dbname = DB_NAME, $charset = 'utf8') {
        
        try 
        {    
            $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        }
        catch(Exception $e) {
            include('./public/error/database.html');
        }
    
        if ($this->connection->connect_error) {
            echo('Failed to connect to MySQL - ' . $this->connection->connect_error);
        }
        $this->connection->set_charset($charset);
    }
    
    /**
     * findAllUsers
     * Legyűjti az adatábzisból az összes felhasználót
     * A felhasználókból User osztályt készít és egy tömben adja vissza
     * @return void
     */
    public function findAllUsers() {
        $sql = 'SELECT id, name FROM user';
        $result = $this->connection->query($sql);

        $users=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $newUser=new User($row["id"],$row["name"]);
                array_push($users,$newUser);
            }            
        }
        return $users;
    }

        /**
     * findAllUsers
     * Legyűjti az adatábzisból az összes hirdetést
     * A felhasználókból User osztályt készít és egy tömben adja vissza
     * @return void
     */
    public function findAllAdvertismnets() {
        $sql = 'SELECT id, title, user_id FROM advertisment';
        $result = $this->connection->query($sql);
 
        $advertisments=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $newAdvertisment=new Advertisment($row["id"],$row["title"],$row["user_id"]);
                array_push($advertisments,$newAdvertisment);
            }
        }        
        return $advertisments;

    }

    public function close() {
		return $this->connection->close();
	}
}

?>