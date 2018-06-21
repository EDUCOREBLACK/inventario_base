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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <link rel="Shortcut Icon" type="image/icon" href="../../favicon.ico">

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
                             <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesi&oacute;n</a>
                       </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li  >
                        <a href="../"><i class="fa fa-fw fa-dashboard" ></i> Inicio</a>
                    </li>
                  
                    <li >
                        <a href="../sala-1"><i class="glyphicon glyphicon-home"></i> 
                        &nbsp;&nbsp;GESTION SALA 1</a>
                    </li>
                    <li >
                        <a href="../sala-2"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 2</a>
                    </li>

                     <li >
                        <a href="../sala-3"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 3</a>
                    </li>

                     <li >
                        <a href="../sala-4"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 4</a>
                    </li>

                     <li >
                        <a href="../sala-5"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 5</a>
                    </li>

                     <li class="active">
                        <a href=""><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 6</a>
                    </li>

                     <li>
                        <a href="../sala-7"><i class="glyphicon glyphicon-home"></i>
                        &nbsp;&nbsp;GESTION SALA 7</a>
                    </li>

                     <li>
                        <a href="../sala-8"><i class="glyphicon glyphicon-home"></i>
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
    src="../logo_telefonica.png" width="320" height="150"
    >

                           <small> Sistema de administracion de datos</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                               <a href="../"> <i class="fa fa-dashboard"></i> Inicio </a>
                                 <li class="active">
                                <i class="fa fa-dashboard"></i> Gestion Sala 6
                            </li>

                        </ol> 
                    </div>
                </div>
                <!-- /.row -->
 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                       DataCenter San Martin     Gestion Sala 6

                       <div class="pull-right"><a class="btm btn-primary btn-lg" href="gestion"><i class="glyphicon glyphicon-tasks"></i> Gestionar Rack</a>
                        </h1>  </div>
                       
                     </div>
                      <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                       Exportar Informacion de Inventario en EXCEL Sala 6

                       <div class="pull-right"><a class="btm btn-success btn-lg" href=" reporteexcel.php"> <i class="fa fa-file-excel-o"></i>&nbsp;Exportar Excel</a>
                        </h1>  </div>
                       
                     </div>
                </div> <br><br><br>
              
                <!-- /.row  de rack  siclo  que muestra los rack de la base de datos -->

          <?php

include('../conection/conexion.php');


if (mysqli_connect_errno()) {
    printf("coneccion fallida",mysqli_connect_errno());
    exit();
}
if ($result = mysqli_query($link, "SELECT * FROM sala6 where nombre='Disponible'")) {
    $row_cnt = mysqli_num_rows($result);
}

