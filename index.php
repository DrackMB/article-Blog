<?php
//recuperation du fichier de configuration du site.
require_once 'Config/conf.inc.php';
require_once 'Config/autoload.php';

// Connexion à la BdD
$Db = new DbTools();

//Recupération de l'URI du site pour le parsser et récupérer la page à afficher et les variables
$url = $_SERVER['REQUEST_URI'];

//parse_str($url, $output);
$pageInfos = explode('/',$url);
//$pageTest = $_GET['page'];
//Recuperation de la variable page de l'url
$pageTest = filter_input(INPUT_GET, 'page',FILTER_SANITIZE_MAGIC_QUOTES, FILTER_SANITIZE_STRING);
$page = $pageInfos[2];

/* 
if($page !=""){
    if(strpos($page, ".php")){
        $pageName = $page ;
    } else {
        $pageName = $page.'.php';
    } 
    
}
 else {
    $pageName = 'accueil.php';     
} */
$pageName = ($page != '')? $page.'.php' : 'accueil.php';
if(file_exists ('Controllers/'.$pageName)){
include_once 'Controllers/'.$pageName;
}
else{
    $pageName= "erreur404.php";
    include_once 'Controllers/erreur404.php';
}

