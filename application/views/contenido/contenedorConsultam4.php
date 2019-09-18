<!-- fin del div de columna 10 infop -->
<!-- fin del 12 que contiene del 10  -->
</div>
<!-- content del div12 -->
</div>
<!-- div fin despues del row -->
</div>

</div>
<!-- fin del roww -->
</div>




<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/sweetalert2.js "></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js">
</script>
<script src="<?php echo base_url(); ?>scripts/script2.js"></script>
<script src="<?php echo base_url(); ?>scripts/bootstrap-select.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/scripts/daterangepicker.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js">
</script>
<script src="<?php echo base_url(); ?>scripts/bootstrap-datepicker.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
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
    }, function (start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
            'YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
</script>
<script>
    function eliminar(id) {

        var parametros = {
            "id": id
        };
        $.ajax({
            url: "<?php echo base_url(); ?>consultaymodificar/eliminarregistro",
            type: "POST",
            data: parametros,
            success: function (data) {
                swal("Listo", "se elimino sin problemas", "success");
                cargardator();
            }
        });
    }

    function cargardator() {
        $.ajax({
            url: "<?php echo site_url('consultaymodificar/consultaxmonitor')?>",
            type: "POST",
            data: $("#fomrconsultahm").serialize(),
            success: function (data) {

                var table = $('#example').DataTable();
                table.destroy();

                $("#informonitore").empty();
                $("#informonitore").html(data);

                var renge = $("#config-demo").val();
                $("#rangofecham").html("<b>Rango fecha de la consulta: </b>" + renge);

                var opcion_seleccionada = $("#tipom option:selected").text();
                $("#tipoml").html("<b>Tipo monitoria: </b>" + opcion_seleccionada);

                document.getElementById("mySidenav").style.width = "0";


            }
        });
    }


    function noapply(id) {

        var parametros = {
            "id": id
        };
        $.ajax({
            url: "<?php echo base_url(); ?>consultaymodificar/noaplicar",
            type: "POST",
            data: parametros,
            success: function (data) {
                cargardator();
            }
        });
    }

    function siaplly(id, accion) {

        var parametros = {
            "id": id,
            "accion": accion
        };
        $.ajax({
            url: "<?php echo base_url(); ?>consultaymodificar/yesapplicuar",
            type: "POST",
            data: parametros,
            success: function (data) {
                cargardator();
            }
        });
    }

    function siapllymodif(id) {

        $.each(bitacoraa, function (i) {
            if (bitacoraa[i].idid == id) {
                var parametros = {
                    "id": id,
                    "fechaini": bitacoraa[i].fechaini,
                    "fechafin": bitacoraa[i].fechafin,
                    "descrpcion": bitacoraa[i].descripcion,
                    "tipomonitoria": bitacoraa[i].codetymonit,
                    "accion": 3
                };
                $.ajax({
                    url: "<?php echo base_url(); ?>consultaymodificar/yesapplicuar",
                    type: "POST",
                    data: parametros,
                    success: function (data) {
                        cargardator();
                    }
                });
                return false;
            }
        });


    }

    function registmodi(id) {
        console.log("entoroo");

        $.each(monitoria, function (i) {
            console.log("sicglo");
            console.log(monitoria[i].id, "sicglo", id);
            if (monitoria[i].id == id) {
                console.log("lo enecontro");
                var ides = monitoria[i].id;
                var fechainicio = monitoria[i].fechaini;
                var fechafin = monitoria[i].fechafin;
                var tiypomon = monitoria[i].tipominit;
                var descripcion = monitoria[i].descripcion;

                var resini = fechainicio.split(" ");
                var horainiser = resini[1];
                var gecha = resini[0];
                var res2ini = horainiser.split(":");
                var hourinit = res2ini[0] + ":" + res2ini[1];
                // sacar la hora final
                var resfini = fechafin.split(" ");
                var horafiner = resfini[1];
                var res2finer = horafiner.split(":");
                var horafinil = res2finer[0] + ":" + res2finer[1];
                $("#txtid").val(ides);
                $("#fechaifmodi").val(gecha);
                $("#txtdescripmodif").val(descripcion);
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
                    if (str == tiypomon) {
                        $(this).attr("selected", "selected");
                    }
                });
                $("#myModalmodificar").modal("show");

            }

        });



    }

    function mhacrregis(codigo) {
        
        $("#txtcodenove").val(codigo);
        $("#mdlregisrnoved").modal("show");
    }
</script>
</body>

</html>