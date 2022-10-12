<?php
class Model {

    public static function getStateList() {
        $sql = "SELECT * FROM country ORDER BY country.Name ASC";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getState($code) {
        $sql = "SELECT * FROM country WHERE Code = '".$code."'";
        $db = new database();
        $item = $db->getOne($sql);
        return $item;
    }
	public static function getCitiesListByState($code) {
        $sql = "SELECT * FROM city WHERE CountryCode = '".$code."'";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getCitiesList() {
        $sql = "SELECT * FROM city ORDER BY city.Name ASC";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getAllContinents() {
        $sql = "SELECT DISTINCT Continent FROM country";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getStatesByContinent($continent) {
        $sql = "SELECT * FROM country WHERE Continent LIKE '".$continent."' ORDER BY Continent";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
}
?>