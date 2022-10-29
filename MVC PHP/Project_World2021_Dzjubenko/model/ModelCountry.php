<?php
class ModelCountry
{
    public static function countryAddResult()
    {
        $result = false;
        if (isset($_POST['send'])) {
            $Code = strtoupper($_POST['Code']);
            $Name = $_POST['Name'];
            $Continent = $_POST['Continent'];
            $Region = $_POST['Region'];
            $IndepYear = $_POST['IndepYear'];
            $Population = $_POST['Population'];
            $GovernmentForm = $_POST['GovernmentForm'];
            $HeadOfState = $_POST['HeadOfState'];
            $Code2 = $_POST['Code2'];
            if ($Code != "" && $Name != "") {
                $sql = "INSERT INTO `country` (`Code`, `Name`, `Continent`, `Region`, `IndepYear`, `Population`, `GovernmentForm`, `HeadOfState`, `Code2`) VALUES ('$Code','$Name','$Continent','$Region','$IndepYear','$Population','$GovernmentForm','$HeadOfState','$Code2')";
                $database = new database();
                $item = $database->executeRun($sql);
                if ($item == true)
                    $result = true;
            }
        }
        return $result;
    }
    public static function countryEditResult($code)
    {
        $result = false;
        if (isset($_POST['send'])) {
            $Code = strtoupper($_POST['Code']);
            $Name = $_POST['Name'];
            $Continent = $_POST['Continent'];
            $Region = $_POST['Region'];
            $IndepYear = $_POST['IndepYear'];
            $Population = $_POST['Population'];
            $GovernmentForm = $_POST['GovernmentForm'];
            $HeadOfState = $_POST['HeadOfState'];
            $Code2 = $_POST['Code2'];

            if ($Code != "" && $Name != "") {
                $sql = "UPDATE `country` SET `Name`='$Name', `Continent`='$Continent', `Region`='$Region', `IndepYear`='$IndepYear', `Population`='$Population',
                `GovernmentForm`='$GovernmentForm', `HeadOfState`='$HeadOfState', `Code2`='$Code2' WHERE `country`.`Code` =
                '" . $code . "'";
                $database = new database();
                $item = $database->executeRun($sql);
                if ($item == true)
                    $result = true;
            }
        }
        return $result;
    }
    public static function countryDeleteResult($code)
    {
        $result = false;
        if (isset($_POST['send'])) {
            $sql = "UPDATE `city` SET `status` = 0 WHERE `city`.`CountryCode` = '" . $code . "'";
            $database = new database();
            $item = $database->executeRun($sql);
            $sql = "UPDATE `country` SET `status` = 0 WHERE `country`.`Code` = '" . $code . "'";
            $database = new database();
            $item = $database->executeRun($sql);
            if ($item == true)
                $result = true;
        }
        return $result;
    }
}
?>