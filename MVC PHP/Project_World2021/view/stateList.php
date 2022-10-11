<?php
ob_start();
$title = 'Список стран';
?>

<table class="table table-striped">
    <tr>
        <th style="width: 10%">Code</th>
        <th style="width: 20%">Country name</th>
        <th style="width: 10%">Indep year</th>
        <th style="width: 15%">Population</th>
        <th style="width: 20%">Government form</th>
        <th style="width: 25%">Cities</th>
    </tr>
    <tbody>
        <?php
        foreach ($stateList as $state) {
            echo
            '<tr>
                <td><a href="citiesState?'.$state['Code'].'">'.$state['Code'].'</a></td>
                <td>'.$state['Name'].'</td>
                <td>'.$state['IndepYear'].'</td>
                <td>'.$state['Population'].'</td>
                <td>'.$state['Continent'].'</td>
                <td>'.$state['GovernmentForm'].'</td>
            </tr>';
        }
        echo 
        '<tr>
            <td colspan=6 class="textposition">Total countries: '.count($stateList).'</td>
        </tr>';
        ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>