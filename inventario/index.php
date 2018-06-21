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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
 <link rel="Shortcut Icon" type="image/icon" href="../favicon.ico">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
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
                             <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesi&oacute;n</a>
                       </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active" >
                        <a href=""><i class="fa fa-fw fa-dashboard" ></i> Inicio</a>
                    </li>
                  

                    <li>
                        <a href="sala-1"><i class="glyphicon glyphicon-home"></i> 
                        &nbsp;&nbsp;GESTION SALA 1</a>
                    </li>
                    <li>
                        <a href="sala-2"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 2</a>
                    </li>

                     <li>
                        <a href="sala-3"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 3</a>
                    </li>

                     <li>
                        <a href="sala-4"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 4</a>
                    </li>

                     <li>
                        <a href="sala-5"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 5</a>
                    </li>

                     <li>
                        <a href="sala-6"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 6</a>
                    </li>

                     <li>
                        <a href="sala-7"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 7</a>
                    </li>

                     <li>
                        <a href="sala-8"><i class="glyphicon glyphicon-home"></i>
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
    src="logo_telefonica.png" width="320" height="150"
    >

                           <small> Sistema de administracion de datos</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                               <a href=""> <i class="fa fa-dashboard"></i> Inicio </a>
                            </li>
                        </ol>

                       

                       
                    </div>
                </div>

  <div class="col-lg-12">
 <div class="panel panel-success">
                        <div class="panel-heading">

                        
                          <center> <h3> <i class="fa fa-bar-chart-o fa-fw"></i> Busqueda de clientes </h3>  </center>
                        </div>
                        <div class="panel-body">        
               <div class="form-group">
 <p class="text-success">Ingrese Nombre del Cliente.</p> 

<input type="text" class="form-control" id="busqueda" />
<div id="resultado"></div>
</div>
</div>
</div>
</div>
               
   <?php include("modal_agregar.php");?>
   <?php include("modal_eliminar.php");?>

    <div class="col-xs-12 col-lg-6 ">
        
    <div class="col-lg-12 col-md-12"> 
   <div class="panel panel-primary">
                        <div class="panel-heading">

                        
                          <center> <h3> <i class="fa fa-bar-chart-o fa-fw"></i> Creacion de Rack</h3>  </center>
                        </div>
                        <div class="panel-body">            
  <h4> La creacion de un rack solicita datos especificos de sala, fila y numero.
                                 despues de crear el Rack  las unidades quedan en estado disponible, todo dato erroneo afecta directamente los informes de sala.</h4> 
                <h3 class='text-center'>     
              
    <div class='col-xs-12'>    
                
           <center> <button class="btn btn-success btn-lg" id="guarda" data-toggle="modal" data-target="#dataRegister"><i class='glyphicon glyphicon-plus'></i>  Crear Rack</button> </center>
         </div>
        </div>  
        </div>
      </div>
    </div>



    <div class="col-xs-12 col-lg-6 ">
        
    <div class="col-lg-12 col-md-12"> 
   <div class="panel panel-primary">
                        <div class="panel-heading">

                        
                          <center> <h3> <i class="fa fa-bar-chart-o fa-fw"></i> Eliminacion de Rack</h3>  </center>
                        </div>
                        <div class="panel-body">            
  <h4> La eliminacion de rack solo se debe realizar por motivos especificos como error en datos de creacion de rack o retiro de rack en sala, la informacion borrada no se podra recuperar.</h4> 
                <h3 class='text-center'>     
              
    <div class='col-xs-12'>    
                
           <center> <button class="btn btn-danger btn-lg" id="elimina" data-toggle="modal" data-target="#dataEliminar"><i class='glyphicon glyphicon-plus'></i>  Eliminar Rack</button> </center>
         </div>
        </div>  
        </div>
      </div>
    </div>
         
      


              
                

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
<script>
  


  $("#btnCerrar").on("click",function(event){ 
     event.prevenDefault(); 
     $('#dataEliminar')[0].reset(); 
});
</script>
</body>

</html>