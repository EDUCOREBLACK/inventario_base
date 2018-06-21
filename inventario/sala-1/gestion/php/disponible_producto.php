 

 <?php
include('../../../conection/conexion.php');

$id = $_POST['id'];

//ELIMINAMOS EL PRODUCTO

mysql_query("UPDATE sala1 SET 
          razon_social='disponible',
          nombre='disponible',
          tipo_equipo='disponible',
           marca='disponible',
          n_serie='disponible',
          observaciones='disponible',
           posicion='disponible',
          modelo='disponible' WHERE id_rack = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS



$registro3 = mysql_query("SELECT * FROM sala1 where id_rack  = $id ");
 while($registro1 = mysql_fetch_array($registro3)){

$rack =  $registro1['rack'] ;


 }
 $registro = mysql_query("SELECT * FROM sala1 where rack = $rack ");



//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<div class="table-responsive" id="agrega-registros">
        <table class="table table-striped table-condensed table-hover  table-bordered">
            <tr class="success">
               <th>U</th>
                            <th>Razon Social</th>                                                   
                            <th>Tipo</th>
                            <th>Nombre</th>                             
                            <th>Marca</th>
                            <th>Modelo</th>                                                 
                            <th>N°Serie</th>
                            <th>Fila</th>                               
                            <th>Rack</th>
                            <th>Observaciones</th>
                            <th>Posicion</th>
                            <th>Editar</th>
                            <th>Disponible</th>
                              <th>Ocupado</th>
            </tr>';
    while($registro2 = mysql_fetch_array($registro)){


        echo '<tr>
                 <td>'.$registro2['unidad'].'</td>
                         <td>'.$registro2['razon_social'].'</td>
                          <td>'.$registro2['tipo_equipo'].'</td>
                           <td>'.$registro2['nombre'].'</td>
                            <td>'.$registro2['marca'].'</td>
                             <td>'.$registro2['modelo'].'</td>
                              <td>'.$registro2['n_serie'].'</td>
                               <td>'.$registro2['fila'].'</td>
                                <td>'.$registro2['rack'].'</td>
                                 <td>'.$registro2['observaciones'].'</td>
                                  <td>'.$registro2['posicion'].'</td>
                       
                                            

              


                <td> <a href=edita_unidad.php?id='.$registro2['id_rack'].'><center><span style="color:blue"> <i class=" glyphicon glyphicon-edit  fa-2x" onclick="javascript:editarProducto('.$registro2['id_rack'].');" ></i></span><a></td>



                    <td> <center><span style="color:green"> <i class="glyphicon glyphicon-floppy-saved fa-2x"  onclick ="javascript:eliminarProducto('.$registro2['id_rack'].');" ></i><br></td>

                     <td> <center><span style="color:red"> <i class="glyphicon glyphicon-floppy-remove fa-2x"  onclick ="javascript:ocupadoProducto('.$registro2['id_rack'].');" ></i><br></td>

                      
                    
                  </tr>'; 
    }
echo '</table>';
?>