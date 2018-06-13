<?php
//session_start();

if (@$_SESSION['MynefritAdmin']!='auth')
 header('location: enter.php');
//require_once "enter.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="SHORTCUT ICON" href="images/logo.ico" type="image/x-icon">
<meta charset="utf-8">
<title>Нефрит | Ювелирный магазин</title>
</head>
<body>
<section>
	<div class="postl">
		<br>
	<h3>Добавить</h3>
<form method="POST" action="add.php" enctype="multipart/form-data">
    <input type="text" name="article" placeholder="Артикул" ></input>
        <input type ="number" name="price" placeholder="Цена"></input>
 <input type="file" name="photo" > </input> 
 <br>
 <select name="kat">
  <option value="" selected="selected"></option>
<option value="1">Кольца</option>
<option value="2">Браслеты</option>
<option value="3">Подвески</option>
<option value="4"> Серьги</option>
 </select> 
 <br>            
    <input type='submit' value ="Добавить" class="otprav2"> 
</form>

</div>
<div class="postl">
		<br>
	<h3>Изменить</h3>
<form method="POST" action="red.php" enctype="multipart/form-data">
    <input type="text" name="article" placeholder="Артикул"></input>
    <input type="text" name="article2" placeholder="Новый артикул"></input>
        <input type ="number" name="price" placeholder="Цена"></textarea>
         
 <input type="file" name="photo" >  
   
  <br>
 <select name="kat">
  <option value="" selected="selected"></option>
<option value="1">Кольца</option>
<option value="2">Браслеты</option>
<option value="3">Подвески</option>
<option value="4"> Серьги</option>
 </select> 


 <br>              
    <input type='submit' value ="Изменить" class="otprav2"> 
</form>
</div>
<div class="postl">
		<br>
	<h3>Удалить</h3>
<form method="POST" action="del.php">
    <textarea name="article" placeholder="Артикул" cols="47" ></textarea>
                   
    <input type='submit' value ="Удалить" class="otprav2"> 
</form>
</div>
<form method="POST" action="exit.php">
<input type='submit' value ="Выйти">
</form>
</section>
	  </body>
</html>