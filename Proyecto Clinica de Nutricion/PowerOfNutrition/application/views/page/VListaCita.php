<div class="register-logo">
   <b class="box-title">Citas</b>
</div>
<div class="box box-success table-responsive">
   <div class="box-body">
      <div class="col-sm-12">
         <!--<div class="table-responsive"> -->

         <table id="tblCita" class="table table-bordered table-striped table-hover table-condensed">
            <thead>
            <tr>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Identificador de
                  Cita
               </th>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Numero de
                  Cliente
               </th>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Tipo</th>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Fecha Inicio</th>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Fecha Final</th>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Hora de la cita
               </th>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Estatus</th>
               <!--                    <th class="hidden"></th>-->
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Acción</th>
            </tr>
            </thead>
            <tbody></tbody>

         </table>
         <!--</div>-->
      </div>
   </div>
</div>

<div class="col-md-offset-0">
   <div class="table-responsive">
      <div class="box-body">
         <a href="<?php echo base_url(); ?>Cexcel/generar_excel" class="btn btn-sm btn-success" style="font-family: 'Berkshire Swash', cursive;">
            <i class="fa fa-list-alt"><strong> <u>Exportar Excel</u></i></strong>
         </a>
      </div>
   </div>
</div>
<!--edicion-->
<div class="modal fade" id="modalEditcita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">

         <div class="modal-header bg-green-active">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-pencil"> Editar Cita</i></h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" action="actualizaCita" method="post">
               <!--Parametros Ocultos-->
               <input type="hidden" id="mhdnIdCita" name="mhdnIdCita">
               <div class="box-body">
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Fecha Inicio</label>
                     <div class="col-sm-9">
                        <input type="date" name="mtxtFechaInicio" class="form-control" id="mtxtFechaInicio"
                               placeholder="Fecha Inicio">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Fecha Final</label>
                     <div class="col-sm-9">
                        <input type="date" name="mtxtFechaFinal" class="form-control" id="mtxtFechaFinal"
                               placeholder="Fecha Final">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Hora</label>
                     <div class="col-sm-9">
                        <input type="time" name="mtxtHora" class="form-control" id="mtxtHora"
                               placeholder="Fecha Final">
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal">Cancelar
                  </button>
                  <button type="submit" class="btn btn-info" id="mbtnUpdGrupo">Actualizar</button>
               </div>
            </form>
         </div>

      </div>
   </div>
</div>
<!--MODAL NUEVO MATERIAL-->
<div class="modal fade" id="modalNuevacita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">

         <div class="modal-header bg-green-active">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus-circle"> Agregar Material</i></h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" action="insertMaterial" method="post">
               <!--Parametros Ocultos-->
               <!--               <input type="hidden" id="mhdnIdMaterial" name="mhdnIdMaterial">-->
               <div class="box-body">
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Nombre</label>
                     <div class="col-sm-9">
                        <input type="text" name="mtxtNombre" class="form-control" id="mtxtNombre"
                               placeholder="Nombre Material">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Apellido</label>
                     <div class="col-sm-9">
                        <input type="number" name="mtxtCantidad" class="form-control" id="mtxtCantidad"
                               placeholder="Cantidad">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Descripcion</label>
                     <div class="col-sm-10">
                        <textarea class="form-control" rows="3" id="mtxtDescripcion" placeholder="Enter ..."
                                  name="mtxtDescripcion" style="resize:none"></textarea>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal">Cancelar
                  </button>
                  <button type="submit" class="btn btn-info">Agregar</button>
               </div>
            </form>
         </div>
         <!--
         <div class="modal-footer">
            <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-info" id="mbtnUpdGrupo" onclick="actualizaGrupo()">Actualizar</button>
         </div>
         -->
      </div>
   </div>
   <?php
   echo "<script>$swal('$mensaje', '$mensaje2', '$simbolo')</script>";
   ?>

</div>

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
