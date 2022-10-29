<?php
ob_start();
$title = "Список городов - управление";
if (isset($_SESSION['message'])) {
    echo '<div style="text-align:left; margin-bottom:5px;background-color:#e6e6de;"><p>';
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    echo '</p></div>';
}
?>
<style>
    .btn {
        margin-left: 0;
        font-size: 15px;
    }
</style>
<div style="text-align:right; margin-bottom: 5px">
    <a href="addcity" class="btn btn-primary btn-sm btn-flat">New city</a>
</div>
<table class="table table-striped">
    <tr>
        <th style="width:25%">ID</th>
        <th style="width:25%">City name</th>
        <th style="width:25%">Country name</th>
        <th style="width:25%">Population</th>
        <th style="width:10%">Действия</th>
    </tr>
    <tbody>
        <?php
        foreach ($cityListAll as $city) {
            echo '<tr>
                <td>' . $city['ID'] . '</td>
                <td>' . $city['Name'] . '</td>
                <td>' . $city['CountryCode'] . '</td>
                <td>' . $city['Population'] . '</td>
                <td style="display:flex;align-items:center">
                <a href="editcity?' . $city['ID'] . '" class="btn btn-success btn-sm edit btn-flat">Edit</a>
                <a href="deletecity?' . $city['ID'] . '" class="btn btn-danger s delete btn-flat">Delete</a>
                </td>
                </tr>';
        }
        echo '<tr>
                <td colspan=3 class="textposition">Total cities</td>';
        echo '<td>' . count($cityListAll) . '</td>';
        ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>