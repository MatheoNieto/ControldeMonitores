

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" style="text-align:right">Total horas:</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>


    </div>
    <div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>


    <!-- SECTION OF MODALS -->
    <div class="modal fade" id="mdlregisrnoved" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registrar</h4>
            </div>
            <form id="fmnovedades" action="<?php echo base_url(); ?>pmonitorbitacora/insertarmonitoria" method="post">
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-7 col-sm-7 col-xs-7">
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
                    <p>&nbsp;</p>

                </div>
                <div class="modal-footer" style="border:none">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- Modal -->
    <div class="modal fade" id="mdlmodificar" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modificar registro</h4>
                </div>
                <form id="modifymonitoria" action="<?php echo base_url(); ?>pmonitorbitacora/modifimonitoria"
                    method="post">
                    <div class="modal-body">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-7 col-sm-7 col-xs-7">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" class="form-control" name="txtid" id="txtid" required readonly
                                        style="display:none">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" class="form-control" name="txtidid" id="txtidid" required
                                        readonly style="display:none">
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
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    
    <script>
       $(function () {
        $("#fechaif").datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "yyyy-mm-dd"
        });
        $("#fechaifmodi").datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "yyyy-mm-dd"
        });
    });
    </script>
    <script>
     function actuliazlist() {
         var rangetime = $("#config-demo").val();
         var tipom = $("#slecttipmconsu").val();
         var parametros = {
             "fecha":rangetime,
             "tipom":tipom
         }
        $.ajax({
            url: "<?php echo site_url('pmonitorbitacora/listtable')?>",
            type: "POST",
            data:parametros,
            success: function(data) {
            const tables = $('#example').DataTable();
            tables.destroy();
            $("#tbodu").empty();
            $("#tbodu").html(data);            
            }
        });
    }

    </script>
    <script>
    function elimanr(id,idid){
        var parametros = {
            "id": id,
            "idwmin":idid
        };
        $.ajax({
            url: "<?php echo base_url(); ?>pmonitorbitacora/eliminarregistro",
            type: "POST",
            data: parametros,
            beforeSend: function(){
     swal("Información","Se esta eliminando por favor espere","info");
   },
            success: function (data) {
                swal("Listo", "se elimino sin problemas", "success");
                actuliazlist();
            }
        });
    }
    
    </script>
    <script>
    $(document).ready(function(){



        $("#fmnovedades").submit(function (event) {

event.preventDefault();
$.ajax({
    url: $("#fmnovedades").attr("action"),
    type: $("#fmnovedades").attr("method"),
    data: $("#fmnovedades").serialize(),
    beforeSend: function(){
     swal("Información","Se esta registrando por favor espere","info");
   },
    success: function (data) {
        if (data) {
            swal("Opps!", "Recarge la pagina e intente nuevamente", "error");            

        } else {
            swal("Listo!", "Se registro correctamente", "success");
            actuliazlist();
            

        }
    }
});


});

$('#modifymonitoria').on('submit', function (e) {

e.preventDefault();

$.ajax({
    url: $("#modifymonitoria").attr("action"),
    type: $("#modifymonitoria").attr("method"),
    data: $("#modifymonitoria").serialize(),
    complete: function (data) {
        swal("Listo", "Se modifico correctamente", "success");
        actuliazlist();

    }
});

});


    });
    
    
    </script>
<script>
    var dt = new Date();
    var month = dt.getMonth() + 1;
    var month2 = dt.getMonth();
    var day = dt.getDate();
    var day2 = dt.getDate() - 1;
    var day3 = dt.getDate() - 7;
    var day4 = dt.getDate() - 30;
    var day5 = dt.getDate() + 1;
    var year = dt.getFullYear();

    $('#config-demo').daterangepicker({
        "showDropdowns": true,
        "showWeekNumbers": true,
        "showISOWeekNumbers": true,
        "ranges": {
            "Hoy": [
                "" + year + "-" + month + "-" + day,
                "" + year + "-" + month + "-" + day
            ],
            "ayer": [
                "" + year + "-" + month + "-" + day2,
                "" + year + "-" + month + "-" + day

            ],
            "Ultimos 7 dias": [
                "" + year + "-" + month + "-" + day3,
                "" + year + "-" + month + "-" + day

            ],
            "Este Mes": [
                "" + year + "-" + month2 + "-" + 21,
                "" + year + "-" + month + "-" + 20
            ]
        },
        "locale": {
            "format": "YYYY-MM-DD",
            "separator": " - ",
            "applyLabel": "Aceptar",
            "cancelLabel": "Cancelar",
            "fromLabel": "Desde",
            "toLabel": "Hasta",
            "customRangeLabel": "Elegir rango",
            "weekLabel": "S",
            "daysOfWeek": [
                "Do",
                "Lu",
                "Ma",
                "Mie",
                "Jue",
                "Vie",
                "Sa"
            ],
            "monthNames": [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            "firstDay": 1
        },
        "alwaysShowCalendars": true,
        "startDate": "" + year + "-" + month + "-" + day,
        "endDate": "" + year + "-" + month + "-" + day,
        "opens": "right"
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });

</script>
</body>

</html>