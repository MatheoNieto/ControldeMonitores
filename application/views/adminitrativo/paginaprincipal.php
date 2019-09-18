<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
    <title>Menú principal</title>
    <!-----------------------------------css----------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleadminitrativo/stylep.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">

    <!-----------------------------------css----------------------->

    <script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>scripts/administrativo/script.js"></script>
    <script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>
    <script>
        $(window).load(function () {
            $('#loading').hide();

        });
    </script>

</head>

<body>
    <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
        Menú principal
        <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
    </div>

    <nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
        <div class="navbar-toggler animate">
            <span class="menu-icon"></span>
        </div>
        <ul class="navbar-menu animate">
            <li>
                <a href="" class="animate">
                    <span
                        class="desc animate"><?php foreach ($usuarios as $user){ echo ''.$user->nombres.' '.$user->apellidos.'';  } ?>
                    </span>
                    <span class="glyphicon glyphicon-user"></span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>login/cerrarsession" class="animate">
                    <span class="desc animate">Cerrar Sesion </span>
                    <span class="glyphicon glyphicon-log-out"></span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Modal -->
    <!-- Modal -->


    <!-- Modal -->
    <div class="modal fade" id="cambiarcontra" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?php echo base_url(); ?>menuprincipal/cambiarcontrasena" id="formcambiarcontra"
                        onsubmit="return contrasena()" method="post">
                        <div class="form-group">
                            <label for="">Cambiar Contraseña</label>
                            <input type="password" placeholder="Ingrese la nueva contraseña para cambiarla"
                                class="form-control" id="txtcontraactu" name="txtcontraactu" required>

                        </div>
                        <button type="submit" class="btn btn-info">cambiar contraseña</button>
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="container" class="container">






        <div class="item" style="cursor:pointer;">
            <a id="mdlisesion" class="item__link" href="#" data-toggle="tooltip" data-placement="top"
                title="Inicio de sesión">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/coordinacion.png" alt="Videos Showreel"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/coordinacion.png" alt="Videos Showreel"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="item" style="cursor:pointer;">
            <a id="btnfinsesion" class="item__link" href="#" data-toggle="tooltip" data-placement="top"
                title="Fin de sesión">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/equipo.png" alt="Videos Showreel"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/equipo.png" alt="Videos Showreel"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="item" style="cursor:pointer;">
            <a class="item__link" id="btnregisnovedades" href="#" data-toggle="tooltip" data-placement="top"
                title="Registro de novedades">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/personas.png" alt="Videos Showreel"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/personas.png" alt="Videos Showreel"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="item">
            <a class="item__link" href="<?php echo base_url(); ?>Consultaymodificar" data-toggle="tooltip"
                data-placement="top" title="Consultar y  modificar registros de monitorias">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/actualizar.png" alt="Rainforest Guardian"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/actualizar.png"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>

            </a>
        </div>

        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip({
                    placement: 'top',
                    trigger: 'manual'
                }).tooltip('show');
                // $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>
    </div>
    <div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI
    </div>
    <div id="loading">
        <p style="text-align: left; margin:5px; font-size:1.7em;">Bienvenido! Por favor espere......</p>
        <br><br><br><br><br><br>
        <center><img id="cargando" src="<?php echo base_url(); ?>css/images/loading.gif" alt="" width="30%"
                height="30%"></center>

    </div>
    
</body>


</html>