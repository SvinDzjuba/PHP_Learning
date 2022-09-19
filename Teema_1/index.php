<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php project</title>
</head>

<body>

    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        h1 {
            text-align: center;
            font-size: 48px;
        }
    </style>

    <?php

    // First php output
    echo "<h1>First php App</h1><br>";


    // OPERATORS
    echo '<h2>Examples with operators</h2>';
    $name = 'Maksim';
    $age = 17;
    if ($age > 12)
        $comment = 'teenager';
    elseif ($age >= 0 && $age <= 12)
        $comment = 'kid';
    else
        $comment = 'Type error!';
    echo 'Name: ' . $name . ' Age: ' . $age . ' - ' . $comment . '<br>';

    $friend_name = 'Aleksei';
    $friend_age = 12;
    if ($friend_age > 12)
        $comment1 = 'teenager';
    elseif ($friend_age >= 0 && $friend_age <= 12)
        $comment1 = 'kid';
    else
        $comment1 = 'Type error!';

    echo 'Name: ' . $friend_name . ' Age: ' . $friend_age . ' - ' . $comment1;
    echo '<hr>';


    // LOOPS
    $colors = array('black', 'white', 'blue', 'red', 'cyan', 'magenta', 'yellow');
    $count = 1;
    foreach ($colors as $color) {
        echo 'The color ' . $count++ . ' is: ' . $color . '<br>';
    }

    ?>

</body>

</html>