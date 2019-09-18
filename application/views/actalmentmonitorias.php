<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
    <title>Actualmente laborando</title>
    <link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylealabrando.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css" />

</head>

<body id="body">
    <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
        Actualmente laborando
        <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
    </div>


    <div id="bottomside" class="sidenav2">
        <a href="<?php echo base_url(); ?>menuprincipal" id="about" title="Volver al menú principal">Home</a>
        <a href="<?php echo base_url(); ?>mmonitores" id="cmoni" title="Consultar monitores">C.monitores</a>
        <a href="<?php echo base_url(); ?>mhorarios" id="blog" title="Horarios monitores!">Horarios</a>
    </div>


    <div class="col-md-12" id="ckjfds">
    <?php  
        if(!$sinfinal){
            echo '<h1 style="text-align:center">No hay monitores laborando en estos momentos</h1>';
        }else{           
            
        foreach ($sinfinal as $ddatos){

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
            $efdchaa = $fechaactual.' '.$horaredondea;
            $efdchaa2 = $ddatos->fechainicio;
            $fecha1 = new DateTime("$efdchaa2");
            $fecha2 = new DateTime("$efdchaa");
            $fecha = $fecha1->diff($fecha2);
            $numero = $fecha->h.".".$fecha->i;
            
            echo '<div class="col-md-12">

            <div class="col-md-3"></div>
            <!-- Left-aligned media object -->
            <div class="col-md-6">
                <div class="media">
                    <div class="media-left">
                        <img src="'.base_url().'css/perfil/'.$ddatos->imgperfil.'" class="media-object"
                            style="width:80px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">'.$ddatos->apellidos.' '.$ddatos->nombres.'</h4>
                        <p><b>Fecha inicio:</b> '.$ddatos->fechainicio.'</p>
                        <p><b>Horas trabajadas hasta el momento:</b> '.$numero.' </p>
                    </div>
                </div>
                <hr>
            </div>
        </div>';
        }}
    ?>        
    </div>

    <div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>scripts/sweetalert2.js "></script>
    <script src="<?php echo base_url(); ?>scripts/scriptalaborando.js "></script>
</body>

</html>