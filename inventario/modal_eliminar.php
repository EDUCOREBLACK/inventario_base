<form id="eliminarDatos">



       <strong><div class="modal fade" id="dataEliminar"  data-keyboard="false" data-backdrop="static"></strong>
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Eliminar  Rack</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax_eliminar"></div>
		
           <div class="form-group">
            <label for="sala" class="control-label" name="sala" >SALA:</label>
            <select  class="form-control"  id= "sala" name="sala" >
            <option>1</option>
            <option>2</option>
            <option>3</option> 
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
                
            </select>
      </div>
      <div class="form-group">
            <label for="fila" class="control-label">FILA:</label>
            <input type="text" class="form-control" id="fila" name="fila" value="" required maxlength="45">
          </div>
      <div class="form-group">
            <label for="numero" class="control-label">NUMERO:</label>
            <input type="text" class="form-control" id="numero" name="numero" value="" required maxlength="50">
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button id="btnCerrar" type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
        <button type="submit" class="btn btn-primary">Eliminar datos</button>
      </div>
    </div>
  </div>
</div>
</form>    <script>
  


  $("#btnCerrar").on("click",function(event){ 
     event.prevenDefault(); 
     $('#dataEliminar')[0].reset(); 
});
</script>