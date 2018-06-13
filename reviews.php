<?php

require_once "bd.php";
$respond=['resp'=>0, 'message'=>''];

$fio=$_POST['fio'];

$email=$_POST['email'];

$phone=$_POST['phone'];
/*echo $fio;*/

$message=$_POST['message'];
/*echo $message;*/


$qver=$bd->query("INSERT INTO reviews SET fio='".$fio."', email='".$email."', phone='".$phone."', message='".$message."'");

if ($qver)  {
	echo "Сообщение отправлено";
}
 //echo "Отзыв отправлен";//header("Location:contacts.html");
else {
//var_dump($bd);//echo "ошибка";
 echo "Ошибка";
}

$bd->close();
 