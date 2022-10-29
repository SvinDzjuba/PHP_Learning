<?php
ob_start();
$title = "Список городов";
?>
<table class="table table-striped">
    <tr>
        <th style="width:25%">ID</th>
        <th style="width:25%">City name</th>
        <th style="width:25%">Country name</th>
        <th style="width:25%">Population</th>
    </tr>
    <tbody>
        <?php
        foreach ($cityListAll as $city) {
            echo '<tr>
                <td>' . $city['ID'] . '</td>
                <td>' . $city['Name'] . '</td>
                <td>' . $city['CountryCode'] . '</td>
                <td>' . $city['Population'] . '</td>
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