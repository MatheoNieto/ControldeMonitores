 </div>
      
    </div>
  </div> 
     <div id="barraf" >Biblioteca Cardenal Darío Castrillón Hoyos | © 2017 Developed By: Comité de Desarrollo GTI </div>  
     
       <script>
            function cargardatos(id){
         
        var parametros = {"id" : id};
                 
        $.ajax({
            url:"<?php echo base_url(); ?>mmonitores/datosmoni",
            type:"POST",
            data:parametros,
            success :function(data){
         
                $("#contenedormodal").html(data);
            }
        });
         
    
      
}
</script>
       
         
           
               
    </body>
</html>