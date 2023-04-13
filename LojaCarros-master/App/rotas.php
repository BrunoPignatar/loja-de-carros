<?php
use App\Controller\{
    CarrosController,
    WelcomeController
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    case "/":
        include 'View/modules/Pg-Inicial/Pg-Inicial.php';
    break;

    case "/carros":
        CarrosController::index();
    break;

    case "/carros/form":
        CarrosController::form();
    break;

    case "/carros/save":
        CarrosController::save();
    break;

    case "/carros/delete":
        CarrosController::delete();
    break;

     case "/carros/sucesso":
        include 'View/modules/Carros/SucessCarros.php';
    break;

    default:
        header("Location: /");
    break;
}