
<div id="contentable" class="col-md-12">  

    <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
    <tr>
    <th>Fecha de  inicio</th>
    <th>Fecha de finalizacion</th>
    <th>Descripcion</th>
    <th>Lugar de trabajo</th>
    <th>Horas trabajadas</th>
    <th>Ganó</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sumar = 0;
        $sumar2 = 0;
    foreach($datosxm as $datatablet){
        
$fecha1 = new DateTime("$datatablet->fechainicio");
$fecha2 = new DateTime("$datatablet->fechafin");
$fecha = $fecha1->diff($fecha2);
$precio= $datatablet->precio;
$numero = $fecha->h.".".$fecha->i;
$costoh = $precio*$numero;
$sumar = $sumar+$numero;
$sumar2 = $sumar2+$costoh;
    echo '<tr>
     <td class="fechainicio">'.$datatablet->fechainicio.'</td>
    <td class="fechafin" >'.$datatablet->fechafin.'</td>
    <td class="decripcion">'.$datatablet->descripcion.'</td>
    <td class="lugart">'.$datatablet->lugart.'</td>
    <td>'.$fecha->h.':'.$fecha->i.'</td>
    <td>$'.$costoh.'</td>
    </tr>';  
    }
    echo '<tfoot>
    <tr>
    <th>Fecha de  inicio</th>
    <th>Fecha de finalizacion</th>
    <th>Descripcion</th>
    <th>Lugar de trabajo</th>
    <th>Total horas trabajadas: '.$sumar.'</th>
    <th>Total: $'.$sumar2.'</th>
    </tr>
    </tfoot>';
        ?>   
    </tbody>
    </table>    

 
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-datetimepicker.min.css"/>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css"/>

<script src="<?php echo base_url(); ?>scripts/jquery.dataTables.min.js" ></script>

<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" ></script>
 
<script src="<?php echo base_url(); ?>scripts/jquery.validate.js" ></script>
 
  <script src="<?php echo base_url(); ?>scripts/sweetalert2.js " ></script>

 <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
 


<script>
$(document).ready(function() {
$('#example').dataTable({
"bPaginate": true,
"bLengthChange": false,
"bFilter": false,
"bInfo": false,
"bAutoWidth": true,
"order": [[ 1, "desc" ]]
});
} );</script>

