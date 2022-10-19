<?php
class ModelCity
{
    public static function cityAddResult()
    {
        $result = false;
        if (isset($_POST['send'])) {
            // form reading
            $Name = $_POST['Name'];
            $CountryCode = strtoupper($_POST['CountryCode']);
            $Population = $_POST['Population'];
            if ($Name != '') {
                $created_at = date('Y-m-d');
                $updated_at = date('Y-m-d');
                // Query
                $sql = "INSERT INTO `city` (`Name`, `CountryCode`, `Population`)
                VALUES ('$Name','$CountryCode','$Population')";
                // Query run
                $database = new database();
                $item = $database->executeRun($sql);
                if ($item == true) 
                    $result = true;
            }
        }
        return $result;
    }
    // public static function cityEditResult($code)
    // {
    //     $result = false;
    //     if (isset($_POST['send'])) {
    //         // form reading
    //         $Code = strtoupper($_POST['Code']);
    //         $Name = $_POST['Name'];
    //         $Continent = $_POST['Continent'];
    //         $Region = $_POST['Region'];
    //         $IndepYear = $_POST['IndepYear'];
    //         $Population = $_POST['Population'];
    //         $GovernmentForm = $_POST['GovernmentForm'];
    //         $HeadOfState = $_POST['HeadOfState'];
    //         $Code2 = $_POST['Code2'];
    //         if ($Code != '' && $Name != '') {
    //             $updated_at = date('Y-m-d');
    //             // Query
    //             $sql = "UPDATE `city` SET `Name`='$Name', `Continent`='$Continent', `Region`='$Region', `IndepYear`='$IndepYear', `Population`='$Population',
    //             `GovernmentForm`='$GovernmentForm', `HeadOfState`='$HeadOfState', `Code2`='$Code2', `updated_at`='$updated_at' WHERE `city`.`Code` =
    //             '" . $code . "'";
    //             // Query run
    //             $database = new database();
    //             $item = $database->executeRun($sql);
    //             if ($item == true) $result = true;
    //         }
    //     }
    //     return $result;
    // }

    // public static function CityDeleteResult($code) {
    //     $result = false;
    //     if(isset($_POST['send'])) {
    //         $sql1 = 'DELETE FROM city WHERE CityCode = "'.$code.'"';
    //         $sql2 = 'DELETE FROM city WHERE city.Code = "'.$code.'"';
    //         $database = new database();
    //         $item = $database->executeRun($sql1);
    //         $item = $database->executeRun($sql2);
    //         if($item == true) $result = true;
    //     }
    //     return $result;
    // }
}