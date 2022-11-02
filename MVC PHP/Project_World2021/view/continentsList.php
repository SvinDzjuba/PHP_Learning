<?php
ob_start();
$navigation = '<ul class="continents_nav">
    <li><a href="continent">ALL</a></li>';
    foreach ($continentList as $continent) {
        $navigation .= '<li><a href="continentStates?'.$continent['Continent'].'">'.$continent['Continent'].'</a></li>';
    }
$navigation .= '</ul>';
echo $navigation;
?>

<style>
.continents_nav {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin: 50px auto;
}
.continents_nav li {
    width: 20% !important;
    list-style: none;
    font-size: 18px;
    text-align: center;
}
</style>

<table class="table table-striped">
    <tr>
        <th style="width: 10%">Code</th>
        <th style="width: 15%">Country name</th>
        <th style="width: 15%">Indep year</th>
        <th style="width: 20%">Population</th>
        <th style="width: 15%">Continent</th>
        <th style="width: 25%">Government form</th>
    </tr>
    <tbody>
        <?php
        foreach ($statesList as $state) {
            echo
            '<tr>
                <td><a href="citiesStateContinent?'.$state['Code'].'">'.$state['Code'].'</a></td>
                <td>'.$state['Name'].'</td>
                <td>'.$state['IndepYear'].'</td>
                <td>'.$state['Population'].'</td>
                <td>'.$state['Continent'].'</td>
                <td>'.$state['GovernmentForm'].'</td>
            </tr>';
        }
        echo 
        '<tr>
            <td colspan=6 class="textposition">Total countries: '.count($statesList).'</td>
        </tr>';
        ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>