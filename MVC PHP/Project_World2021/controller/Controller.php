<?php
class Controller { 
   
	// Start page
    public static function StartSite() {
        include_once('view/homepage.php');
        return;
    }
    // Error page
    public static function error404() {
        include_once('view/error404.php');
        return;
    }
    // State list
    public static function StateList() {
        $stateList = Model::getStateList();
        include_once('view/stateList.php');
        return;
    }
    public static function citiesListByState($code) {
        $state = Model::getState($code);
        $citiesList = Model::getCitiesListByState($code);
        include_once('view/citiesList.php');
        return;
    }
    public static function citiesListByStateContinent($code) {
        $states = Model::getState($code);
        $citiesList = Model::getCitiesListByState($code);
        include_once('view/citiesList.php');
        return;
    }
    public static function CitiesList() {
        $citiesList = Model::getCitiesList();
        include_once('view/citiesList.php');
        return;
    }
    public static function statesAllContinents() {
        $title = 'Список городов по всем континентам';
        $statesList = Model::getStateList();
        $continentList = Model::getAllContinents();
        include_once('view/continentsList.php');
        return;
    }
    public static function statesByContinent($continent) {
        $title = 'Список городов по континенту - '.$continent;
        $statesList = Model::getStatesByContinent($continent);
        $continentList = Model::getAllContinents();
        include_once('view/continentsList.php');
        return;
    }
}
?>