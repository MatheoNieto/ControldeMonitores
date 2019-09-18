<?php

    foreach($csntual as $datatablet){
        $sugerr = $datatablet->surge;
        if($sugerr != 'R'){
            $fecha1 = new DateTime("$datatablet->fechainicio");
            $fecha2 = new DateTime("$datatablet->fechafin");
            $fecha = $fecha1->diff($fecha2);
            $numero = $fecha->h.".".$fecha->i;
            $precio = $datatablet->precio;
            $precioxh= $numero*$precio;
            echo '<tr>
            <td class="id ">'.$datatablet->id.'</td>
            <td class="fechainicio">'.$datatablet->fechainicio.'</td>
            <td>'.$datatablet->apelidosini.' '.$datatablet->nombreini.'</td>
            <td class="fechafin">'.$datatablet->fechafin.'</td>
            <td>'.$datatablet->apellidosfin.' '.$datatablet->nombrefin.'</td>
            <td class="decripcion">'.$datatablet->descripcion.'</td>
            <td>'.$fecha->h.'.'.$fecha->i.'</td>
            <td>$'.$precioxh.'</td>
            <td>
            <button class="btn btn-default btn-sm boton" data-toggle="tooltip" data-placement="top" title="Modificar registro" onclick="registmodi('.$datatablet->id.')"><img src="'.base_url().'css/images/acturegistro.png" alt="">
            </button>
            <button onclick="eliminar('.$datatablet->id.');" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar Registro"><img src="'.base_url().'css/images/borrar.png" alt="" ></button>
            </td>
            </tr>';
        }
    }

?>

</tbody>
<tfoot>
    <tr>
        <th colspan="6" style="text-align:right">Total:</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
</tfoot>
</table>


</div>
</div>
<!-------
MODAL FOR SUEGETIONS
----->

<!-- Modal -->
<div class="modal fade" id="mdlsugebity" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sugerencias desde la bitacora del monitor</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion"></div>

                </div>
            </div>
            <div class="modal-footer" style="border:none">
                <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "destroy": true,
            "order": [
                [1, "desc"]
            ],
            "responsive": true,
            'iDisplayLength': 20,
            "bLengthChange": false,
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "Lo siento no se encontrarón datos",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay datos",
                "infoFiltered": "(Filtrado de _MAX_ productos registrados)",
                "search": "Buscar:",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": activado el orden de columna ascendiente",
                    "sortDescending": ": activado el orden de columna descendiente"
                }
            },
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api(),
                    data;

                // Remove the formatting to get integer data for summation
                var intVal = function (i) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '') * 1 :
                        typeof i === 'number' ?
                        i : 0;
                };

                // Total over all pages
                total = api
                    .column(6)
                    .data()
                    .reduce(function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal = api
                    .column(6, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Update footer
                $(api.column(6).footer()).html(
                    pageTotal + ' H.M (' + total + ' total H.M)'
                );

                // Total over all pages
                total2 = api
                    .column(7)
                    .data()
                    .reduce(function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal2 = api
                    .column(7, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Update footer
                $(api.column(7).footer()).html(
                    '$' + pageTotal2 + ' ( $' + total2 + ' total)'
                );
            }
        });
    });
</script>

