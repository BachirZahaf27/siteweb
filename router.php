<?php 
class Router {

    private $url; // Contiendra l'URL sur laquelle on souhaite se rendre
    public $routes = []; // Contiendra la liste des routes

    public function __construct($url){
        $this->url = $url;
    }
    public function get($path, $callable){
        $route = new Route($path, $callable);
        $this->routes[] = $route;
        return $route; // On retourne la route pour "enchainer" les méthodes
    }
    public function run(){
        if(isset($this->routes)){
            foreach($this->routes as $route){
                if($route->match($this->url)){
                    return $route->call();
                }
            }
        }
        include 'views/404.php';
    }
}
?>