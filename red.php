<?php
require_once "bd.php";



  //$bd->refresh();
  //var_dump($bd);
  $imgDir = "images/katalog";        // каталог для хранения изображений
  @mkdir($imgDir, 0777);
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
       // var_dump($name);
         move_uploaded_file($tmp, $src);// Добавляем файл в каталог с фотографиями.
           // echo' adrticle='.var_dump($article2);   
$article=$_POST['article'];

if (!($preparedStatement = $bd->prepare('SELECT * FROM katalog WHERE article = ? '))) {
      die( "Не удалось подготовить запрос: (" . $bd->errno . ") " . $bd->error);
  }
  $preparedStatement->bind_param("s",$article);
          $preparedStatement->execute();
          //var_dump( $preparedStatement);
          //var_dump($price);

            $result=$preparedStatement->affected_rows;  
            // var_dump($result);

if (!$result) die('Неверный артикул!'); 
  

else {

  $preparedStatement->close();
  $price=(int)$_POST['price'];
//$kat=$kategory[$_POST['kat']];
  $kat=(int)$_POST['kat'];
  $article2=$_POST['article2'];

  //var_dump($_POST);

//$photo=$_POST['photo'];

  if (!($preparedStatement = $bd->prepare("UPDATE katalog SET article=?, price=?, id_pk=?, foto=? WHERE 
    article =? "))) {
      die( "Не удалось подготовить запрос: (" . $bd->errno . ") " . $bd->error);
    }
    $preparedStatement->bind_param("siiss",$article2, $price, $kat, $src, $article);
          $preparedStatement->execute();
          
          //var_dump($price);

            $result=$preparedStatement->affected_rows;  
            // var_dump($result);

  if (!$result) die( 'Error update in BD'); 
  

  else echo "OK";
}  
$preparedStatement->close();












        
      } 
      else 
        die( "<h2>Попытка добавить файл недопустимого формата!</h2>");
      
    } else 
      die( "<h2>Ошибка закачки </h2>");
    $bd->close();