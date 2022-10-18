<?php
class ControllerCountry {
    public static function CountryList() {
        $stateList = Model::getStateList();
        include_once('view/countryList.php');
        return;
    }
    // Create
    public static function CountryAddForm() {
        include_once('view/countryAdd.php');
    }
    public static function CountryAddResult() {
        $result = ModelCountry::countryAddResult();
        if($result==true) {
            $stateList = Model::getStateList();
            $_SESSION['message'] = 'Данные добавлены';
            header('Location:countryList');
        } else {
            $error = 'Не удалось добавить данные!';
            include_once('view/countryAdd.php');
        }
        return;
    }
    // Edit
    public static function CountryEditForm($code) {
        $country = Model::getState($code);
        include_once('view/countryEdit.php');
        return;
    }
    public static function CountryEditResult($code) {
        $result = ModelCountry::countryEditResult($code);
        if($result == true) {
            $_SESSION['message'] = 'Данные изменены - страна '.$code;
            $stateList = Model::getStateList();
            header('Location:countryList');
        } else {
            $country = Model::getState($code);
            $error = 'Не удалось изменить данные';
            include_once('view/countryEdit.php');
        }
        return;
    }
    // Delete
    public static function CountryDeleteForm($code) {
        $country = Model::getState($code);
        include_once('view/countryDelete.php');
        return;
    }
    public static function CountryDeleteResult($code) {
        $result = ModelCountry::CountryDeleteResult($code);
        if($result == true) {
            $_SESSION['message'] = 'Данные удалены - страна ' . $code;
            $stateList = Model::getStateList();
            header('Location:countryList');
        } else {
            $country = Model::getState($code);
            $error = 'Не удалось удалить данные!';
            include_once('view/countryDelete.php');
        }
        return;
    }
}
?>