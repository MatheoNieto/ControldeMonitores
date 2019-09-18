<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!----------------icono_pestaña------------------>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
    <title>Bienvenido &raquo; Monitor</title>
    <!-----------------------------------css----------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylemonitor/stylebitacora.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-datetimepicker.min.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>scripts/scriptmonitor/scriptbitacora.js"></script>
    <script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="<?php echo base_url(); ?>scripts/bootstrap-datepicker.js "></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/scripts/daterangepicker.js"></script>
</head>


<body>
    <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
        Bitacora
        <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
    </div>
    <div id="bottomside" class="sidenav">
        <a href="<?php echo base_url(); ?>menuprincipal" id="about" title="Volver al menú principal">Home</a>
    </div>
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <form id="filtarbitac" action="<?php echo base_url(); ?>pmonitorbitacora/consultbuta"
                    method="post">
                        <div class="col-md-4">
                            <label for="">Rango de fecha</label>
                            <input id="config-demo" class="form-control" required type="text" name="config-demo" readonly
                            style="cursor:pointer;">
                        </div>
                        <div class="col-md-4">
                            <label for="">Tipo monitoria</label>
                            <select name="slecttipmconsu" id="slecttipmconsu" class="form-control" required>
                                <?php
                                    foreach($typymoni as $tipomonitoria){
                                        echo '<option value="'.$tipomonitoria->id.'">'.$tipomonitoria->nombre.'</option>';
                                    }
                                    ?>
                                    <option>Todas las anteriores*</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Consultar</button>
                        </div>

                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <div id="khsdfjk" class="col-md-12">
        <hr>
        <div class="col-md-12">
        
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="col-md-2">
                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#mdlregisrnoved">Hacer un registro</button>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
            <div class="col-md-1"></div>
            <div id="contentable" class="col-md-10">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha inicio</th>
                            <th>Fecha fin</th>
                            <th>Cant Horas (H:M)</th>
                            <th>Descripción</th>
                            <th>tipomonitoria</th>
                            <th>acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tbodu">
