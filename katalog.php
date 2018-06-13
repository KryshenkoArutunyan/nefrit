<?php
require_once "bd.php";

$data=$bd->query("SELECT * FROM katalog ");
//var_dump($data);
$katalog=$data->fetch_all(MYSQLI_ASSOC);
//var_dump($katalog);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="SHORTCUT ICON" href="images/logo.ico" type="image/x-icon">
<SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
<link rel="stylesheet" type="text/css" href="script/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<SCRIPT type="text/javascript" src="/js/popup_img.js"></SCRIPT>
<meta charset="utf-8">
<title>Нефрит | Ювелирный магазин</title>
</head>
<body>
  <br>
<header >
<ul  id="navbar">
  <li><a href="index.html">Главная</a></li>
  <li><a href="katalog.php">Каталог</a>
    <ul>
      <li><a href="katalog.php#1">Кольца</a></li>
      <li><a href="katalog.php#2">Браслеты</a></li>
      <li><a href="katalog.php#3">Подвески</a></li>
      <li><a href="katalog.php#4">Серьги</a></li>
    </ul>
  </li>
  <li><a href="onas.html">О магазине</a></li>
 <li><a href="contacts.html">Контакты</a></li>
    <li><a href="skidki.html">Скидки</a></li>
    <li class="img"><a href="index.html"><img src="images/logo.png"></a></li>
</ul>
</header>
<br>

<img src="images/niz_line.gif">

<main class="katalog">
  <a name="1"><h3>Кольца</h3></a>
<section>
  <?php
  foreach ($katalog as $key => $value) {
    if ($value['id_pk']=='1') ///die( "key  ". $value['price']);
  //}
  echo "
   <figure>
   <a rel='gallery' class='photo' href='".$value['foto']."'><img id='img_id' src='".$value['foto']."' width='200px' height='200px' alt='Кольцо' /></a>
    <figcaption>Артикул:".$value['article']." <br>Цена:".$value['price']."</figcaption>
   </figure>
 
   ";}
    ?>
</section>
  <a name="2"><h3>Браслеты</h3></a>
  <section>
     <?php
  foreach ($katalog as $key => $value) {
    if ($value['id_pk']=='2') ///die( "key  ". $value['price']);
  //}
  echo "
   <figure>
   <a rel='gallery' class='photo' href='".$value['foto']."'><img id='img_id' src='".$value['foto']."' width='200px' height='200px' alt='Браслет' /></a>
    <figcaption>Артикул:".$value['article']." <br>Цена:".$value['price']."</figcaption>
   </figure>
 
   ";}
    ?>
  </section>
  <a name="3"><h3>Подвески</h3></a>
   <section>
     <?php
  foreach ($katalog as $key => $value) {
    if ($value['id_pk']=='3') ///die( "key  ". $value['price']);
  //}
  echo "
   <figure>
   <a rel='gallery' class='photo' href='".$value['foto']."'><img id='img_id' src='".$value['foto']."' width='200px' height='200px' alt='Подвеска' /></a>
    <figcaption>Артикул:".$value['article']." <br>Цена:".$value['price']."</figcaption>
   </figure>
 
   ";}
    ?>
  </section>
  <a name="4"><h3>Серьги</h3></a>
  <section>
     <?php
  foreach ($katalog as $key => $value) {
    if ($value['id_pk']=='4') ///die( "key  ". $value['price']);
  //}
  echo "
   <figure>
   <a rel='gallery' class='photo' href='".$value['foto']."'><img id='img_id' src='".$value['foto']."' width='200px' height='200px' alt='Серьги' /></a>
    <figcaption>Артикул:".$value['article']." <br>Цена:".$value['price']."</figcaption>
   </figure>
 
   ";}
    ?>
  </section>
</main>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<DIV ID = "toTop" > ^ Наверх </DIV >
<br>
<img src="images/niz_line.png">
<footer>
<section>
<div id="dno">
<div id="dnori">
<section class="left">

<ul id="social">
<li><a href="https://www.instagram.com/nefrit_official/" title="instagram" ><img style="border-radius:12px;" alt="" src="images/inst_logo.png"></a></li>
<li><a href="https://vk.com/public41155568" title="vkontakte" ><img style="border-radius:12px;" alt="" src="images/vk_logo.png"></a></li>
<li><a href="https://www.facebook.com/nefritgoldrostov" title="facebook" ><img style="border-radius:12px;" alt="" src="images/facebook_logo.png"></a></li>
</ul>
</section>
<section class="right">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18970.30469663672!2d39.038278714028245!3d45.02588636756484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5379820726061bd8!2z0JzQtdGA0LjQtNC40LDQvQ!5e0!3m2!1sru!2sru!4v1523344448175" width="392" height="222" frameborder="0" style="border:0" allowfullscreen></iframe>


</section>
<section><h3><a>Контакты</a></h3>

<ul>
<li>Ювелирный магазин "Нефрит"</li>

<li>Телефон:(863) 311-15-25</li>


<li>ул. Стасова, 182/1, г.Краснодар</li>

<li>Часы работы:10:00-22:00</li>
<br>
<li>© 2017-2018 Все права защищены.</li>
</ul>
</div>
</div>
</section>
</section>
</footer>
  </body>
<script type="text/javascript" src="script/skidki.js"></script>
<script type="text/javascript" src="script/katalog.js"></script>
  <script type="text/javascript" src="script/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="script/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="script/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</html>