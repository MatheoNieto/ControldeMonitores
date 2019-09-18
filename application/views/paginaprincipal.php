<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
    <title>Menú principal</title>
    <!-----------------------------------css----------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylep.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <!-----------------------------------css----------------------->



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
                <a href="" class="animate" data-toggle="modal" data-target="#confi">
                    <span class="desc animate">Configuración de la aplicacion</span>
                    <span class="glyphicon glyphicon-cog"></span>
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
    <div class="modal fade" id="confi" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Configuraciones</h4>
                </div>
                <form id="cambiaprecios" action="<?php echo base_url(); ?>menuprincipal/cambiaprecio"
                            method="post" >
                    <div class="modal-body">
                    <?php
                        foreach($typymoni as $data){
                            echo '<div class="col-md-12">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                            <input type="text" style="display:none" value="'.$data->id.'" id="id'.$data->id.'" name="id'.$data->id.'">
                                <label for="">'.$data->nombre.'</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="number" class="form-control" name="precio'.$data->id.'" id="precio'.$data->id.'" 
                                        placeholder="4000" value="'.$data->precio.'">
                                </div>
                            </div>
                        </div> ';

                        }
                    ?>
                        

                       
                        
                    </div>
                    
                    <div class="modal-footer" style="border:none">
                    <p>&nbsp;</p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrrar</button>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

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
        <div class="item" id="itemmonitores" style="cursor:pointer;">
            <a class="item__link" data-toggle="tooltip" data-placement="top" title="Gestión de monitores">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/personas2.png" alt="Videos Showreel"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/personas2.png" alt="Videos Showreel"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>

            </a>
        </div>
        <div class="item" id="itmmonittori">
            <a class="item__link" href="#" data-toggle="tooltip" data-placement="top" title="Gestión de monitorias">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/personass.png" alt="Iniciar sesion"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/personass.png"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="item">
            <a class="item__link" href="<?php echo base_url(); ?>mhorarios" data-toggle="tooltip" data-placement="top"
                title="horario diario">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/calendario.png" alt="Sleep Benefits"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/calendario.png" alt="Sleep Benefits"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>

            </a>
        </div>

        <div class="item">
            <a class="item__link" href="<?php echo base_url(); ?>mreporte" data-toggle="tooltip" data-placement="top"
                title="Reportes">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/linea.png" alt="Videos Showreel"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/linea.png" alt="Videos Showreel"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>

            </a>
        </div>

    </div>

    <div id="container2" class="container">
        <div class="item">
            <a class="item__link" href="<?php echo site_url('mregistramonitor'); ?>" data-toggle="tooltip"
                data-placement="top" title="Registrar un nuevo monitor">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/personas.png" alt="Iniciar sesion"
                            class="item__thumb js-thumb">
                    </div>
                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/personas.png"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="item" style="cursor:pointer;">
            <a class="item__link" href="<?php echo site_url('mmonitores'); ?>" data-toggle="tooltip"
                data-placement="top" title="Consultar monitores">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/multitud.png" alt="Videos Showreel"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/multitud.png" alt="Videos Showreel"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="item" style="cursor:pointer;">
            <a class="item__link" href="<?php echo site_url('mlbaorando'); ?>" data-toggle="tooltip"
                data-placement="top" title="Monitores laborando actualmente">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/programador.png" alt="Videos Showreel"
                            class="item__thumb js-thumb">
                    </div>

                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/programador.png" alt="Videos Showreel"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="item" id="backmp" style="cursor:pointer;">
            <a class="item__link" data-toggle="tooltip" data-placement="top" title="Regresar">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/flechas.png" alt="Iniciar sesion"
                            class="item__thumb js-thumb">
                    </div>
                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/flechas.png"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div id="container3" class="container">

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

        <div class="item" id="backmp2" style="cursor:pointer;">
            <a class="item__link" data-toggle="tooltip" data-placement="top" title="Regresar">
                <div class="item__thumbs">
                    <div class="item__thumb-container">
                        <img src="<?php echo base_url(); ?>css/images/flechas.png" alt="Iniciar sesion"
                            class="item__thumb js-thumb">
                    </div>
                    <div class="item__reflection-wrapper">
                        <div class="item__reflection-container">
                            <img src="<?php echo base_url(); ?>css/images/flechas.png"
                                class="item__thumb item__reflection js-reflection">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>




    <!---------------------------------------------------------------------------------------------------
                                               SECCION DE MODALES
-------------------------------------------------------------------------------------------------------->

    <div class="modal fade" id="mdlinsession" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Inicio de sesión</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form id="forminisesion" action="<?php echo base_url(); ?>menuprincipal/registrarmonitoria"
                            method="post">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-2 col-sm-2 col-xs-2"></div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label for="">Codigo del monitor</label>
                                    <input list="txtcodigo" name="codigomini" id="codigomini" type="text"
                                        placeholder="Codigo" class="form-control" required autocomplete="off">
                                    <datalist id="txtcodigo">
                                        <?php
                                    foreach($monitores as $codigosm){
                                        echo '<option value="'.$codigosm->codigo.'">'.$codigosm->nombres.' '.$codigosm->apellidos.'</option>';                    }
                                    ?>
                                    </datalist>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label for="">Tipo de monitoria</label>
                                    <select name="slctpmoniria" id="slctpmoniria" class="form-control">
                                        <?php
                                        foreach($typymoni as $tipomonitoria){
                                            echo '<option value="'.$tipomonitoria->id.'">'.$tipomonitoria->nombre.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px">
                                <div class="col-md-3 col-sm-3 col-xs-3"></div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <button class="btn btn-success form-control" type="submit">Iniciar sesión</button>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3"></div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer" style="border:none">
                    <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mdlfinsession" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Finalizar la sesión</h4>
                </div>
                <form id="formfinsesion" action="<?php echo base_url(); ?>menuprincipal/finsession" method="post">
                    <div class="modal-body">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-2 col-sm-2 col-xs-2"></div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="">Codigo del monitor</label>
                                    <input list="txtcodigofin" name="codigomfini" id="codigomfini" type="text"
                                        placeholder="Codigo" class="form-control" required autocomplete="off">
                                    <datalist id="txtcodigofin">