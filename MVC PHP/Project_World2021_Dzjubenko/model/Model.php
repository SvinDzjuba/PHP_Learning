<?php
/* для выборки данных из базы данных используем запросы,
 * class database из папки inc
 */
class Model
{
    public static function getStateList()
    {
        $sql = "SELECT * FROM `country` WHERE `status` = 1 ORDER BY `country`.`Name` ASC;";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getState($code)
    {
        $sql = "SELECT * FROM `country` WHERE `status` = 1 AND `Code`='" . $code . "'";
        $db = new database();
        $item = $db->getOne($sql);
        return $item;
    }
    public static function getCityList()
    {
        $sql = "SELECT * FROM `city` WHERE `status` = 1 ORDER BY `city`.`countryCode` ASC;";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getCityListByState($code)
    {
        $sql = "SELECT * FROM `city` WHERE `status` = 1 AND `CountryCode`='" . $code . "'";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getContinentList()
    {
        $sql = "SELECT DISTINCT `Continent` FROM `country` WHERE `status` = 1 ORDER BY `country`.`Continent` ASC";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getStateByContinent($name)
    {
        $sql = "SELECT * FROM `country` WHERE `status` = 1 AND `Continent` = '" . $name . "' ORDER BY `country`.`Continent` ASC";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    public static function getStateByCode($name)
    {
        $query = "SELECT * FROM `country` WHERE `status` = 1 AND `Code` = '" . $name . "' OR `Name` Like '%" . $name . "%'";
        $db = new database();
        $item = $db->getOne($query);
        return $item;
    }
} //END CLASS
?>