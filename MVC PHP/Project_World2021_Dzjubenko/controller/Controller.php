<?php
class Controller
{
   public static function StartSite()
   {
      include_once('view/homepage.php');
      return;
   }
   public static function error404()
   {
      include_once('view/error404.php');
      return;
   }
   public static function StateList()
   {
      $stateList = Model::getStateList();
      include_once('view/stateList.php');
      return;
   }
   public static function CityList()
   {
      $cityListAll = Model::getCityList();
      include_once('view/cityListAll.php');
      return;
   }
   public static function CityListByState($code)
   {
      $state = Model::getState($code);
      $cityList = Model::getCityListByState($code);
      include_once('view/cityList.php');
      return;
   }
   public static function CityListByStateContinent($code)
   {
      $states = Model::getState($code);
      $cityList = Model::getCityListByState($code);
      include_once('view/cityList.php');
      return;
   }
   public static function ContinentStateList()
   {
      $continentList = Model::getContinentList();
      $stateList = Model::getStateList();
      include_once('view/continentList.php');
      return;
   }
   public static function StateByContinent($name)
   {
      $continentList = Model::getContinentList();
      $stateList = Model::getStateByContinent($name);
      include_once('view/continentList.php');
      return;
   }
   public static function SearchByCode($name)
   {
      $state = Model::getStateByCode($name);
      include_once('view/stateCode.php');
      return;
   }
} //END CLASS
?>