<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!----------------icono_pestaña------------------>
         <link rel="shortcut icon" type="image/x-icon" href= "<?php echo base_url(); ?>css/images/icon.ico" />
        <title>Consultando horas</title>
            <!-----------------------------------css----------------------->
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" 
        href = "<?php echo base_url(); ?>css/stylemonitor/styleconsulta.css">
        <link rel = "stylesheet" type = "text/css" 
        href = "<?php echo base_url(); ?>css/bootstrap.min.css"> 
           <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/daterangepicker.css" /> 
         <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css"> 
        <link rel = "stylesheet" type = "text/css" 
        href = "<?php echo base_url(); ?>css/styleAlert.css">   
        <!-----------------------------------css----------------------->           
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script> 
           <script src="<?php echo base_url(); ?>scripts/scriptmonitor/scriptconsulta.js" ></script>
           <script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script> 
            <script type="text/javascript" src="<?php echo base_url();?>/scripts/daterangepicker.js"></script>
     
        
    </head>
    
    
    <body onload="nobackbutton();">
         <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
Consultando mis horas de monitoria
 <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
 </div>
        
<div>
    <ul id="navigation">
        <li class="home"><a href="<?php echo base_url(); ?>menumonitores"  title="Ir a menu principal"><span>Menu.<i><img src="<?php echo base_url(); ?>css/images/home.png" alt=""></i></span></a></li>
    </ul>
</div>
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
            <form id="fomrconsulta" method="POST" action="<?php echo base_url(); ?>pmonitorconsulta/consulta">
               <br><br>
                <div class="form-group">
                    <div class="col-md-12">             
                    <label for="">Seleciona el rango de fecha</label>
                    <input id="config-demo2" class="form-control" required type="text" name="config-demo2" readonly style="cursor:pointer;">
                    </div>                 
                </div>
                <br><br><br><br>
                <div class="form-group">  
                       <div class="col-md-12">
                       <label for="">Selecciona el tipo de monitoria</label>
                        <select class="form-control" id="sel1" name="tipom" required>
                        <option value="1">Acción Social</option>
                        <option value="2">Biblioteca</option>
                        </select>
               </div></div>
               <br><br><br><br><br><br>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary form-control">Hacer consulta</button>
                    </div>
                </div>           
               
            </form>
        </div>

        <br><br><br><br>
<div id="main" class="col-md-12">
<div id="consultar" class="col-md-3">
<button onclick="openNav()" class="btn btn-success form-control">Consultar</button>

        </div>
        <br><br>
    <div class="col-md-12" id="contetabla">