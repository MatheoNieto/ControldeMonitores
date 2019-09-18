<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <!----------------icono_pestaña------------------>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
    <title>Datos personales</title>
    <!-----------------------------------css----------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylemonitor/styledatop.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">

    <!----------------------------------css----------------------->

    <script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>scripts/scriptmonitor/scriptdatop.js"></script>
    <script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>


  </head>


  <body onload="nobackbutton();">
    <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
      Mis datos personales
      <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
    </div>

    <div>
      <ul id="navigation">
        <li class="home"><a href="<?php echo base_url(); ?>menumonitores" title="Ir a menu principal"><span>Menu.<i><img
                  src="<?php echo base_url(); ?>css/images/home.png" alt=""></i></span></a></li>
      </ul>
    </div>

    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php foreach($datosmios as $datos){ echo $datos->apellidos.' '.$datos->nombres; } ?></div>
        <div class="panel-body">
          <div class="col-md-3">
            <p><strong>Telefono: </strong><?php foreach($datosmios as $datos){ echo $datos->tel; } ?></p>
            <p><strong>Correo: </strong><?php foreach($datosmios as $datos){ echo $datos->correo; } ?></p>
            <p><strong>direcion: </strong><?php foreach($datosmios as $datos){ echo $datos->direccion; } ?></p>
            <p><strong>Bario: </strong><?php foreach($datosmios as $datos){ echo $datos->barrio; } ?></p>
            <p><strong>Ciudad: </strong><?php foreach($datosmios as $datos){ echo $datos->ciudad; } ?></p>
            <p><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Cambiar
                contraseña</button></p>
            <p><strong>Fortalezas Academicas: </strong>
              <br><?php foreach($datosmios as $datos){ echo $datos->areasesorias; } ?> </p>

          </div>
          <div class="col-md-3">
            <div class="div-img">
              <img class="img" src="<?php echo base_url(); ?>css/perfil/<?php foreach($datosmios as $datos){ echo $datos->imgperfil; } ?>"
                title="foto de <?php foreach($datosmios as $datos){ echo $datos->nombres; } ?>" alt="Foto">
              <div class="text"><?php foreach($datosmios as $datos){ echo $datos->apellidos.' '.$datos->nombres; } ?></div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Cambiando Contraseña</h4>
          </div>
          <div class="modal-body">
            <form id="cambiarcontrasena" method="post"
              action="<?php echo base_url(); ?>pmonitordatosp/cambiarcontrasena" onsubmit="return contrasena()"
              autocomplete="off">
              <div class="form-group">
                <label for="pwd">Ingrese la nueva contraseña:</label>
                <input type="password" class="form-control" id="txtcontraacutlizar" name="txtcontraacutlizar">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success form-control">Cambiar contraseña</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>





    <div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>
    <script>
      $(function () {

        $('#cambiarcontrasena').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            url: $("#cambiarcontrasena").attr("action"),
            type: $("#cambiarcontrasena").attr("method"),
            data: $("#cambiarcontrasena").serialize(),
            complete: function (data) {
              swal("Listo", "cambio la contraseña correctamente", "success");
            }
          });

        });

      });
    </script>
    <script>
      function contrasena() {
        var password = $("#txtcontraacutlizar").val();
        var passwordlen = password.length;
        if (passwordlen < 7) {
          swal("Información", "la contraseña debe tener como minimo 7 caracteres")
          return false;
        } else {

          $("#txtcontraacutlizar").val(password + "          ");
        }
      }
    </script>
  </body>

</html>