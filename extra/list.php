<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="robots" content="noindex, nofollow">
   <meta name="googlebot" content="noindex, nofollow">
   <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-dark bg-primary mb-3">
  <div class="container">
    <a class="navbar-brand" href="#">
     Listado
    </a>
  </div>
</nav>
<table class="table container text-center">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Operación</th>
      <th scope="col">Medio de pago</th>
    </tr>
  </thead>
  <tbody>
    <?php require('../php/read.php'); ?>
  </tbody>
</table>

<script src="../js/jquery.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>