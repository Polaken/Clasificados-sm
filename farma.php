<?php require('includes/utilities.php'); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<?php require_once('resources/header.php'); ?>
<body>
<div class="container">
  <?php require_once('resources/navigation.php'); ?>
  <table>
  <?php
		header('Content-Type: text/html;charset=utf-8');
		include_once 'includes/bdd.php';
		$con = crearConexion();
		$con -> set_charset("utf-8");
		$sql  = 'SELECT * FROM `farmacias`';
		
              ?>
  </table>
  <div class="container">
  <h2 class="text-center">Farmacias</h2>
  <hr />
  <h4>aguila</h4>
		<p>Direccion:</p>
		<p>Telefono:</p>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Mapa</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">&#191D&oacutende queda?</h4>
        </div>
        <div class="modal-body">
          <iframe
			src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1643.0887581168035!2d-58.55326627731567!3d-34.549060546431214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd41db458bbe02cb6!2sANTIGUA+FARMACIA+DEL+AGUILA!5e0!3m2!1ses!2sar!4v1487721170617"
			width="570" height="450" frameborder="0" style="border: 0"
			allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>
</body>
</html>