<script>
var monitoria =[
<?php
     foreach($csntual as $datatablet){
        echo '{
            "id":"'.$datatablet->id.'",
            "fechaini":"'.$datatablet->fechainicio.'",
            "fechafin":"'.$datatablet->fechafin.'",
            "descripcion":"'.$datatablet->descripcion.'",
            "tipomonitoria":"'.$datatablet->tipominit.'",
            "suger":"'.$datatablet->surge.'"
        },';
     }

    ?>


];
var bitacoraa = [
    <?php
        foreach($dbitacora as $databita) {
            $sabr = $databita->fechafin;
            if ($sabr != "") {
                echo '{
                "id": "'.$databita->id.'",
                "fechaini": "'.$databita->fechainicio.'",
                "fechafin": "'.$databita->fechafin.'",
                "descripcion": "'.$databita->descriocion.'",
                "codetymonit": "'.$databita->tipomonitoria.'",
                "tipomonitoria": "'.$databita->nombre.'",
                "idid": "'.$databita->idmonitoria.'"
            }, ';
        }
        } ?>];
    $.each(monitoria, function (i) {
        var dhtml;
        var sugerencia = monitoria[i].suger;

        switch(sugerencia) {
        case "E":
            dhtml = '<div class="panel panel-danger" data-surge="E" eleminar> <div class="panel-heading"> <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse'+i+'">Elminar registro (Click para más información)</a> </h4> </div><div id="collapse'+i+'" class="panel-collapse collapse"> <div class="panel-body"><div class="col-md-6"><p><b>Id:</b> '+monitoria[i].id+'</p> <p><b>Fecha de Inicio:</b> '+monitoria[i].fechaini+'</p></div><div class="col-md-6"><p><b>Tipo monitoria:</b> '+monitoria[i].tipomonitoria+'</p><p><b>Fecha de finalización:</b> '+monitoria[i].fechafin+'</p></div></div><div class="panel-footer"><button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Rechazar la sugerencia" onclick="noapply('+monitoria[i].id+');">Rechazar</button><button class="btn pull-right btn-success" data-toggle="tooltip" data-placement="top" title="Aceptar la sugerencia" onclick="siaplly('+monitoria[i].id+',1)">Aceptar</button></div></div></div>';
            break;
        case "R":
            dhtml = ' <div class="panel panel-success" data-surge="R" registrar> <div class="panel-heading"> <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse'+i+'">Registrar registro (Click para más información)</a> </h4> </div><div id="collapse'+i+'" class="panel-collapse collapse"> <div class="panel-body"><div class="col-md-6"><p><b>Id:</b> '+monitoria[i].id+'</p> <p><b>Fecha de Inicio:</b> '+monitoria[i].fechaini+'</p></div><div class="col-md-6"><p><b>Tipo monitoria:</b> '+monitoria[i].tipomonitoria+'</p><p><b>Fecha de finalización:</b> '+monitoria[i].fechafin+'</p></div></div><div class="panel-footer"><button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Rechazar la sugerencia" onclick="noapply('+monitoria[i].id+');">Rechazar</button><button class="btn pull-right btn-success" data-toggle="tooltip" data-placement="top" title="Aceptar la sugerencia" onclick="siaplly('+monitoria[i].id+',2)">Aceptar</button></div></div></div></div>';
            break;
        case "M":
                var  idmonitoria = monitoria[i].id;
                $.each(bitacoraa, function (k) {
                    var ididi = bitacoraa[k].idid;
                    if(idmonitoria == ididi){
                        dhtml = ' <div class="panel panel-primary" data-surge="M" modificar> <div class="panel-heading"> <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse'+i+'">Modificar registro (Click para más información)</a> </h4> </div><div id="collapse'+i+'" class="panel-collapse collapse"> <div class="panel-body"><div class="col-md-12"><h3 class="text-center">Datos nuevos sugeridos</h3>  <div class="col-md-6"><p><b>Id:</b> '+bitacoraa[k].idid+'</p> <p><b>Fecha de Inicio:</b> '+bitacoraa[k].fechaini+'</p></div><div class="col-md-6"><p><b>Tipo monitoria:</b> '+bitacoraa[k].tipomonitoria+'</p><p><b>Fecha de finalización:</b> '+bitacoraa[k].fechafin+'</p></div></div> <hr class="hrmdi"><div class="col-md-12"><h3 class="text-center">Datos registrados</h3> <div class="col-md-6"><p><b>Id:</b> '+monitoria[i].id+'</p> <p><b>Fecha de Inicio:</b> '+monitoria[i].fechaini+'</p></div><div class="col-md-6"><p><b>Tipo monitoria:</b> '+monitoria[i].tipomonitoria+'</p><p><b>Fecha de finalización:</b> '+monitoria[i].fechafin+'</p></div></div></div><div class="panel-footer"><button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Rechazar la sugerencia" onclick="noapply('+monitoria[i].id+');">Rechazar</button><button class="btn pull-right btn-success" data-toggle="tooltip" data-placement="top" title="Aceptar la sugerencia" onclick="siapllymodif('+monitoria[i].id+',3)">Aceptar</button></div></div></div></div>';
                    }
                });
            break;
        }
        $("#accordion").append(dhtml);
        dhtml = null;
       });
function fnsuegre(){
    $("#mdlsugebity").modal("show");
}
</script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
