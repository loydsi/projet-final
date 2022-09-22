<?php

namespace Router;

use App\Exceptions\NotFoundException;

class Router {

    public $url;
    public $routes = [];

    public function __construct($url)
    {
        $this->url = trim($url, '/');
        
    }
    
// pour eviter d'enregistrer toutes les routes trier par request_method ( Quelle méthode de requête a été utilisée : post ou get ) j'insere une nouvelle instance de route avec le path et l'action dans le tableau get

    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
        
    }

    public function post(string $path, string $action)
    {
        $this->routes['POST'][] = new Route($path, $action);
    }
// au lieu d'ecrire post ou get je le fait de facon dynamique avec la request_method si page en get ca mettra get si c'est une page en post elle mettra post
    public function run()
    {
        
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            // si notre route (qu'on a inserer dans le tableau GET ou POST) match avec l'url (qu'on a recuperer) on lance la fonction execute() qui va appeler le bon controller avec la bonne fonction
            
            if($route->matches($this->url)) {
                return $route->execute();
            }
        }

        throw new NotFoundException('La page demandée est introuvable');
    }
}