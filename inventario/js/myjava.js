$(function(){
	$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../php/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../php/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	
	
	




	
	$('#bs-prod').on('keyup',function(){
		var dato = $('#bs-prod').val();
		var url = '../php/busca_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
});

function agregaRegistro(){
	var url = '../php/agrega_producto.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}

function eliminarProducto(id){
	var url = '../php/disponible_producto.php';
	var pregunta = confirm('¿Esta seguro de modificar unidad del rack?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}

function ocupadoProducto(id){
	var url = '../php/ocupado_producto.php';
	var pregunta = confirm('¿Esta seguro de modificar unidad del rack?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}




function editarProducto(id){
	$('#formulario')[0].reset();
	var url = '../php/edita_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg').hide();
				$('#edi').show();
				$('#pro').val('Edicion');
				$('#id-prod').val(id);
				$('#nombre_cv').val(datos[0]);
				$('#rut').val(datos[1]);
				$('#nacionalidad').val(datos[2]);
				$('#fecha_nac').val(datos[3]);
				$('#estado_civil').val(datos[4]);
				$('#direccion').val(datos[5]);
				$('#region').val(datos[6]);
				$('#telefono').val(datos[7]);
				$('#mail').val(datos[8]);
				$('#depen_indepen').val(datos[9]);
				$('#profesion').val(datos[10]);
				$('#antiguedad_lab').val(datos[11]);
				$('#cargo').val(datos[12]);
				$('#observaciones').val(datos[13]);
                $('#registra-producto').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}
	
function validar(e) { // 1
tecla = (document.all) ? e.keyCode : e.which; // 2
if (tecla==8) return true; // 3
patron =/[1234567890 k -]/; // 4
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
}			 




$('#nuevo-producto').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});



$('#nuevo-producto2').on('click',function(){
		$('#formulario2')[0].reset();
		$('#pro').val('Registro2');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto2').modal({
			show:true,
			backdrop:'static'
		});
	});

$('#nuevo-producto3').on('click',function(){
		$('#formulario3')[0].reset();
		$('#pro').val('Registro3');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto3').modal({
			show:true,
			backdrop:'static'
		});
	});


$('#nuevo-producto4').on('click',function(){
		$('#formulario4')[0].reset();
		$('#pro').val('Registro4');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto4').modal({
			show:true,
			backdrop:'static'
		});
	});


$('#nuevo-producto5').on('click',function(){
		$('#formulario5')[0].reset();
		$('#pro').val('Registro5');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto5').modal({
			show:true,
			backdrop:'static'
		});
	});



$('#nuevo-producto6').on('click',function(){
		$('#formulario6')[0].reset();
		$('#pro').val('Registro6');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto6').modal({
			show:true,
			backdrop:'static'
		});
	});

$('#nuevo-producto7').on('click',function(){
		$('#formulario7')[0].reset();
		$('#pro').val('Registro7');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto7').modal({
			show:true,
			backdrop:'static'
		});
	});










 
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
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto "); return false;}
    
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