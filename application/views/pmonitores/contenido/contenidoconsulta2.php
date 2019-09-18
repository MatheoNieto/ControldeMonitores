</div> 



 
</div>   
        
         <div id="barraf" >Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>
         
           <script>



        var dt = new Date();
        var month = dt.getMonth()+1;
        var month2 = dt.getMonth();
        var day = dt.getDate();
        var day2 = dt.getDate()-1;
        var day3 = dt.getDate()-7;
        var day4 = dt.getDate()-30;
        var day5 = dt.getDate()+1;
        var year = dt.getFullYear();            
   
        
            
        $('#config-demo2').daterangepicker({
        "showDropdowns": true,
        "showWeekNumbers": true,
        "showISOWeekNumbers": true,
        "ranges": {
        "Hoy": [
        ""+year+"-"+month+"-"+day,
        ""+year+"-"+month+"-"+day
        ],
        "ayer": [
        ""+year+"-"+month+"-"+day2,
        ""+year+"-"+month+"-"+day
       
        ],
        "Ultimos 7 dias": [
       ""+year+"-"+month+"-"+day3,
        ""+year+"-"+month+"-"+day
       
        ],
        "Este Mes": [
         ""+year+"-"+month2+"-"+21,
        ""+year+"-"+month+"-"+20
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
        "startDate": ""+year+"-"+month+"-"+day,
        "endDate": ""+year+"-"+month+"-"+day,
        "opens": "right"
        }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        });
        </script>
    </body>
</html>