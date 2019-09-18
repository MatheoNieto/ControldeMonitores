<div class="col-md-5">
    <p><strong>Tipo de reporte:</strong> Horas de cada monitor</p>
    <p><strong>Rango de fecha del reporte:</strong> 2018-04-14 2018-05-15</p>
   
</div>
      <br><br><br><br>
       
<div class="col-md-12" id="contenedoorreporte">
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre del monitor</th>
                <th>Carrera</th>
                <th>Correo</th>
                <th>Horas</th>
                <th>Costo</th>
            </tr>
        </thead>
        <tbody>
    
        <?php 
            $suma=0;
            $suma2=0;
            
            foreach($datosxm as $datos){
                $precio= $datos->precio;
                $horas= $datos->horas;
                $multipli =$horas*$precio;
            echo '<tr>
            <td>'.$datos->codigo.'</td>
            <td>'.$datos->nombresyapellidos.'</td>
            <td>'.$datos->carrera.'</td>
            <td>'.$datos->correo.'</td>
            <td>'.$datos->horas.'</td>
            <td> $'.$multipli.'</td>
        </tr>';
            $suma2 = $suma2+$multipli;    
            $suma = $suma+$datos->horas;    
            }
            
            echo ' </tbody>
       <tfoot>
            <tr>
                <th>Codigo</th>
                <th>Nombre del monitor</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Horas: '.$suma.'</th>
                <th>Total: $'.$suma2.'</th>
            </tr>
        </tfoot>';
            
            ?>
       
       
    </table>
</div>

<script>
        
        $(document).ready(function() {
    $('#example').DataTable( {
        "dom": 'Bfrtip',
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": true,
        "order": [[ 1, "asc" ]],
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ],"language": {
        searchPlaceholder: "Pepito Perez",
        "sSearch": "Buscar: ",
    "paginate": {
    
        "zeroRecords": "No se encontraron datos",
        "infoEmpty": "No hay datos para mostrar",
        "info": "Mostrando del _START_ al _END_, de un total de _TOTAL_ registros",
      "previous": "Anterior",
      "next": "Siguiente",
       
    },
    "buttons": {
        "copy": 'Copiar',
        "excel": 'Exportar a Excel',
        "pdf": 'Exportar a PDF',
        "print": 'Imprimir',
    }
  },
    } );
} );
        
        </script>
