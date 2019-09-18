<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
    <title>Registrar un nuevo monitor</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylemmonitoregistrar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">

    <!-----------------------------------css----------------------->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>scripts/scriptmmonitoregistrar.js"></script>
    <script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>


</head>

<body id="body">
    <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
        Registrar un nuevo monitor
        <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="<?php echo base_url(); ?>menuprincipal" id="about" title="Volver al menú principal">Home</a>
        <a href="<?php echo base_url(); ?>mmonitores" id="cmoni" title="Consultar monitores">C.monitores</a>        
        <a href="<?php echo base_url(); ?>mhorarios" id="blog" title="Horarios">Horarios</a>
        <a href="<?php echo base_url(); ?>mreporte" id="projects" title="¿Necesitas reportes? da click!">Reportes</a>
    </div>
    
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <form class="form-horizontal" id="consultarmonitors" method="post" action="<?php echo base_url(); ?>mregistramonitor/consultarmonitor" autocomplete="off">
            <fieldset>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="">Ingrese el codigo:</label>
                        <input id="txtcodigo" name="txtcodigo" placeholder="1088234567" class="form-control" required type="text">
                    </div>
                    <div class="col-md-3"><br>
                        <button type="submit" class="btn btn-info form-control" style="margin-top:5px;">Validar</button>

                    </div>

                </div>
            </fieldset>
        </form>
    </div>
    <div style="border-left:2px solid gray;height:500px"></div>

    <div class="col-md-9 " id="divfomr" style="height:550px;  overflow-y: auto;overflow-x: hidden; margin-top:50px;">
