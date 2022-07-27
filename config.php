<?php

// connexion a la BDD
const SERVER = 'db.3wa.io';
const LOGIN = 'loydsimon';
const PWD = 'f6b72109012d720f3b664ecb2a7097e4';
const BASE  = 'loydsimon_juillet2022';

// Dossiers
const CONTROLLER_FOLDER = 'controller/';

// liste des routes
const ROUTES = [
    'connexion' => 'connexion.php',
    'inscription' => 'inscription.php',
    'layout' => 'layout.html'
    ];
    
const DEFAULT_ROUTE = ROUTES['layout'];