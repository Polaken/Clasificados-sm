<?php require('includes/utilities.php') ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once('resources/header.php'); ?>
<body>
<style>
  body {
        background: #F5DEB3;
        font-family: 'Rambla', sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
    }
  </style>
<div class="container">
 <?php require_once('resources/navigation.php'); ?>

<br>

<div class="text-center page-header">
	<h1 class="animated zoomInDown">Clasificados San Martin</h1>
	<p class="animated zoomInUp">De todo un poco y <b>mucho tambien</b>....</p>
</div>
<br>
<hr>
<a href="" title="" onclick="moverDerecha();"></a>
<?php require_once('resources/carousel.php'); ?>
<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
    });
</script>
</body>
</html>