<?php require('includes/utilities.php') ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once('resources/header.php'); ?>
<body>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
<div class="container">
 <?php require_once('resources/navigation.php'); ?>

<br>

<div class="text-center">
	<h1>Clasificados San Martin</h1>
	<p>De todo un poco y <b>mucho tambien</b>....</p>
</div>
<br>
<hr>
<a href="" title="" onclick="moverDerecha();"></a>
<?php require_once('resources/carousel.php'); ?>
<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>
</body>
</html>