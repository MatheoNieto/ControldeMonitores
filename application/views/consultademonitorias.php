<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />

    <title>Consulta de Monitorias</title>
    <!----------------------------------------------------------------------------------------------------------------------------
                                                             CSS
    ----------------------------------------------------------------------------------------------------------------------------->
    <link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet"
        href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleconsultam.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-datetimepicker.min.css" />
</head>

<body>


    <!-------------HEADER ------------------------------->
    <div id="barra">
        <img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad"> Consulta de
        Monitorias
        <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
    </div>

    <div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>

<!-- Modal FOR ADD DATA  -->
<div class="modal fade" id="mdlregisrnoved" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registrar sesión</h4>
            </div>
            <form id="fmnovedades" action="<?php echo base_url(); ?>consultaymodificar/insertarmonitoria" method="post">
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label for="">Codigo del monitor:</label>
                                <input type="text" class="form-control" placeholder="Codigo" name="txtcodenove"
                                    id="txtcodenove" required readonly>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Hora de inicio:</label>
                                    <select name="horaini" id="horaini" class="form-control" required>
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
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Hora de finalización</label>
                                    <select name="horadini" id="horadini" class="form-control" required>
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

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label>Fecha inicio/fin:</label>
                                    <input style="cursor:pointer;" type="text" id="fechaif" name="fechaif"
                                        value="<?php   date_default_timezone_set('America/Bogota');$fecha =date("Y-m-d"); echo $fecha; ?>"
                                        readonly class="form-control" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Tipo de monitoria</label>
                                    <select name="slctpmonirianove" id="slctpmonirianove" class="form-control" required>
                                        <?php
                                        foreach($typymoni as $tipomonitoria){
                                            echo '<option value="'.$tipomonitoria->id.'">'.$tipomonitoria->nombre.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <label for="">Descripción de la monitoria</label>
                            <textarea name="txtdescripnove" id="txtdescripnove" cols="30" rows="10" class="form-control"
                                required>

                            </textarea>
                        </div>
                    </div>


                </div>
                <div class="modal-footer" style="border:none">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Registrar monitoria</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-------------------------------------------------------
                     Modal modificarregistro
    -------------------------------------------------------->
<div class="modal fade" id="myModalmodificar" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modificar sesión</h4>
            </div>
            <form id="modifymonitoria" action="<?php echo base_url(); ?>consultaymodificar/modifimonitoria"
                method="post">
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="text" class="form-control" name="txtid" id="txtid" required readonly
                                    style="display:none">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Hora de inicio:</label>
                                    <select name="horainiciomod" id="horainiciomod" class="form-control" required>
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
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Hora de finalización</label>
                                    <select name="horafinmodi" id="horafinmodi" class="form-control" required>
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

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label>Fecha inicio/fin:</label>
                                    <input style="cursor:pointer;" type="text" id="fechaifmodi" name="fechaifmodi"
                                        readonly class="form-control" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Tipo de monitoria</label>
                                    <select name="slctpmoniriamodif" id="slctpmoniriamodif" class="form-control"
                                        required>
                                        <?php
                                        foreach($typymoni as $tipomonitoria){
                                            echo '<option value="'.$tipomonitoria->id.'">'.$tipomonitoria->nombre.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <label for="">Descripción de la monitoria</label>
                            <textarea name="txtdescripmodif" id="txtdescripmodif" cols="30" rows="10"
                                class="form-control" required>

                            </textarea>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                </div>
                <div class="modal-footer" style="border:none">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Registrar monitoria</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-------------HEADER ------------------------------->
    <!-------------SIDENAV------------------------------->
    <div id="mySidenav" class="sidenav openn">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <form id="fomrconsultahm" method="POST" action="<?php echo base_url(); ?>consultaymodificar/consultaxmonitor"
            class="form-horizontal">
            <br>
            <br>
            <br>
            <div class="form-group" style="margin:5px;">
                <div class="col-sm-12">
                    <label for="">Selecione el Nombre del monitor</label>
                    <select id="nombrem" class="selectpicker" data-live-search="true" title="Soto Perez Pepito"
                        name="nombrem" required>
                        <?php
                            foreach($monitores as $monitor){
                                echo '<option value="'.$monitor->codigo.'">'.$monitor->apellidos.' '.$monitor->nombres.'</option>';}
                            ?>
                    </select>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="form-group" style="margin:5px;">
                <div class="col-sm-12">
                    <label for="">Seleciona el rango de fecha</label>
                    <input id="config-demo" class="form-control" required type="text" name="config-demo" readonly
                        style="cursor:pointer;">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="form-group" style="margin:5px;">
                <div class="col-sm-12">
                    <label for="">Selecione el Tipo de monitoria</label>
                    <select id="tipom" name="tipom" class="selectpicker" title="Acción Social,Biblioteca">
                        <?php
                        foreach($typymoni as $tipodemoni){
                            echo '<option value="'.$tipodemoni->id.'">'.$tipodemoni->nombre.'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group" style="margin:5px;">
                <div class="col-md-12">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info form-control">Consultar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-------------SIDENAV------------------------------->
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div id="spanopen" class="" onclick="openNav()">&#9776; Generar la Consulta
        </div>
    </div>

    <div id="bottomside" class="sidenav">
        <a href="<?php echo base_url(); ?>menuprincipal" id="about" title="Volver al menú principal">Home</a>
        <a href="<?php echo base_url(); ?>mmonitores" id="cmoni" title="Consultar monitores">C.monitores</a>
        <a href="<?php echo base_url(); ?>mhorarios" id="blog" title="Horarios">Horarios</a>
        <a href="<?php echo base_url(); ?>mreporte" id="projects" title="¿Necesitas reportes? da click!">Reportes</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="contentdelainfoc" class="col-md-12 col-sm-12 col-xs-12">
                <center>
                    <h3>Información del monitor</h3>
                </center>
                <div class="col-md-12" id="informonitore">
                    <div class="col-md-12 col-xs-12 col-sm-12">