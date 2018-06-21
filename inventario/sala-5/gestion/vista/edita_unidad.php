<?php
    session_start();
    if (@!$_SESSION['user']) {
          header("Location:../");
    }

    $login = $_SESSION['user'];
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventario Base</title>

    <!-- Bootstrap Core CSS -->


 <link href="../../../css/sweetalert.css" rel="stylesheet">
       <script src="js/functions.js"></script>
    <!-- Sweet Alert Script -->
    <script src="../../../js/sweetalert.min.js"></script>
     <script src="../../../js/bootstrap.min.js"></script>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">


    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
 <link rel="Shortcut Icon" type="image/icon" href="../../../../favicon.ico">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation navar estatico  -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>



               <a class="navbar-brand" href="">Administracion Inventario</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle=""><i class=""></i> <b class=""></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                       
                                    </span>
                                    <div class="media-body">
                                       
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        
                                    </span>
                                    <div class="media-body">
                                       
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        
                                    </span>
                                    <div class="media-body">
                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                         
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle=""><i class=""></i> <b class=""></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bienvenido <?php echo $login;?><strong></strong> <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                            
                        <li>
                             <a href="../../../logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesi&oacute;n</a>
                       </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li  >
                        <a href="../../../"><i class="fa fa-fw fa-dashboard" ></i> Inicio</a>
                    </li>
                  
                    <li >
                        <a href="../../../sala-1"><i class="glyphicon glyphicon-home"></i> 
                        &nbsp;&nbsp;GESTION SALA 1</a>
                    </li>
                    <li >
                        <a href="../../../sala-2"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 2</a>
                    </li>

                     <li ">
                        <a href="../../../sala-3"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 3</a>
                    </li>

                     <li >
                        <a href="../../../sala-4"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 4</a>
                    </li>

                     <li class="active " >
                        <a href="../../"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 5</a>
                    </li>

                     <li>
                        <a href="../../../sala-6"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 6</a>
                    </li>

                     <li>
                        <a href="../../../sala-7"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 7</a>
                    </li>

                     <li>
                        <a href="../../../sala-8"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 8</a>
                    </li>
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
              
                <!-- /.row -->
 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                       Editar unidad de rack  
                        </h1>
                       
                    </div>
                </div>
   


 <?php
  $id=$_REQUEST['id'];

  include('../../../conection/conexion.php');
  $registro = mysql_query("SELECT * FROM sala5 where id_rack='$id'"); 
            while($registro2 = mysql_fetch_array($registro)){  
                

       echo '
 





  <div class="main container-fluid" role="main">
      <div class="row"> 
     
         
          <form name="fas" action="editado.php" method="POST">
            <fieldset>

            
                   <div class="panel panel-primary">
  <div class="panel-heading"> <center>EDITAR DATOS DE UNIDAD '.$registro2['unidad'].' DE RACK '.$registro2['rack'].'</center></div>
  <div class="panel-body">

  <div class="col-lg-6">


   <div class="form-group">
            <input type="hidden" class="form-control" id="rack" name="rack" value="'.$registro2['rack'].'" required maxlength="50">
      </div>

         <div class="form-group">
            <input type="hidden" class="form-control" id="fila" name="fila" value="'.$registro2['fila'].'" required maxlength="50">
      </div>
               <div class="form-group">
            <label for="razon_social" class="control-label">Razon Social:</label>
            <input type="text" class="form-control" id="razon_social" name="razon_social" value="'.$registro2['razon_social'].'" required maxlength="50">
      </div>
      <div class="form-group">
            <label for="tipo_equipo" class="control-label">Tipo Equipo:</label>
            <input type="text" class="form-control" id="tipo_equipo" name="tipo_equipo" value="'.$registro2['tipo_equipo'].'" required maxlength="45">
          </div>

           <div class="form-group">
            <label for="fila" class="control-label">Fila:</label>
            <input type="text" class="form-control" id="fila" name="fila" value="'.$registro2['fila'].'" required maxlength="45">
          </div>
      <div class="form-group">
            <label for="nombre" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="'.$registro2['nombre'].'" required maxlength="50">
          </div>
      <div class="form-group">
            <label for="marca" class="control-label">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" value="'.$registro2['marca'].'" required maxlength="30"> 
          </div>
     
       <div class="form-group">
            <label for="unidad" class="control-label">Unidad:</label>
            <input type="text" class="form-control" id="unidad" name="unidad" value="'.$registro2['unidad'].'" required maxlength="50">
          </div></div>

          <div class="col-lg-6">

           <div class="form-group">
            <label for="modelo" class="control-label">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="'.$registro2['modelo'].'"  required maxlength="15">
          </div>

      <div class="form-group">
            <label for="n_serie" class="control-label">N°Serie:</label>
            <input type="text" class="form-control" id="n_serie" name="n_serie" value="'.$registro2['n_serie'].'"  required maxlength="30"> 
          
     
      
          </div> <div class="form-group">
            <label for="observaciones" class="control-label">Observaciones:</label>
            <input type="text" class="form-control" id="observaciones" name="observaciones" value="'.$registro2['observaciones'].'" required maxlength="15">
      
          </div> <div class="form-group">
            <label for="posicion" class="control-label">Posicion:</label>
            <input type="text" class="form-control" id="posicion" name="posicion" value="'.$registro2['posicion'].'" required maxlength="15">
      
      


         <br>     <br>  
    <div class="form-group"> 
               <div class="pull-right">

     
    <input class="btn btn-success " type="submit" id="'.$registro2['id_rack'].' " name="Editar"> </input>
    &nbsp<input type="reset" class="btn btn-danger"  class="form-control"> </input>
   
              <input type="hidden" name="id" value="'.$registro2['id_rack'].'"> 

                &nbsp <a class="btm btn-primary btn-lg" href=../vista?id='.$registro2['rack'].'> Volver</a>
                 </div>        
              
              </div> 
   
            </div>
    </div>
      </div>  
 </form>
        </div>
     
   
    

          ';    
    }  ?>      











  
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <link href="../../.../css/estilo.css" rel="stylesheet">
    <script src="../../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../../js/plugins/morris/raphael.min.js"></script>
    <script src="../../../js/plugins/morris/morris.min.js"></script>
    <script src="../../../js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="../../../js/plugins/flot/jquery.flot.js"></script>
    <script src="../../../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../../js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../../../js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../../../js/plugins/flot/flot-data.js"></script>
<script>
 
function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto  "); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido "); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}

</script>

<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

</body>

</html>
