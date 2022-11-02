<?php
ob_start();
$title = 'Список городов';
?>

<style>
    .btn {
        margin-left: 0;
        margin-top: 0;
    }
    tr {
        width: 100%;
    }
    .actions_td {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .actions_td a {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 30px;
    }
</style>

<div style="text-align: right; margin-bottom: 5px;">
    <a href="add-city" class="btn btn-primary btn-sm btn-flat">New city</a>
</div>
<table class="table table-striped">
    <tr>
        <th style="width: 40%">Name</th>
        <th style="width: 20%">Country code</th>
        <th style="width: 25%">Population</th>
        <th style="width: 15%">Actions</th>
    </tr>
    <tbody>
        <?php
        foreach ($cityList as $city) {
            echo
            '<tr></tr>
            <tr>
                <td>'.$city['Name'].'</td>
                <td>'.$city['CountryCode'].'</td>
                <td>'.$city['Population'].'</td>
                <td class="actions_td">
                    <a style="width: 47%;" href="edit-city?'.$city['Name'].' " class="btn btn-success btn-sm edit btn-flat">Edit</a>
                    <a style="width: 47%;" href="delete-city?'.$city['Name'].' " class="btn btn-danger btn-sm edit btn-flat">Delete</a>
                </td>
            </tr>';
        }
        echo 
        '<tr>
            <td colspan=4 class="textposition">Total countries: '.count($cityList).'</td>
        </tr>';
        ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>