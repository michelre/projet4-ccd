<?php

require_once 'controller/FrontendController.php';

$frontendController = new FrontendController();

if(!isset($_GET['action'])){
    $frontendController->home();
    return;
}

if($_GET['action'] === 'detail'){
    $frontendController->detail($_GET['id']);
    return;
}
