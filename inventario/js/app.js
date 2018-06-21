function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			type:"POST",
			url:'paises_ajax.php',
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

		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_rack = button.data('id_rack') // Extraer la información de atributos de datos
		  var unidad = button.data('unidad') // Extraer la información de atributos de datos
		  var razon_social = button.data('razon_social') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var tipo_equipo = button.data('tipo_equipo') // Extraer la información de atributos de datos
		  var marca = button.data('marca') // Extraer la información de atributos de datos
		  var modelo = button.data('modelo') // Extraer la información de atributos de datos
		  var n_serie = button.data('n_serie') // Extraer la información de atributos de datos
		  var fila = button.data('fila') // Extraer la información de atributos de datos
		  var rack = button.data('rack') // Extraer la información de atributos de datos
		  var observaciones = button.data('observaciones') // Extraer la información de atributos de datos
		  var posicion = button.data('posicion') // Extraer la información de atributos de datos
		 
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar datos de rack: '+rack)
		   modal.find('.modal-body #id_rack').val(id_rack)
		  modal.find('.modal-body #unidad').val(unidad)
		  modal.find('.modal-body #razon_social').val(razon_social)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #tipo_equipo').val(tipo_equipo)
		  modal.find('.modal-body #marca').val(marca)
		  modal.find('.modal-body #modelo').val(modelo)
		  modal.find('.modal-body #fila').val(fila)
		  modal.find('.modal-body #n_serie').val(n_serie)
		  modal.find('.modal-body #rack').val(rack)
		  modal.find('.modal-body #observaciones').val(observaciones)
		  modal.find('.modal-body #posicion').val(posicion)
		 
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_rack = button.data('id_rack') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_rack').val(id_rack)
		})



		$('#dataOcupado').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_rack = button.data('id_rack') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_rack').val(id_rack)
		})

	$( "#actualidarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		




$( "#ocupadoDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
                 $(".datos_ajax_delete").html(hide);
			 $.ajax({
					type: "POST",
					url: "ocupado.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
				
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		$( "#guardarDatos" ).submit(function( event ) {
                
		var parametros = $(this).serialize();
               $('#guardarDatos')[0].reset();
			 $.ajax({
					type: "POST",
					url: "agregar.php",
					data: parametros,
                                        
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});


$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_eliminar").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_eliminar").html(datos);
					
					
				  }
			});
		  event.preventDefault();
		});



$('#guarda').click(function() {
var parametros = $(this).serialize();
	$('#guardarDatos')[0].reset(); 
$('#datos_ajax_register').modal('hide');
});

$('#elimina').click(function() {
var parametros = $(this).serialize();
	$('#eliminarDatos')[0].reset(); 
$('#datos_ajax_eliminar').modal('hide');
});

 $("#btnCerrar").on("click",function(event){ 
     $('#guardarDatos')[0].reset(); 
    
});

 $(document).ready(function() {
  $(".modal").on("hidden.bs.modal", function() {
 $('#guardarDatos')[0].reset(); 
  });
});


  $(document).ready(function(){
        var consulta;
        //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
                                                                                                     
        //comprobamos si se pulsa una tecla
        $("#busqueda").keyup(function(e){
                                      
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
              //hace la búsqueda                                                                                  
              $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                    //imagen de carga
                    $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                    alert("error petición ajax");
                    },
                    success: function(data){                                                    
                    $("#resultado").empty();
                    $("#resultado").append(data);                                                             
                    }
              });                                                                         
        });                                                     
});