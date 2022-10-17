<?php
ob_start();
$title = 'Список стран';
?>

<div style="text-align: right; margin-bottom: 5px;">
    <a href="add-country" class="btn btn-primary btn-sm btn-flat">New country</a>
</div>
<table class="table table-striped">
    <tr>
        <th style="width: 10%">Code</th>
        <th style="width: 20%">Country name</th>
        <th style="width: 10%">Indep year</th>
        <th style="width: 15%">Population</th>
        <th style="width: 25%">Government form</th>
        <th style="width: 20%">Actions</th>
    </tr>
    <tbody>
        <?php
        foreach ($stateList as $state) {
            echo
            '<tr>
                <td>'.$state['Code'].'</td>
                <td>'.$state['Name'].'</td>
                <td>'.$state['IndepYear'].'</td>
                <td>'.$state['Population'].'</td>
                <td>'.$state['Continent'].'</td>
                <td>'.$state['GovernmentForm'].'</td>
                <td>
                    <a href="edit-country?'.$state['Code'].' " class="btn btn-success btn-sm edit btn-flat">Edit</a>
                    <a href="delete-country?'.$state['Code'].' " class="btn btn-danger btn-sm edit btn-flat">Delete</a>
                </td>
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