if ($result1 = mysqli_query($link, "SELECT *  FROM  rack  where sala='6'")) {
    $row_cnt1 = mysqli_num_rows($result1);
}

 if ($result2 = mysqli_query($link, "SELECT *  FROM  sala6  ")) {
    $row_cnt2 = mysqli_num_rows($result2);



}

 if ($result3 = mysqli_query($link, "SELECT *  FROM  sala6 where  razon_social<> '1' and razon_social <> 'disponible' ")) {
    $row_cnt3 = mysqli_num_rows($result3);



}

 if ($resultSERVER  = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'SERVER ' ")) {
    $row_SERVER  = mysqli_num_rows($resultSERVER );
}

 if ($resultSWITCH = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'SWITCH ' ")) {
    $row_SWITCH = mysqli_num_rows($resultSWITCH);
}

 if ($resultROUTER = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'ROUTER' ")) {
    $row_ROUTER = mysqli_num_rows($resultROUTER);
}

 if ($resultTRANSCEIVER = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'TRANSCEIVER' ")) {
    $row_TRANSCEIVER = mysqli_num_rows($resultTRANSCEIVER);
}

 if ($resultSTORAGE = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'STORAGE' ")) {
    $row_STORAGE = mysqli_num_rows($resultSTORAGE);
}


 if ($resultFIREWALL = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'FIREWALL' ")) {
    $row_FIREWALL = mysqli_num_rows($resultFIREWALL);
}

 if ($resultLIBRERIA = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'LIBRERIA' ")) {
    $row_LIBRERIA = mysqli_num_rows($resultLIBRERIA);
}

 if ($resultMODEM = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'MODEM' ")) {
    $row_MODEM = mysqli_num_rows($resultMODEM);
}

 if ($resultUNIDAD_CINTA = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'UNIDAD DE CINTA' ")) {
    $row_UNIDAD_CINTA= mysqli_num_rows($resultUNIDAD_CINTA);
}

 if ($resultDTU = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'DTU' ")) {
    $row_DTU = mysqli_num_rows($resultDTU);
}

 if ($resultGATEWAY = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'GATEWAY' ")) {
    $row_GATEWAY = mysqli_num_rows($resultGATEWAY);
}


 if ($resultLIBRERIA_RESPALDO = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'LIBRERIA RESPALDO ")) {
    $row_LIBRERIA_RESPALDO = mysqli_num_rows($resultLIBRERIA_RESPALDO);
}

 if ($resultMONITOR = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'MONITOR' ")) {
    $row_MONITOR = mysqli_num_rows($resultMONITOR);
}

 if ($resultNTU = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'NTU' ")) {
    $row_NTU = mysqli_num_rows($resultNTU);
}

 if ($resultCONTROLADORA = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'CONTROLADORA' ")) {
    $row_CONTROLADORA = mysqli_num_rows($resultCONTROLADORA);
}

 if ($resultCABECERA = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'CABECERA DE F.O' ")) {
    $row_CABECERA = mysqli_num_rows($resultCABECERA);
}

 if ($resultCONSOLA = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'CONSOLA' ")) {
    $row_CONSOLA = mysqli_num_rows($resultCONSOLA);
}

 if ($resultMULTIPLEXOR = mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'MULTIPLEXOR' ")) {
    $row_MULTIPLEXOR = mysqli_num_rows($resultMULTIPLEXOR);
}
 if ($resultPATCHPANEL= mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'PATCH PANEL' ")) {
    $row_PATCHPANEL = mysqli_num_rows($resultPATCHPANEL);
}
if ($resultENCLOSURE= mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'ENCLOSURE' ")) {
    $row_ENCLOSURE = mysqli_num_rows($resultENCLOSURE);
}
if ($resultBALANCEADOR= mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'BALANCEADOR' ")) {
    $row_BALANCEADOR = mysqli_num_rows($resultBALANCEADOR);
}
if ($resultIPS_IDS= mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'IPS/IDS' ")) {
    $row_IPS_IDS = mysqli_num_rows($resultIPS_IDS);
}
if ($resultCONMUTADOR= mysqli_query($link, "SELECT *  FROM  sala6 where tipo_equipo= 'CONMUTADOR' ")) {
    $row_CONMUTADOR = mysqli_num_rows($resultCONMUTADOR);
}




              
                
        ?>
                <!-- /.row  -->
 <div class="row">
                 <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="    glyphicon glyphicon-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <div><H4>Cantidad de rack en Sala</H4></div>
                                        <div class="huge"><?php echo $row_cnt1;?></div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="  glyphicon glyphicon-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <div ><H4>Unidades Disponible</H4></div>
                                        <div class="huge"><?php echo $row_cnt;?></div>
                                       
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="  glyphicon glyphicon-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <div><H4>Unidades Ocupadas</H4></div>
                                        <div class="huge"><?php echo $row_cnt3;?></div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>

             <!-- /.torta donut-->
   <div class="col-lg-4 col-md-6"> 
   <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Informacion Unidades
                        </div>
                        <div class="panel-body">            
 <div id="donut-example"></div>
                    
                

            </div>
            </div>
            </div>

             <!-- /. fin torta donut-->


            

 

    
        <!-- /#page-wrapper -->



   
   



<div class="pull-height">
 <div class="col-lg-8 col-md-12"> 
   <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> total de clientes
                        </div>
                        <div class="panel-body">                   
        
        <div class="col-xs-12">
        
        <div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
        <div class="outer_div"></div><!-- Datos ajax Final -->
        </div>
      </div>
    </div>
    </div>











  <!-- gravico-->
             <div class="col-lg-12 col-md-12"> 
  

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container"></div>
<button id="plain" class="btm btn-success ">Columnas</button>
<button id="inverted" class="btm btn-warning ">Invertido</button>
<button id="polar" class="btm btn-primary btn-mg">Polar</button>



                    



                    <script type="text/javascript">



