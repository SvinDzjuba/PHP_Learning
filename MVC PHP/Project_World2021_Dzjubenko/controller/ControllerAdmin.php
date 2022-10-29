<?php
class ControllerAdmin
{
    public static function FormLogin()
    {
        include_once('view/formLogin.php');
    }
    public static function LoginAction()
    {
        $result = ModelAdmin::userLogin();
        if (isset($result) && $result == true) {
            include_once('view/startManage.php');
        } else {
            include_once('view/formLogin.php');
        }
    }
    public static function FormProfile()
    {
        include_once('view/profileTable.php');
    }
    public static function profileEditResult()
    {
        $result = ModelAdmin::ChangePassword();
        include_once('view/profileTable.php');
    }
    public static function LogoutAction()
    {
        $result = ModelAdmin::UserLogout();
        include_once('view/formLogin.php');
    }
}
?>