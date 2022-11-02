<?php
// Connection
session_start();
include_once 'inc/database.php';
// Models
include_once 'model/Model.php';
include_once 'model/ModelCountry.php';
include_once 'model/ModelCity.php';
// Controllers
include_once 'controller/Controller.php';
include_once 'controller/ControllerCountry.php';
include_once 'controller/ControllerCity.php';
// Routing
include_once 'route/routing.php';
?>