var chart = Highcharts.chart('container', {

    title: {
        text: 'Informacion de equipos en sala 6'
    },

    subtitle: {
        text: 'Detalle obtenido estadisticamente de los nombres de equipos en las unidades de Rack'
    },

    xAxis: {
        categories: [ "SERVER = <?php echo $row_SERVER;?> " , 
         "SWITCH= <?php echo $row_SWITCH;?>",
         "ROUTER = <?php echo $row_ROUTER;?> ",
         "TRANSCEIVER =  <?php echo $row_TRANSCEIVER;?>",
         "STORAGE = <?php echo $row_STORAGE;?>",
         "FIREWALL = <?php echo $row_FIREWALL;?>",
         "LIBRERIA = <?php echo $row_LIBRERIA;?>",
         "MODEM = <?php echo $row_MODEM;?>",
         "UNIDAD DE CINTA = <?php echo $row_UNIDAD_CINTA;?>",
          "DTU = <?php echo $row_DTU;?>",
          "GATEWAY = <?php echo $row_GATEWAY;?>",
          "MONITOR = <?php echo $row_MONITOR;?>",
          "NTU = <?php echo $row_NTU;?>",
         "CONTROLADORA = <?php echo $row_CONTROLADORA;?>",
         "CABECERA DE F.O = <?php echo $row_CABECERA;?>",
         "CONSOLA = <?php echo $row_CONSOLA;?>",
         "MULTIPLEXOR = <?php echo $row_MULTIPLEXOR;?>",
         "PATCH PANEL = <?php echo $row_PATCHPANEL;?>",
         "ENCLOSURE = <?php echo $row_ENCLOSURE;?>",
         "BALANCEADOR = <?php echo $row_BALANCEADOR;?>",
         "IPS/IDS = <?php echo $row_IPS_IDS;?>",
         "CONMUTADOR = <?php echo $row_CONMUTADOR;?>",


         ]
    },
 yAxis: {
        title: {
            text: null
        }
    },
    series: [{
         name: 'Equipos',
        type: 'column',
        colorByPoint: true,
        data: [ <?php echo $row_SERVER;?>, 
            <?php echo $row_SWITCH;?>,
            <?php echo $row_ROUTER;?>,
            <?php echo $row_TRANSCEIVER;?>, 
            <?php echo $row_STORAGE;?>,
            <?php echo $row_FIREWALL;?>,
            <?php echo $row_LIBRERIA;?>,
            <?php echo $row_MODEM;?>,
            <?php echo $row_UNIDAD_CINTA;?>,
            <?php echo $row_DTU;?>,
            <?php echo $row_GATEWAY;?>,
            <?php echo $row_MONITOR;?>,
            <?php echo $row_NTU;?>,
            <?php echo $row_CONTROLADORA;?>,
            <?php echo $row_CABECERA;?>,
            <?php echo $row_CONSOLA;?>, 
            <?php echo $row_MULTIPLEXOR;?>,
            <?php echo $row_PATCHPANEL;?>,
            <?php echo $row_ENCLOSURE;?>,
            <?php echo $row_BALANCEADOR;?>,
            <?php echo $row_IPS_IDS;?>,
            <?php echo $row_CONMUTADOR;?>,
            

            ],
        showInLegend: false
    }]

});


$('#plain').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Plain'
        }
    });
});

$('#inverted').click(function () {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

$('#polar').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});



                        
                    </script>         
                    
                   

            </div>
            </div>  

            </div>
            </div>
            </div>
            </div>
           
         <!-- /. fin grafico-->
       
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
        <script src="../js/app.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
  
   

<script type="text/javascript">

 $(document).ready(function(){
            load(1);
        });

    
  Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Total de unidades ", value: <?php echo $row_cnt2;?> },
    {label: "Unidades ocupadas", value: <?php echo $row_cnt3;?>},
    {label: " Unidades disponibles", value: <?php echo $row_cnt;?>}
  ]
});


    function load(page){
        var parametros = {"action":"ajax","page":page};
        $("#loader").fadeIn('slow');
        $.ajax({
            type:"POST",
            url:'listacliente.php',
            data: parametros,
             beforeSend: function(objeto){
            $("#loader").html("<img src='loader.gif'>");
            },
            success:function(data){
                $(".outer_div").html(data).fadeIn('slow');
                $("#loader").html("");
            }
        })
    }

</script>


</body>

</html>