</div>

</div>

</div>
<div class="modal-footer" style="border:none;margin-top:20px">
    <br>
    <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
    <button type="submit" id="fnsessison" class="btn btn-success">Finalizar Monitoria</button>
</div>
</form>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="mdlregisrnoved" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registro de novedades</h4>
            </div>
            <form id="fmnovedades" action="<?php echo base_url(); ?>menuprincipal/registronovd" method="post">
                <div class="modal-body">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label for="">Codigo del monitor:</label>
                                <input list="txtcodigonove" type="text" class="form-control" placeholder="Codigo" name="txtcodenove" id="txtcodenove" required>
                                <datalist id="txtcodigonove">
                                    <?php
                                    foreach($monitores as $codigosm){
                                        echo '<option value="'.$codigosm->codigo.'">'.$codigosm->nombres.' '.$codigosm->apellidos.'</option>';                    }
                                    ?>
                                </datalist>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Hora de inicio:</label>
                                    <select name="fechininove" id="fechininove" class="form-control" required>
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
                                    <select name="fechfinnove" id="fechfinnove" class="form-control" required>
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
                                    <label for="datepicker">Fecha inicio/fin:</label>
                                    <input style="cursor:pointer;" type="text" id="datepicker" name="fechaif" value="<?php   date_default_timezone_set('America/Bogota');$fecha =date("Y-m-d"); echo $fecha; ?>" readonly class="form-control" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="">Tipo de monitoria</label>
                                    <select name="slctpmonirianove" id="slctpmonirianove" class="form-control">
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
                            <textarea name="txtdescripnove" id="txtdescripnove" cols="30" rows="10" class="form-control" required>

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



<!---------------------------------------------------------------------------------------------------
                                            FIN SECCION DE MODALES
-------------------------------------------------------------------------------------------------------->


<div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>
<div id="loading">
    <p style="text-align: left; margin:5px; font-size:1.7em;">Bienvenido! Por favor espere......</p>
    <br><br><br><br><br><br>
    <center><img id="cargando" src="<?php echo base_url(); ?>css/images/loading.gif" alt="" width="30%" height="30%"></center>

</div>
<script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/script.js"></script>
<script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script>
    $(window).load(function() {
        $('#loading').hide();

    });

</script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip({
            placement: 'top',
            trigger: 'manual'
        }).tooltip('show');
        // $('[data-toggle="tooltip"]').tooltip();   
    });

</script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "yyyy-mm-dd"
        });
    });

</script>
<script>
    function actuliazlist() {
        $.ajax({
            url: "<?php echo site_url('menuprincipal/actulizarlistafin')?>",
            type: "POST",
            success: function(data) {
                if (data != "") {
                    $("#txtcodigofin").html(data);
                    $("#mdlfinsession").modal("show");
                } else {
                    swal("Opps!", "No hay Monitores Iniciados", "info")
                }
            },
            error: function(data) {
                alert(data);
            }
        });
    }

    $(document).ready(function() {

        $("#btnfinsesion").click(function() {
            actuliazlist();

        });
        $("#fnsessison").click(function() {
            actuliazlist();

        });
    });

</script>

<script>
    $(document).ready(function() {
        $("#cntarfinsess").click(function() {
            var codigo = $("#codigomfini").val();
            var parametros = {
                "id": codigo
            };
            $.ajax({
                url: "<?php echo site_url('menuprincipal/consulinic')?>",
                type: "POST",
                data: parametros,
                success: function(data) {
                    $("#infodelini").html(data);
                    $("#infodelini").collapse('show');
                },
                error: function(data) {
                    alert(data);
                }
            });
        });
    });

</script>

</body>

</html>
