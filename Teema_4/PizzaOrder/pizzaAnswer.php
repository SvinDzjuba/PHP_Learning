<?php
session_start();
include_once('header.php');
include_once('pizzaHeader.php');
?>

<?php
if (isset($_SESSION['error']) || isset($_SESSION['comment'])) {
    if (isset($_SESSION['comment'])) {
        echo '<h3>Precessing your order ...</h3>';
        echo '<h4>Your order has been processed. Thank you.</h4><hr>';

        echo '<p>Your pizza: <br>' . $_SESSION['comment'] . '</p>';

        echo '<hr><p><a href = "pizzaForm.php">Order another pizza</a></p>';
        unset($_SESSION['comment']);
    }
    elseif (isset($_SESSION['error'])) {

        echo '<h3>Type error</h3>';
        echo '<p>' . $_SESSION['error'] . '</p>';
        echo '<hr><p><a href="pizzaForm.php">Order another pizza</a></p>';

        unset($_SESSION['error']);
    }
}
else {
    header('Location: pizzaForm.php');
}
session_destroy();
?>

<?php
include_once('footer.php');
?>