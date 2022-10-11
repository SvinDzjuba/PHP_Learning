<?php
ob_start();
$title = 'Список континентов';
?>

<table class="table table-striped">
    <tr>
        <th style="width: 33.3%">Continent</th>
        <th style="width: 33.3%">Population</th>
        <th style="width: 33.3%">Countries</th>
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