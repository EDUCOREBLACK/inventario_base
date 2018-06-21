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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <link rel="Shortcut Icon" type="image/icon" href="../../../favicon.ico">

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
                             <a href="../../logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesi&oacute;n</a>
                       </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li  >
                        <a href="../../"><i class="fa fa-fw fa-dashboard" ></i> Inicio</a>
                    </li>
                  
                    <li >
                        <a href="../../sala-1"><i class="glyphicon glyphicon-home"></i> 
                        &nbsp;&nbsp;GESTION SALA 1</a>
                    </li>
                    <li class ="active">
                        <a href="../"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 2</a>
                    </li>

                     <li>
                        <a href="../../sala-3"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 3</a>
                    </li>

                     <li>
                        <a href="../../sala-4"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 4</a>
                    </li>

                     <li>
                        <a href="../../sala-5"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 5</a>
                    </li>

                     <li>
                        <a href="../../sala-6"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 6</a>
                    </li>

                     <li>
                        <a href="../../sala-7"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 7</a>
                    </li>

                     <li>
                        <a href="../../sala-8"><i class="glyphicon glyphicon-home"></i>
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
    src="../../logo_telefonica.png" width="320" height="150"
    >

                           <small> Sistema de administracion de datos</small>
                        </h1>
                        <ol class="breadcrumb">
                         <li class="">
                              <a href="../../">  <i class="fa fa-dashboard"></i> Inicio</a> </li>
                                 <li class="">
                               <a href="../"> <i class="fa fa-dashboard"></i> Gestion Sala 2 </a> </li>
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Gestion Sala 2 Rack
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                       DataCenter San Martin     Gestion Sala 2  
                        </h1>
                       
                    </div>
                </div>
              
                <!-- /.row  de rack  siclo  que muestra los rack de la base de datos -->

          <?php

          
            include('../../conection/conexion.php');
            
            $registro = mysql_query("SELECT * FROM rack  where sala = '2' order by rack asc" ); 
            while($registro2 = mysql_fetch_array($registro)){


                   
               
                echo '
               
                      


<div class="col-lg-2 ">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon  glyphicon-hdd fa-3x"></i> <h4>rack</h4>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                       <div class="huge"> '.$registro2['fila'].'  </div>
                                       <div class="huge"> '.$registro2['rack'].'</div>
                                        
                                    </div>
                                </div>
                            </div>
                             <a href=vista?id='.$registro2['rack'].'>
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    
                    ';  

                  
                }
        ?>
                <!-- /.row fin de rack -->

                

                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../js/plugins/morris/raphael.min.js"></script>
    <script src="../../js/plugins/morris/morris.min.js"></script>
    <script src="../../js/plugins/morris/morris-data.js"></script>
    <script>
        $(document).ready(function(){
            load(1);
        });
    </script>

</body>

</html>