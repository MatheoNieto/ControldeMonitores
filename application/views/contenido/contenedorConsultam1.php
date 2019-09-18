<div class="col-md-1"></div>
<div class="col-md-6 col-sm-6 col-xs-6">
    <p><strong>Codigo:</strong>
        <?php foreach($datosxm as $datauser){echo $datauser->codigo;} ?>
    </p>
    <p><strong>Apellidos y Nombres:</strong>
        <?php foreach($datosxm as $datauser){echo $datauser->apellidos.' '.$datauser->nombres; } ?>
    </p>

    <p><strong>Telefono:</strong>
        <?php foreach($datosxm as $datauser){echo $datauser->tel; } ?>
    </p>
    <p><strong>Correo:</strong>
        <?php foreach($datosxm as $datauser){echo $datauser->correo;} ?>
    </p>
    <p id="tipoml"></p>
    <p id="rangofecham"></p>
    <button type="button" class="btn btn-info btn-md" data-toggle="tooltip" data-placement="top" title="Registrar monitoria" onclick="mhacrregis(<?php foreach($datosxm as $datauser){echo $datauser->codigo;} ?>)">Hacer
        Registro</button>
    <?php foreach($cantsugere as $canti){
                $cantidfd = $canti->numbre;
                if($cantidfd >0){
                    echo ' <button type="button" class="btn btn-danger" onclick="fnsuegre();" data-toggle="tooltip" data-placement="top" title="Sugerencia para modificaciones">Sugerencias <span class="badge">'.$cantidfd.'</span></button>';
                }
            }
    ?>
</div>
<div class="col-md-1 col-sm-1 col-xs-2" style="padding:0">
    <img src="<?php echo base_url(); ?>css/perfil/<?php foreach($datosxm as $datauser){echo $datauser->imgperfil;} ?>"
        width="100%">
</div>
