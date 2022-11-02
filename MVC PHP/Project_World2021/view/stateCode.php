<?php
ob_start();
$title = 'Государство ';
if(isset($state) && $state) {
    $title .= $state['Name'].' - код '.$state['Code'];
}
?>
<?php
echo '<div class="detail">';
    if(isset($state) && $state) {
        echo '<h3>' . $state['Name'] . '</h3>';
        echo '<p><b>Indep year: </b>' . $state['IndepYear'] . '</p>';
        echo '<p><b>Population: </b>' . $state['Population'] . '</p>';
        echo '<p><b>Continent: </b>' . $state['Continent'] . '</p>';
        echo '<p><b>Government form : </b>' . $state['GovernmentForm'] . '</p>';
    } else {
        echo '<h3><b>Данных нет!</b></h3>';
    }
    echo '<div class="textposition-left"><a href="states">К списку стран &#187 </a></div>';
        echo '<a href="cities">К списку городов &#187 </a>';
    echo '</div>';
echo '</div>';
?>
<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>