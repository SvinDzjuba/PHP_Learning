<?php
// Connection
session_start();
include_once 'inc/database.php';
// Models
include_once 'model/Model.php';
include_once 'model/ModelCountry.php';
include_once 'model/ModelCity.php';
include_once 'model/ModelAdmin.php';
// Controllers
include_once 'controller/Controller.php';
include_once 'controller/ControllerCity.php';
include_once 'controller/ControllerCountry.php';
include_once 'controller/ControllerAdmin.php';
// Routing
include 'route/routing.php';
?>