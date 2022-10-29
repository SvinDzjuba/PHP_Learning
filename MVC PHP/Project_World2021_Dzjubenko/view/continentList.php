<?php
ob_start();
$title = "Список государств";
echo '<div style="display:flex;justify-content:space-around;margin-bottom:20px;font-size:24px"><a href="continent">All</a>';
foreach ($continentList as $continent) {
    echo '<a href="countriesContinent?' . $continent['Continent'] . '">' . $continent['Continent'] . '</a>';
}
echo '</div>'
    ?>
<table class="table table-striped">
    <tr>
        <th style="width:10%">Code</th>
        <th style="width:10%">Country name</th>
        <th style="width:10%">IndepYear</th>
        <th style="width:10%">Population</th>
        <th style="width:10%">Continent</th>
        <th style="width:10%">GovernmentForm</th>
        <th style="width:10%">Cities</th>
    </tr>
    <tbody>
        <?php
        foreach ($stateList as $state) {
            echo '<tr>
                <td>' . $state['Code'] . '</td>
                <td>' . $state['Name'] . '</td>
                <td>' . $state['IndepYear'] . '</td>
                <td>' . $state['Population'] . '</td>
                <td>' . $state['Continent'] . '</td>
                <td>' . $state['GovernmentForm'] . '</td>
                <td><a href="citiesStateContinent?' . $state['Code'] . '">Cities by state</a></td>
                </tr>';
        }
        echo '<tr>
            <td colspan=6 class="textposition">Total countries</td>';
        echo '<td>' . count($stateList) . '</td>';
        ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>