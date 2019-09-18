<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
    <title>Monitores registrados</title>
    <!-----------------------------------css----------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile.custom.structure.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile.custom.theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylemmonitor.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">

    <!-----------------------------------css----------------------->

    <script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>scripts/scriptmmonitor.js"></script>
    <script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>
    <script src="<?php echo base_url(); ?>scripts/jquery.mobile.custom.js"></script>

</head>

<body id="body">
    <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
        Monitores registrados
        <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
    </div>
    
    <div id="mySidenav" class="sidenav">
        <a onclick="window.location='<?php echo base_url(); ?>menuprincipal'" id="about" title="Volver al menú principal">Home</a>
        <a onclick="window.location='<?php echo base_url(); ?>mhorarios'" id="cmoni" title="Registro de sesión">Horarios</a>
        <a onclick="window.location='<?php echo base_url(); ?>mreporte'" id="blog" title="Horarios">Reportes</a>
    </div>



    <br><br><br><br>
    <div class="container">
        <div style="margin-left:10px;" id="container">
            <h3>Monitores Registrados</h3>
            <br>
            
            <ul id="listA" data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">
                <?php            
            foreach($usuarios as $users){
                
            echo '<li data-role="collapsible" data-iconpos="false" data-inset="true">
            <h2> <span class="glyphicon glyphicon-chevron-right"></span> '.$users->apellidos.' '.$users->nombres.'</h2>
            <ul data-role="listview" data-theme="b">
            <li><div class="col-md-1"><img src="'.base_url().'css/perfil/'.$users->imgperfil.'" alt="" width="100%"></div></li>
            <li><a href="#"><strong>Codigo:</strong> '.$users->codigo.'</a></li>
            <li><a href="#"><strong>Telefono:</strong> '.$users->tel.'</a></li>
            <li><a href="#"><strong>Correo:</strong> '.$users->correo.'</a></li> 
            <li><a href="#"><strong>Direccion:</strong> '.$users->direccion.' - '.$users->barrio.' ('.$users->ciudad.')</a></li>
            <li><a href="#"><strong>Carrera:</strong> '.$users->programas.'</a></li>
            <li><a href="#"><strong>Semestre:</strong> '.$users->semestre.'</a></li>
            <li><a href="#"><strong>Areas de fortaleza:</strong> '.$users->areasesorias.'</a></li>
            <li><a href="#"><strong>Dependencia que pertenece:</strong> '.$users->dependencia.'</a></li>';
            if($users->horaasignadas > 0 ){
                echo '<li><a href="#"><strong>Horas asignadas:</strong> '.$users->horaasignadas.'</a></li>
                <li><button onclick="cargardatos('.$users->codigo.')" class="btn btn-default" data-toggle="modal" data-target="#datosmonitores">Editar Información</button>
                <button onclick="horario('.$users->codigo.')" class="btn btn-info" data-toggle="modal" data-target="#datosmonitores">Ver horario</button></li>
                </ul>
                </li>';
            }else{
                echo '<li><a href="#"><strong>Horas asignadas:</strong> No tiene horas asignadas</a></li>
                <li><button onclick="cargardatos('.$users->codigo.')" class="btn btn-default" data-toggle="modal" data-target="#datosmonitores">Editar Información</button>
                <button onclick="horario('.$users->codigo.')" class="btn btn-info" data-toggle="modal" data-target="#datosmonitores">Ver horario</button></li>
                </ul>
                </li>';
            }
                          
                
            }
            
            ?>

            </ul>
            <br>
            <br>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="datosmonitores" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" id="contenedormodal">