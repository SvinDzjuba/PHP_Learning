<?php

session_start();
// Btn "send" check
if (isset($_POST['send'])) {
    // To get error list
    $errorString = '';

    // Form data reading
    $name = $_POST['name'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = $_POST['message'];

    // Input fields validation
    if (trim($name) == '') {
        $errorString .= '<br>Username is required</br>';
    }
    if (!$email) {
        $errorString .= '<br>Wrong email address</br>';
    }
    if (trim($message) == '') {
        $errorString .= '<br>Message filed in empty</br>';
    }

    // Report
    if ($errorString == '') {
        $siteEmail = 'maksim.dzjubenko@ivkgk.ee';
        $subject = 'Message from site - contact form';

        $comment = "
            <i>Contact form site</i>
            <hr>
            Hello<br>
            Your name: $name<br>
            Your email: $email<br>
            Message: $message<br>
            <hr>
            Message has been sent to firm email and your $email<br>
            -------End message-------
        ";
        mail($siteEmail, $subject, $comment);
        mail($email, $subject, $comment);

        $_SESSION['comment'] = $comment;
    }
    elseif ($errorString != '') {
        $SESSION['error'] = $errorString;
    }

    header('Location: contactAnswer.php');
} // send
else {
    header('Location: contactForm.php');
}

?>