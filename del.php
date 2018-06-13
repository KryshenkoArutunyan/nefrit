<?php

require_once "bd.php";


$article=$_POST['article'];
if (!($preparedStatement = $bd->prepare('DELETE FROM katalog WHERE article = ?  '))) {
    	die( "Не удалось подготовить запрос: (" . $bd->errno . ") " . $bd->error);
	}
	$preparedStatement->bind_param("s",$article);
          $preparedStatement->execute();
         // var_dump( $preparedStatement);
          //var_dump($price);

            $result=$preparedStatement->affected_rows;  
          	// var_dump($result);

if (!$result) die('Error delete from BD'); 
	

else echo "Удалено";
$preparedStatement->close();