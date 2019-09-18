<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<!--------------------------------------------------------------------------------------------------------------------------------
Este es el login
--------------------------------------------------------------------------------------------------------------------------------->
<html>

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
  <title>Control de monitores</title>
  <!--------------------------------------------------------------------------------------------------------------------------------
  SE CARGAN LOS ARCHIVOS CSS PARA LA PAGIANA DEL LOGIN
--------------------------------------------------------------------------------------------------------------------------------->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">
  <!--------------------------------------------------------------------------------------------------------------------------------
sE CARGAN LOS SCRIPTS
--------------------------------------------------------------------------------------------------------------------------------->

  <script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js"></script>
  <script src="<?php echo base_url(); ?>scripts/jquery.validate.js"></script>
  <script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>
  <script src="<?php echo base_url(); ?>scripts/scriptlogin.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>

  <!--------------------------------------------------------------------------------------------------------------------------------
      SE PONE LA IMAGEN DE FONDO DEL LOGIN     
--------------------------------------------------------------------------------------------------------------------------------->
  <div id="fondo">
    <img src="<?php echo base_url(); ?>css/images/biblioteca1.jpg" alt="No se encontro la imagen de fondo" width="100%"
      height="100%">
  </div>

  <div id="contenedor">
    <div class="container">

      <div class="row" id="pwd-container">
        <div class="col-md-3"></div>

        <div class="col-md-6" id="contenlogin">
          <section class="login-form">
            <form id="formlogin" role="login" action="" method="POST" autocomplete="off">
              <center>
                <h1 id="h1">Control de monitores</h1>
                <small id="small">Login</small>
              </center>
              <br>
              <input type="text" name="codigo" id="codigo" placeholder="Ingrese el usuario"
                class="form-control input-lg" />
              <input type="password" class="form-control input-lg" id="password" placeholder="Ingrese su contraseña"
                name="password" />
              <button type="submit" class="btn btn-lg btn-success btn-block" id="btn">Ingresar</button>
            </form>
          </section>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</body>

</html>