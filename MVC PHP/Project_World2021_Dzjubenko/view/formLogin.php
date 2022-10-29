<?php
ob_start();
$title = "Manage - Login form";
?>
<div style="margin-top:5%">
    <form action="loginResult" method="POST" class="form-signin">
        <h3 class="form-signin-heading">Введите ваши данные</h3>
        <input type="email" name="email" class="form-control" placeholder="E-mail пользователя" autofocus required>
        <input type="password" name="password" class="form-control" placeholder="Пароль" required>
        <button class="btn-primary btn-block" type="submit" name="send">Войти</button>
        <p style="padding-top:10px">
            <?php if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                } ?>
        </p>
    </form>
</div>

<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>