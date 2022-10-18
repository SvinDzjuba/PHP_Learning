<?php
class ModelCountry
{
    public static function countryAddResult()
    {
        $result = false;
        if (isset($_POST['send'])) {
            // form reading
            $Code = strtoupper($_POST['Code']);
            $Name = $_POST['Name'];
            $Continent = $_POST['Continent'];
            $Region = $_POST['Region'];
            $IndepYear = $_POST['IndepYear'];
            $Population = $_POST['Population'];
            $GovernmentForm = $_POST['GovernmentForm'];
            $HeadOfState = $_POST['HeadOfState'];
            $Code2 = $_POST['Code2'];
            if ($Code != '' && $Name != '') {
                $created_at = date('Y-m-d');
                $updated_at = date('Y-m-d');
                // Query
                $sql = "INSERT INTO `country` (`Code`, `Name`, `Continent`, `Region`, `IndepYear`, `Population`, `GovernmentForm`, `HeadOfState`, `Code2`, `created_at`,
                `updated_at`)
                VALUES ('$Code','$Name','$Continent','$Region','$IndepYear','$Population','$GovernmentForm','$HeadOfState','$Code2','$created_at','$updated_at')";
                // Query run
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
            // form reading
            $Code = strtoupper($_POST['Code']);
            $Name = $_POST['Name'];
            $Continent = $_POST['Continent'];
            $Region = $_POST['Region'];
            $IndepYear = $_POST['IndepYear'];
            $Population = $_POST['Population'];
            $GovernmentForm = $_POST['GovernmentForm'];
            $HeadOfState = $_POST['HeadOfState'];
            $Code2 = $_POST['Code2'];
            if ($Code != '' && $Name != '') {
                $updated_at = date('Y-m-d');
                // Query
                $sql = "UPDATE `country` SET `Name`='$Name', `Continent`='$Continent', `Region`='$Region', `IndepYear`='$IndepYear', `Population`='$Population',
                `GovernmentForm`='$GovernmentForm', `HeadOfState`='$HeadOfState', `Code2`='$Code2', `updated_at`='$updated_at' WHERE `country`.`Code` =
                '" . $code . "'";
                // Query run
                $database = new database();
                $item = $database->executeRun($sql);
                if ($item == true) $result = true;
            }
        }
        return $result;
    }
    public static function CountryDeleteResult($code) {
        $result = false;
        if(isset($_POST['send'])) {
            $sql1 = 'DELETE FROM city WHERE CountryCode = "'.$code.'"';
            $sql2 = 'DELETE FROM country WHERE country.Code = "'.$code.'"';
            $database = new database();
            $item = $database->executeRun($sql1);
            $item = $database->executeRun($sql2);
            if($item == true) $result = true;
        }
        return $result;
    }
}