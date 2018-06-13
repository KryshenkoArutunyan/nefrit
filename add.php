<?php

require_once "bd.php";

//$kategory=['Кольца'=>1,'Браслеты'=>2,'Подвески'=>3,'Серьги'=>4];
$article=$_POST['article'];

$price=(int)$_POST['price'];
//$kat=$kategory[$_POST['kat']];
$kat=(int)$_POST['kat'];
  

//var_dump($kat);

//$photo=$_POST['photo'];

if (!($preparedStatement = $bd->prepare('INSERT INTO katalog (article, price, id_pk) VALUES (?,?,?)  '))) {
    	die( "Не удалось подготовить запрос: (" . $bd->errno . ") " . $bd->error);
	}
	$preparedStatement->bind_param("sii",$article, $price, $kat);
          $preparedStatement->execute();
         // var_dump( $preparedStatement);
          //var_dump($price);

            $result=$preparedStatement->affected_rows;  
          	// var_dump($result);

if (!$result) die(' Error update in BD'); 
	

else echo "OK";
$preparedStatement->close();

 $id = $bd->insert_id;  // получаем id последней вставленнонй записи, чтобы связать фото и юзера в бд 

         //die(var_dump($id));     
      $imgDir = "images/katalog";        // каталог для хранения изображений
  mkdir($imgDir, 0777);
      $tmp = $_FILES['photo']['tmp_name']; //  временное имя файла с путём
		//die(var_dump($tmp));
    
       // Проверяем, принят ли файл.
      if (is_uploaded_file($tmp)) {

      $info = getimagesize($tmp);
      //var_dump($info);
      // Проверяем, является ли файл изображением.
      if (preg_match('{image/(.*)}is', $info['mime'], $p)) {

        // p - расширение - как часть MIME-типа после "image/".
        $name = $_FILES['photo']['name']; //можно получить реальное имя так с расширением
        	
        $src="$imgDir/".time().$name;
        //$src="H:/OpenServer/domains/nefrit/images/".time().$name;
        // чтобы фото с одинаковыми именами не заменяли друг друга, добавляем случайное число
       // "$imgDir/".time().$i.".".$p[1];
        
         var_dump(move_uploaded_file($tmp, $src));// Добавляем файл в каталог с фотографиями.
                
        $q=$bd->query("UPDATE katalog SET foto='". $src."'  WHERE id_k=$id ");
        if (!$q) {
          
          die(var_dump($bd). "eroor update photo ");
        }
      } 
      else 
        die( "<h2>Попытка добавить файл недопустимого формата!</h2>");
      
    } else 
      die( "<h2>Ошибка закачки </h2>");
     $bd->close();