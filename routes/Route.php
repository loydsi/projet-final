<?php

namespace Router;

use Database\DBConnection;

class Route {

    public $path;
    public $action;
    public $matches;

    public function __construct($path, $action)
    {
        $this->path = trim($path, '/'); // trim($path, '/')    $path
        $this->action = $action; 
        
    }
    
    // fonction qui va verifier si le path match avec l'url et stock le parametres dans matches
    public function matches(string $url)
    {
        // on cherche a remplacer ce qui commence par : et qui serait apres un caractere alphanumerique par tout ce qui n'est pas un slash et on le fait dans $this->path (recuperer le parametre)

        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        
        // on le stock dans la variable $pathToMtach
        $pathToMatch = "#^$path$#";

        // $matches tableaux rempli par les resultats de la recherche on cherche a recuperer un parametre eventuel
        if(preg_match($pathToMatch, $url, $matches)) {
            $this->matches = $matches;
            return true;
        }else {
            return false;
        }
    }

    // fonction qui va appeler le controller et la bonne methode
    public function execute()
    {
        $params = explode('@', $this->action);
        
        // premiere cles du tableau params c'est notre controlleur
        $controller = new $params[0](new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD));
        // seconde cles du tableau params c'est notre method
        $method = $params[1];
        
        // si il y a un id on appel le controller et la method avec le parametres sinon la meme chose sans parametres
        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
    }
}