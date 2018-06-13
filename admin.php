<?php
session_start();

if (@$_SESSION['MynefritAdmin']!='auth'){

require_once "enter.php";


}

else require_once "myadmin.php";

?>
