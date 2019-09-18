<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
  <title>Reportes</title>

  <link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />


  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />


  <link type="text/css" rel="stylesheet"
    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" />


  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylereportes.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/daterangepicker.css" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css" />


  <!-----------------------------------css----------------------->

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>/scripts/daterangepicker.js"></script>

  <script src="<?php echo base_url(); ?>scripts/sweetalert2.js "></script>

  <script src="<?php echo base_url(); ?>scripts/scriptreportes.js "></script>





</head>

<body  id="body">
  <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
    Reportes
    <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
  </div>


  <div id="bottomside" class="sidenav2">
        <a href="<?php echo base_url(); ?>menuprincipal" id="about" title="Volver al menú principal">Home</a>
        <a href="<?php echo base_url(); ?>mmonitores" id="cmoni" title="Consultar monitores">C.monitores</a>
        <a href="<?php echo base_url(); ?>horarios" id="blog" title="Horarios monitores!">Horarios</a>
    </div>




  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <form id="fomrconsultar" method="POST" action="<?php echo base_url(); ?>mreporte/consultar">
      <br><br>
      <div class="form-group">
        <div class="col-md-12">
          <label for="">Seleciona el rango de fecha</label>
          <input id="config-demo2" class="form-control" required type="text" name="config-demo2" readonly
            style="cursor:pointer;">
        </div>
      </div>
      <br><br><br><br>
      <div class="form-group">
        <div class="col-md-12">
          <label for="">Selecciona el tipo de reporte</label>
          <select class="form-control" id="sel1" name="tipom" required>
            <option value="1">Horas de monitores trabajadas</option>
            <option value="2">Horarios</option>
          </select>
        </div>
      </div>
      <br><br><br><br><br><br>
      <div class="form-group">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary form-control">Hacer consulta</button>
        </div>
      </div>

    </form>

  </div>

  <br><br><br><br>
  <div class="col-sm-1"></div>
  <div id="main">
    <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; Consulta</span>
    <br><br>
    <div class="col-md-12" id="contenreporte">