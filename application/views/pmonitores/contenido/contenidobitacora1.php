<?php
                foreach ($dtbitacora as $databita) {
                    $sabr = $databita->fechafin;
                    if($sabr != ""){
                        $fecha1 = new DateTime("$databita->fechainicio");
                        $fecha2 = new DateTime("$databita->fechafin");
                        $fecha = $fecha1->diff($fecha2);
                        $numero = $fecha->h.".".$fecha->i;
                        echo '<tr>
                        <td>'.$databita->fechainicio.'</td>
                        <td>'.$databita->fechafin.'</td>
                        <td>'.$numero.'</td>
                        <td>'.$databita->descriocion.'</td>
                        <td>'.$databita->nombre.'</td>
                        <td><button type="button" class="btn btn-default" btn-lg btn-block" onclick="modificar('.$databita->id.')"  data-toggle="tooltip" data-placement="top" title="Modificar"><img src="'.base_url().'css/images/actulbitaco.png" alt=""></button>
                        <button type="button" class="btn btn-default" btn-lg btn-block" onclick="elimanr('.$databita->id.','.$databita->idmonitoria.')" data-toggle="tooltip" data-placement="top" title="Borrar"><img src="'.base_url().'css/images/basura.png" alt=""></button></td>
                    </tr>';
                 }else{?>
<script>
    swal("Información",
        "Tienes una monitoria sin finalizar. por favor no registrarla en la bitacora hasta finalizarla",
        "info");
</script>
<?php
                 }
                }
                ?>

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "destroy": true,
            "order": [
                [0, "desc"]
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
                    .column(2)
                    .data()
                    .reduce(function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal = api
                    .column(2, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Update footer
                $(api.column(2).footer()).html(
                    pageTotal + ' - (' + total + ' total Horas)'
                );
            }
        });
    });
</script>
<script>
        var hrasbitacora = [ <?php
        foreach($dtbitacora as $databita) {
            $sabr = $databita->fechafin;
            if ($sabr != "") {
                echo '{
                "id": "'.$databita->id.'",
                "fechaini": "'.$databita->fechainicio.'",
                "fechafin": "'.$databita->fechafin.'",
                "descripcion": "'.$databita->descriocion.'",
                "tipomonitoria": "'.$databita->nombre.'",
                "idid": "'.$databita->idmonitoria.'"
            }, ';
        }
        } ?> ];

        function modificar(id) {
            $.each(hrasbitacora, function (i) {
                if (hrasbitacora[i].id == id) {
                    console.log("si estoy");
                    var elid = hrasbitacora[i].id;
                    var tim = hrasbitacora[i].tipomonitoria;
                    var descripcxon = hrasbitacora[i].descripcion;
                    var blabal = hrasbitacora[i].idid;

                    var fechainiciar = hrasbitacora[i].fechaini;
                    var fechafinalizar = hrasbitacora[i].fechafin;
                    var resini = fechainiciar.split(" ");
                    var horainiser = resini[1];
                    var gecha = resini[0];
                    var res2ini = horainiser.split(":");
                    var hourinit = res2ini[0] + ":" + res2ini[1];

                    var resfini = fechafinalizar.split(" ");
                    var horafiner = resfini[1];
                    var res2finer = horafiner.split(":");
                    var horafinil = res2finer[0] + ":" + res2finer[1];

                    $("#horainiciomod option").each(function () {
                        var str = $(this).text();
                        if (str == hourinit) {
                            $(this).attr("selected", "selected");
                        }
                    });
                    $("#horafinmodi option").each(function () {
                        var str = $(this).text();
                        if (str == horafinil) {
                            $(this).attr("selected", "selected");
                        }
                    });
                    $("#slctpmoniriamodif option").each(function () {
                        var str = $(this).text();
                        if (str == tim) {
                            $(this).attr("selected", "selected");
                        }
                    });
                    $("#txtidid").val(blabal);
                    $("#txtid").val(elid);
                    $("#txtdescripmodif").val(descripcxon);
                    $("#fechaifmodi").val(gecha);
                    $("#mdlmodificar").modal("show");
                }
            });
        }
    </script>