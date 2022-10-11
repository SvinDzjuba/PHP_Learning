<?php
class Controller { 
   
	// Start page
    public static function StartSite() {
        include_once('view/homepage.php');
        return;
    }
    // Error page
    public static function error404() {
        include_once('view/error404.php');
        return;
    }
    
}
?>