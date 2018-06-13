<?php
session_start();
$name = $_POST['name'];
$password = $_POST['password'];

require_once 'bd.php';
if (!($preparedStatement = $bd->prepare('SELECT `id` FROM admins WHERE name = ? and password = ?'))) {
    	die( "Не удалось подготовить запрос: (" . $bd->errno . ") " . $bd->error);
	}
	$preparedStatement->bind_param("ss",$name, $password);
         $a= $preparedStatement->execute();
          //var_dump( $a);
          //var_dump($price);

            $result=$preparedStatement->fetch(); 
          	//var_dump($result);
//die(  var_dump($preparedStatement));
if (!$result) die(' Неверный логин или пароль!'); 
	

else{  
@$_SESSION['MynefritAdmin'] = 'auth'; 

require_once 'myadmin.php';


}
	