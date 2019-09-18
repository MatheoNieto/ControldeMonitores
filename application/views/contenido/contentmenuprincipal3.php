<?php

            function round_time($time, $round_to_minutes = 30, $type = 'auto') {
                $round = array( 'auto' => 'round', 'up' => 'ceil', 'down' => 'floor' );
                $round = @$round[ $type ] ? $round[ $type ] : 'round';
                $seconds = $round_to_minutes * 60;
                if(substr_count($time,":")==2){
                    return date( 'H:i:s', $round( strtotime( $time ) / $seconds ) * $seconds );
                }else{
                    return date( 'H:i', $round( strtotime( $time ) / $seconds ) * $seconds );
                }
            } 
     date_default_timezone_set('America/Bogota');
            $fechaactual = date('Y-m-d');
            $horaactual = date('H:i'); 
            $horaredondea = round_time($horaactual,30);
            $fechalistofini = $fechaactual.' '.$horaredondea;

foreach($datosinici as $datainicidad){
    echo '<div class="col-md-12 col-sm-12 col-xs-12">
         <h3 style="display:none">Codigo de la monitoria: <span id="idmonitoria">'.$datainicidad->id.'<span></h3>
         <br>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="col-md-6 col-sm-6 col-xs-6">
                 <p><b>Fecha Inicio: </b> '.$datainicidad->fechainicio.'</p>
                 <p><b>horas total trabajadas: </b>';
                    $fecha1 = new DateTime("$datainicidad->fechainicio");
                    $fecha2 = new DateTime("$fechalistofini");
                    $fecha = $fecha1->diff($fecha2);
                    $numero = $fecha->h.":".$fecha->i;
                    echo $numero.'</p>
                    <p><b>Administrativo inició: </b>'.$datainicidad->apellidosadmin.' '.$datainicidad->nombresadmin.'</p>
                 <label for="">Tipo de monitoria</label>
                  <select name="slctpmoniriafin" id="slctpmoniriafin" class="form-control">';
                 foreach($typymoni as $tipomonitorias){
                     if($datainicidad->tipomonitoria == $tipomonitorias->id){
                         echo '<option value="'.$tipomonitorias->id.'" selected>'.$tipomonitorias->nombre.'</option>';
                     } else{
                         echo '<option value="'.$tipomonitorias->id.'">'.$tipomonitorias->nombre.'</option>'; 
                     }               
                }                
             echo '</select></div>
             <div class="col-md-6 col-sm-6 col-xs-6">
                 <p><b>Fecha fin: </b> <span id="fechafnni">';
            echo $fechalistofini.'</span></p>
            <p><b>Dependencia del monitor: </b> '.$datainicidad->dependencia.'</p>
                 <label for="">Descripción de la monitoria</label>
                 <textarea name="descricmoni" id="descricmoni" cols="30" rows="10" class="form-control" required></textarea>
             </div>
         </div>
     </div>';
}
?>
