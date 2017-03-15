<?php require('includes/utilities.php'); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<?php require_once('resources/header.php'); ?>
<body>
<div class="container">
  <?php require_once('resources/navigation.php'); ?>
  <?php
    session_start();
	 	header('Content-Type: text/html;charset=utf-8');
		include_once ('includes/bdd.php');
		$con = crearConexion();
		$con -> set_charset("utf-8");
		$sql  = "SELECT * FROM farmacias";
    $stmt = $con -> query($sql);
    $results = $stmt -> fetch_all();
    //var_dump($results);
    $sql ="LIMIT 0,5";
		
  ?>
  <h1 class="jumbotron text-center">Farmacias</h1>
  <div class="row table-responsive">
  <table class="table" id="myTable">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Dirección</th>
      <th>Teléfono</th>
      <th>Imagen</th>
      <th>¿Donde se encuentra?</th>
    </tr>
  </thead>
  <?php 
  foreach ($results as $rs)
  {
  ?>
  <tbody>
    <tr>
      <td><?php echo $rs[1]; ?></td>
      <td><?php echo $rs[2]; ?></td>
      <td><?php echo $rs[3]; ?></td>
      <td><img src="<?php echo $rs[4]; ?>" alt="" style="width: 200px; height: 200px; "></td>
      <td><?php echo $rs[5]; ?></td>
        <?php } ?>
  </tbody>
  </table>

  
  </div>
  
  
</div>
<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>

</body>
</html>