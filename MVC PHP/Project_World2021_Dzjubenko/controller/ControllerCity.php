<?php
class ControllerCity
{
    public static function CityList()
    {
        $cityListAll = Model::getCityList();
        include_once('view/cityListAllEdit.php');
        return;
    }
    public static function CityAddForm()
    {
        $cityListAll = ModelCity::getCityCodes();
        include_once('view/cityAdd.php');
        return;
    }
    public static function CityAddResult()
    {
        $result = ModelCity::cityAddResult();
        if ($result == true) {
            $cityListAll = Model::getCityList();
            $_SESSION['message'] = 'Данные добавлены';
            header('Location:citylist');
        } else {
            $error = 'Не удалось добавить данные';
            $cityListAll = ModelCity::getCityCodes();
            include_once('view/cityAdd.php');
        }
        return;
    }
    public static function CityEditForm($code)
    {
        $cityListAll = ModelCity::getCityCodes();
        $city = ModelCity::getCity($code);
        include_once('view/cityEdit.php');
        return;
    }
    public static function CityEditResult($ID)
    {
        $result = ModelCity::cityEditResult($ID);
        print_r($result);
        if ($result == true) {
            $_SESSION['message'] = 'Данные изменены - город ' . $ID;
            $cityListAll = Model::getCityList();
            header('Location:citylist');
        } else {
            $cityListAll = ModelCity::getCityCodes();
            $city = ModelCity::getCity($ID);
            $error = 'Не удалось изменить данные';
            include_once('view/cityEdit.php');
        }
        return;
    }
    public static function CityDeleteForm($code)
    {
        $city = ModelCity::getCity($code);
        include_once('view/cityDelete.php');
        return;
    }
    public static function CityDeleteResult($code)
    {
        $result = ModelCity::cityDeleteResult($code);
        if ($result == true) {
            $_SESSION['message'] = 'Данные удалены - город с кодом ' . $code;
            $cityListAll = Model::getCityList();
            header('Location:citylist');
        } else {
            $country = Model::getState($code);
            $error = 'Не удалось удалить данные';
            include_once('view/cшенDelete.php');
        }
        return;
    }
}
?>