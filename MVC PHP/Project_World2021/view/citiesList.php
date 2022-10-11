<?php
ob_start();
$title = 'Список городов';

if(isset($state) && $state) {
    $title.=' - '.$state['Name'];
    $title.=' ('.count($citiesList).')';
    echo '<div class="textposition"><a href="states">К списку стран</a></div>';
}
?>

<table class="table table-striped" style="width: 85%; margin: 0 auto">
    <tr>
        <th style="width: 40%">City name</th>
        <th style="width: 45%">Population</th>
        <th style="width: 15%">Country code</th>
    </tr>
    <tbody>
        <?php
        foreach ($citiesList as $city) {
            echo
            '<tr>
                <td>'.$city['Name'].'</td>
                <td>'.$city['Population'].'</td>
                <td>'.$city['CountryCode'].'</td>
            </tr>';
        }
        echo 
        '<tr>
            <td colspan=3 class="textposition">Total countries: '.count($citiesList).'</td>
        </tr>';
        ?>
    </tbody>
</table>
<?php
if(isset($state)) {
    echo '<div class="textposition"><a href="states">К списку стран</a></div>';
}
$content = ob_get_clean();
include 'view/templates/layout.php';
?>