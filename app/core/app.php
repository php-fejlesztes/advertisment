<?php

define("CONTROLLER_URL",'./app/controllers/');
define("CONTROLERNAMEEXTENSION","Controller");
define("PHPEXT",'-controller.php');

class App {

    protected $controller = 'home';
    protected $method='index';
    protected $params=[];


   /**
    * router működése
    * url: /home/index/1
    *    - home->controller név: home
    *    - index->metódus a controllerben
    *    - 1->paraméter
     */
    public function __construct()  {


        $url=$this->parseUrl(); 
        
        // ha nincs conroller megadva, akkor a nyitóoldal (home controller)
        if ($url==null)
            $url=["home"];

            // controller van-e?
        if (!$this->isControllerExsist("$url[0]")) {
            // nincs ilyen nevű controller
            include('./public/error/404.html');
        }
        else {
            // van controller, metódus meghatározása
            $this->controller=$url[0];
            unset($url[0]);
            require_once(CONTROLLER_URL.$this->controller.PHPEXT);

            // metódus meghatározás
            if (isset($url[1])) {
                if ($this->isMethodExsist($url[1])) {
                    $this->method=$url[1];
                    unset($url[1]);
                }
            }
            // metódus paramétreinek meghatározása
            $this->params= $url ? array_values($url) : [];
                     
            //Controler neve kiegészül a "Controller" szóval
            $controlerName=$this->controller.CONTROLERNAMEEXTENSION;
            
            //echo $controlerName." ".$this->method."</BR>";
            //var_dump($this->params);
            // router alapján átíránytás
            call_user_func_array([$controlerName,$this->method],$this->params);              
        }     
    }


    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
    }

    private function isControllerExsist($controllerName)  {
        $urlToCheck= CONTROLLER_URL.$controllerName.PHPEXT;
        if (file_exists($urlToCheck)) {          
            return true;
        }
        else {
            return false;
        }
    }

    private function isMethodExsist($methodName) {
        if (method_exists($this->controller,$methodName))
            return true;
        else
            return false;
    }
}


?>