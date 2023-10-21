<?php


function route_request(){
    $route = $_SERVER['REQUEST_URI'];

    if ($route === "/accueil"){

        require_once('./bdd.php');
        display_tasks();

        return;
    }

    if ($route === "/contact"){

        require_once('./Contact/controllercontact.php');
        display_tasks();

        return;
    }



echo "<h1>ERREUR 404</h1>";

}
route_request();