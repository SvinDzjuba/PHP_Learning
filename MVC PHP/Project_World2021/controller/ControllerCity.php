<?php
class ControllerCity {
    public static function CityList() {
        $cityList = Model::getCitiesList();
        include_once('view/cityList.php');
        return;
    }
    // Create
    public static function CityAddForm() {
        $countryCodes = Model::getCountryCodes();
        include_once('view/cityAdd.php');
    }
    public static function CityAddResult() {
        $result = ModelCity::cityAddResult();
        $countryCodes = Model::getCountryCodes();
        if($result==true) {
            $cityList = Model::getCitiesList();
            $_SESSION['message'] = 'Данные добавлены';
            header('Location:cityList.php');
        } else {
            $error = 'Не удалось добавить данные!';
            include_once('view/cityAdd.php');
        }
        return;
    }
    // Edit
    public static function CityEditForm($code) {
        $city = Model::getState($code);
        include_once('view/cityEdit.php');
        return;
    }
    public static function CityEditResult($code) {
        $result = ModelCity::cityEditResult($code);
        if($result == true) {
            $_SESSION['message'] = 'Данные изменены - страна '.$code;
            $stateList = Model::getStateList();
            header('Location:cityList');
        } else {
            $city = Model::getState($code);
            $error = 'Не удалось изменить данные';
            include_once('view/cityEdit.php');
        }
        return;
    }
    // Delete
    public static function CityDeleteForm($code) {
        $city = Model::getState($code);
        include_once('view/cityDelete.php');
        return;
    }
    public static function CityDeleteResult($code) {
        $result = ModelCity::CityDeleteResult($code);
        if($result == true) {
            $_SESSION['message'] = 'Данные удалены - страна ' . $code;
            $stateList = Model::getStateList();
            header('Location:cityList');
        } else {
            $city = Model::getState($code);
            $error = 'Не удалось удалить данные!';
            include_once('view/cityDelete.php');
        }
        return;
    }
}
?>