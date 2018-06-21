
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventario Base</title>


     <link href="../../../css/main.css" rel="stylesheet">
    <!-- Scroll Menu -->
    <link href="../../../css/sweetalert.css" rel="stylesheet">
       <script src="../../../js/functions.js"></script>
    <!-- Sweet Alert Script -->
    <script src="../../../js/sweetalert.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
            -->

<?php





 include('../../../conection/conexion.php');


$id = $_POST['id'];
$razon_social = $_POST['razon_social'];
$tipo_equipo = $_POST['tipo_equipo'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$unidad = $_POST['unidad'];
$n_serie = $_POST['n_serie'];
$fila = $_POST['fila'];
$rack = $_POST['rack'];
$observaciones = $_POST['observaciones'];
$posicion = $_POST['posicion'];




  

$registro = mysql_query("UPDATE sala6  SET
		   razon_social = '$razon_social', 
		   tipo_equipo = '$tipo_equipo',
		   nombre = '$nombre', 
		   marca = '$marca',
		   modelo ='$modelo',
		   unidad ='$unidad ',
	     n_serie ='$n_serie',
	     fila = '$fila ',
	     rack ='$rack',  
	     observaciones ='$observaciones',
	     posicion ='$posicion'

		         WHERE id_rack = '$id'");




if($registro>0){ ?> 


        <script> 

   var id = 
 swal({
  title: "Registro editado con exito",
  text: "precione Aceptar para continuar",
  type: "success",
 
  confirmButtonColor: "#6495ED",
  confirmButtonText: "Aceptar",
  

  closeOnConfirm: false

},

function(){
  window.location.href='../vista?id=<?php echo $rack ; ?>' ;
});


       </script>


    <?php  }else{ 
        ?> 
  <script> 


 swal({
  title: "Error en editar registro",
  text: "precione Aceptar para continuar",
  type: "warning",
 
  confirmButtonColor: "#6495ED",
  confirmButtonText: "Aceptar",
  

  closeOnConfirm: false

},
function(){
 window.location.href='../vista?id=<?php echo $rack ; ?>' ;
});


       </script>


      <?php   }
     
     
?> 




 

  
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
   


</body>

</html>
