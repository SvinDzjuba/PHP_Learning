<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>

    <?php

    echo '<h1>Arrays Ptactice</h1>';
    echo '<hr>';

    // ---------------
    echo '<h2>Integer array</h2>';
    $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);
    foreach ($numbers as $number) {
        echo '<p>Number: ' . $number . '</p>';
    }
    echo '<hr>';

    // ---------------
    echo '<h2>String array</h2>';
    $countries = array('Estonia', 'Russia', 'Finland', 'France', 'Germany', 'United Kingdom');
    $message = '';

    foreach ($countries as $country) {
        $message .= '<li>'.$country.'</li>';
    }
    echo '<h3>Countries list</h3>';
    echo '<ul>';
        echo $message;
    echo '</ul>';
    echo '<hr>';

    // ----------------
    echo '<h2>Multiple array</h2>';
    $Countries = array(
        array(0, 'Estonia', 'Tallinn'),
        array(1, 'Russia', 'Moscow'),
        array(2, 'Finland', 'Helsinki'),
    );
    echo '<h3>Country - capital</h3>';
    $i = 0;
    foreach ($Countries as $country) {
        $i++;
        echo $i.') <b>'.$country[1].'</b>';
        echo ' - '.$country[2].'<br>';
    }
    echo '<p>There are '.count($Countries).' countries in list.</p>';
    echo '<hr>';

    // ---------------
    echo '<h2>Countries, cities</h2>';
    $myCountries = array(
      array(
        'id' => 0,
        'name' => 'Estonia',
        'capital' => 'Tallinn',
        'cities' => array('Narva', 'Tartu')
      ),  
      array(
        'id' => 1,
        'name' => 'Russia',
        'capital' => 'Moscow',
        'cities' => array('Saint-Petersburg', 'Omsk')
      ),  
      array(
        'id' => 2,
        'name' => 'Finland',
        'capital' => 'Helsinki',
        'cities' => array('Oslo', 'Tartu')
      ),  
    );
    foreach ($myCountries as $country) {
        echo $country['name'].' - '.$country['capital'];
    }
    ?>

</body>

</html>