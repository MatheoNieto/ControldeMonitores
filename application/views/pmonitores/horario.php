<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!----------------icono_pestaña------------------>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
  <title>Horario</title>
  <!-----------------------------------css----------------------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylemonitor/stylehorario.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">
</head>


<body>
  <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
    Horario de monitorias
    <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
  </div>

  <div id="bottomside" class="sidenav">
        <a href="<?php echo base_url(); ?>menuprincipal" id="about" title="Volver al menú principal">Home</a>
    </div>

  <?php
foreach($dtamonitor as $datamoni){

  if($datamoni->horario >0){
?>
  <div class="col-md-12" id="contenschedule">
    <h2 class="text-center">Horario de disponibilidad</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miercoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
          <th>Sabado</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <?php
        foreach ($dtahorario as $datahorario) {
          echo '<td>'.$datahorario->lunes.'</td>
          <td>'.$datahorario->martes.'</td>
          <td>'.$datahorario->miercoles.'</td>
          <td>'.$datahorario->jueves.'</td>
          <td>'.$datahorario->viernes.'</td>
          <td>'.$datahorario->sabado.'</td>';
        }
        ?>
      </tr>
      </tbody>
    </table>
    <br><br>
    

    <div class="col-md-12">
      <hr class="hrd">
      <h2 class="text-center">Horario laboral actualmente</h2>
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miercoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
          <th>Sabado</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        
          <td><?php  foreach ($loslunes as $datahorario) { echo '<label for="">Hora de inicio:</label> '.$datahorario->horainicio.'<br> <label for="">Hora de Finalización:</label> '.$datahorario->horafin.'<br> <label for="">Lugar de trabajo:</label> '.$datahorario->lugartrabajo.'<br> <label for="">Comentarios:</label> '.$datahorario->comentarios;} ?></td>

          <td><?php  foreach ($losmartes as $datahorario) { echo '<label for="">Hora de inicio:</label> '.$datahorario->horainicio.'<br> <label for="">Hora de Finalización:</label> '.$datahorario->horafin.'<br> <label for="">Lugar de trabajo:</label> '.$datahorario->lugartrabajo.'<br> <label for="">Comentarios:</label> '.$datahorario->comentarios;} ?></td>

          <td><?php  foreach ($losmiercoes as $datahorario) { echo '<label for="">Hora de inicio:</label> '.$datahorario->horainicio.'<br> <label for="">Hora de Finalización:</label> '.$datahorario->horafin.'<br> <label for="">Lugar de trabajo:</label> '.$datahorario->lugartrabajo.'<br> <label for="">Comentarios:</label> '.$datahorario->comentarios;} ?></td>

          <td><?php  foreach ($losjueves as $datahorario) { echo '<label for="">Hora de inicio:</label> '.$datahorario->horainicio.'<br> <label for="">Hora de Finalización:</label> '.$datahorario->horafin.'<br> <label for="">Lugar de trabajo:</label> '.$datahorario->lugartrabajo.'<br> <label for="">Comentarios:</label> '.$datahorario->comentarios;} ?></td>

          <td><?php  foreach ($losviernes as $datahorario) { echo '<label for="">Hora de inicio:</label> '.$datahorario->horainicio.'<br> <label for="">Hora de Finalización:</label> '.$datahorario->horafin.'<br> <label for="">Lugar de trabajo:</label> '.$datahorario->lugartrabajo.'<br> <label for="">Comentarios:</label> '.$datahorario->comentarios;} ?></td>

          <td><?php  foreach ($lossabados as $datahorario) { echo '<label for="">Hora de inicio:</label> '.$datahorario->horainicio.'<br> <label for="">Hora de Finalización:</label> '.$datahorario->horafin.'<br> <label for="">Lugar de trabajo:</label> '.$datahorario->lugartrabajo.'<br> <label for="">Comentarios:</label> '.$datahorario->comentarios;} ?></td>
        
       
      </tr>
      </tbody>
    </table>
    </div>
    <p>&nbsp;</p>
    <p class="text-center"><b>Nota:</b>Si deseas hacer alguna modificación del horario por favor acercarse algún administrativo de la biblioteca</p>
  </div>
  
  



  <?php
  }else{
?>
  <div class="col-md-12" id="contentdays">
    <form id="formschedule" action="<?php echo base_url(); ?>phorario/registrarhorario" method="post">
      <!-----
       LUNES
       ------>
      <div class="col-md-12 marginn">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h2 class="text-center">Lunes</h2>
          <br>
          <div class="col-md-4">
            <label for="horainil">Hora de inicio:</label>
            <select class="form-control" id="horainil" name="horainil">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="horafl">Hora de finalización</label>
            <select class="form-control" id="horafl" name="horafl">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Tipo de monitoria</label>
            <select name="tmonil" id="tmonil" class="form-control">
              <option>Ninguna</option>
              <?php
              foreach($typemonitoria as $tipomonitoria){
              echo '<option>'.$tipomonitoria->nombre.'</option>';
              }
              ?>
            </select>
          </div>
        </div>
      </div>
      <!-----
       MARTES
       ------>
      <div class="col-md-12 marginn">
        <hr class="hrd">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h2 class="text-center">Martes</h2>
          <br>
          <div class="col-md-4">
            <label for="horainil">Hora de inicio:</label>
            <select class="form-control" id="horainimart" name="horainimart">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="horafl">Hora de finalización</label>
            <select class="form-control" id="horafmart" name="horafmart">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Tipo de monitoria</label>
            <select name="tmonimart" id="tmonimart" class="form-control">
            <option>Ninguna</option>
              <?php
              foreach($typemonitoria as $tipomonitoria){
              echo '<option>'.$tipomonitoria->nombre.'</option>';
              }
              ?>
            </select>
          </div>
        </div>
      </div>
      <!-----
       MIERCOLES
       ------>
      <div class="col-md-12 marginn">
        <hr class="hrd">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h2 class="text-center">Miercoles</h2>
          <br>
          <div class="col-md-4">
            <label for="">Hora de inicio:</label>
            <select class="form-control" id="horainimier" name="horainimier">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Hora de finalización</label>
            <select class="form-control" id="horafmier" name="horafmier">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Tipo de monitoria</label>
            <select name="tmonimier" id="tmonimier" class="form-control">
            <option>Ninguna</option>
              <?php
              foreach($typemonitoria as $tipomonitoria){
              echo '<option>'.$tipomonitoria->nombre.'</option>';
              }
              ?>
            </select>
          </div>
        </div>
      </div>
      <!-----
       JUEVES
       ------>
      <div class="col-md-12 marginn">
        <hr class="hrd">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h2 class="text-center">Jueves</h2>
          <br>
          <div class="col-md-4">
            <label for="">Hora de inicio:</label>
            <select class="form-control" id="horainijuev" name="horainijuev">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Hora de finalización</label>
            <select class="form-control" id="horafjueve" name="horafjueve">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Tipo de monitoria</label>
            <select name="tmonijuev" id="tmonijuev" class="form-control">
            <option>Ninguna</option>
              <?php
              foreach($typemonitoria as $tipomonitoria){
              echo '<option>'.$tipomonitoria->nombre.'</option>';
              }
              ?>
            </select>
          </div>
        </div>
      </div>
      <!-----
       VIERNES
       ------>
      <div class="col-md-12 marginn">
        <hr class="hrd">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h2 class="text-center">Viernes</h2>
          <br>
          <div class="col-md-4">
            <label for="">Hora de inicio:</label>
            <select class="form-control" id="horainivier" name="horainivier">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="horafl">Hora de finalización</label>
            <select class="form-control" id="horafvier" name="horafvier">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
              <option>16:00</option>
              <option>16:30</option>
              <option>17:00</option>
              <option>17:30</option>
              <option>18:00</option>
              <option>18:30</option>
              <option>19:00</option>
              <option>19:30</option>
              <option>20:00</option>
              <option>20:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Tipo de monitoria</label>
            <select name="tmonivier" id="tmonivier" class="form-control">
            <option>Ninguna</option>
              <?php
              foreach($typemonitoria as $tipomonitoria){
              echo '<option>'.$tipomonitoria->nombre.'</option>';
              }
              ?>
            </select>
          </div>
        </div>
      </div>
      <!-----
       SABADO
       ------>
      <div class="col-md-12 marginn">
        <hr class="hrd">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h2 class="text-center">Sabado</h2>
          <br>
          <div class="col-md-4">
            <label for="horainil">Hora de inicio:</label>
            <select class="form-control" id="horainisab" name="horainisab">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="horafl">Hora de finalización</label>
            <select class="form-control" id="horafsab" name="horafsab">
              <option>No</option>
              <option>07:00</option>
              <option>07:30</option>
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
              <option>10:00</option>
              <option>10:30</option>
              <option>11:00</option>
              <option>11:30</option>
              <option>12:00</option>
              <option>12:30</option>
              <option>13:00</option>
              <option>13:30</option>
              <option>14:00</option>
              <option>14:30</option>
              <option>15:00</option>
              <option>15:30</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Tipo de monitoria</label>
            <select name="tmonisab" id="tmonisab" class="form-control">
            <option>Ninguna</option>
              <?php
              foreach($typemonitoria as $tipomonitoria){
              echo '<option>'.$tipomonitoria->nombre.'</option>';
              }
              ?>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-12 marginn">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <button class="btn btn-success form-control" data-toggle="tooltip" data-placement="top"
            title="Registra el horario">Registrar</button>
        </div>
        <div class="col-md-3"></div>
      </div>
    </form>
  </div>
  <?php
  }
}
?>



  <div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>


  <script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>scripts/scriptmonitor/scripthorario.js"></script>
  <script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>
  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
</body>

</html>