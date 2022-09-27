<?php

session_start();
// Btn "send" check
if (isset($_POST['send'])) {
    // To get error list
    $errorString = '';

    // Form data reading
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pizza = $_POST['pizza'];
    $amount = $_POST['amount'];
    $cost = '';
    include_once 'pizzas.php';
    foreach ($pizzas as $ar_pizza => $pizza_info) {
        if($ar_pizza == $pizza) {
            $cost .= (float)$pizza_info * $amount;
        }
    }

    // Input fields validation
    if (trim($name) == '') {
        $errorString .= '<br>Name is required</br>';
    }
    if (trim($address) == '') {
        $errorString .= '<br>Address is required</br>';
    }
    if (!$phone) {
        $errorString .= '<br>Wrong phone number!</br>';
    }
    if (!$email) {
        $errorString .= '<br>Wrong email address</br>';
    }
    if (isset($pizza)) {
        if($_POST['state'] == 'NULL') {
            $errorString .= '<br>Please select an option from the select box.</br>';
        }
    }
    if (trim($amount) == 0) {
        $errorString .= '<br>Choose at least one pizza</br>';
    }

    // Report
    if ($errorString == '') {
        $siteEmail = 'maksim.dzjubenko@ivkgk.ee';
        $subject = 'Message from site - contact form';

        $comment = "
            <i>Your pizza order</i>
            <hr>
            <br>Your name: $name</br>
            <br>Your address: $address</br>
            <br>Your phone: $phone</br>
            <br>Your email: $email</br>
            <br>Your pizza: $pizza, amount: $amount </br>
            <br>Final cost: $cost$</br>
            <hr>
            -------End order-------
        ";
        // mail($siteEmail, $subject, $comment);
        // mail($email, $subject, $comment);

        $_SESSION['comment'] = $comment;
    }
    elseif ($errorString != '') {
        $_SESSION['error'] = $errorString;
    }

    header('Location: pizzaAnswer.php');
}
else {
    header('Location: pizzaForm.php');
}

?>