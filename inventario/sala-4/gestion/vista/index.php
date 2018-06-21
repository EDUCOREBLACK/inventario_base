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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bienvenido <?php echo $login;?> <strong></strong> <b class="caret"></b></a>
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

                     <li >
                        <a href="../../../sala-3"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 3</a>
                    </li>

                     <li class="active">
                        <a href="../../"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 4</a>
                    </li>

                     <li>
                        <a href="../../../sala-5"><i class="glyphicon glyphicon-home"></i>
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
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        

  <img
    src="../../../logo_telefonica.png" width="320" height="150"
    >

                           <small> Sistema de administracion de datos</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

               <!-- /.tabla de registro -->
                       <ol class="breadcrumb">
                            <li class="">
                              <a href="../../../">  <i class="fa fa-dashboard"></i> Inicio</a> </li>
                                 <li class="">
                               <a href="../../"> <i class="fa fa-dashboard"></i> Gestion Sala 4 </a> </li>
                            <li class="">
                              <a href="../">   <i class="fa fa-dashboard"></i> Gestion Sala 4 Rack <?php    $id=$_REQUEST['id']; echo "$id";?> </a> </li>
                            </li>
                            <li class="active">
                               <i class="fa fa-dashboard"></i> Gestion Sala 4  Rack<?php    $id=$_REQUEST['id']; echo "$id";?>  Unidades</li>
                            </li>
                        </ol>
               <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                       DataCenter San Martin     Gestion Sala 4  Rack  <?php    $id=$_REQUEST['id']; echo "$id";?>
                        </h1>
                       
                    </div>
                </div>
 <div class="table-responsive" id="agrega-registros">
        <table class="table table-striped table-condensed table-hover  table-bordered  ">
            <tr class="success"  >
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
            </tr>

 <?php
   

            include('../../../conection/conexion.php');
            
            $registro = mysql_query("SELECT * FROM sala4 where rack = $id "); 
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
        ?>
      
        </div>  
        
    
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  
    <script src="../../../js/myjava.js"></script>
    <script>
        $(document).ready(function(){
            load(1);S
        });S
    </script>














  
     <?php
 

 include('../../../conection/conexion.php');



             $registro = mysql_query("SELECT * FROM sala4 where rack='$id'"); 
            while($registro2 = mysql_fetch_array($registro)){  
                }




 
?>
    <script src="../../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../../js/plugins/morris/raphael.min.js"></script>
    <script src="../../../js/plugins/morris/morris.min.js"></script>
    <script src="../../../js/plugins/morris/morris-data.js"></script>
     <script>
        $(document).ready(function(){
            load(1);
        });
    </script>

</body>

</html>