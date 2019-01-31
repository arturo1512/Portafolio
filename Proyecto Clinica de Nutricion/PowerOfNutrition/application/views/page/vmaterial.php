<div class="register-logo">
   <b class="box-title">Materiales</b>
</div>
<div class="col-md-offset-10">
   <div class="table-responsive">
      <div class="box-body">
         <a class="btn btn-sm btn-success" style="font-family: 'Berkshire Swash', cursive;" data-toggle="modal"
            data-target="#modalNuevoMaterial">
            <i class="fa fa-plus-circle"><strong> <u>Nuevo Material</u></i></strong>
         </a>
      </div>
   </div>
</div>
<div class="box box-success table-responsive">
   <div class="box-body">
      <div class="col-sm-12">
         <!--<div class="table-responsive"> -->
         <table id="tblMaterial" class="table table-bordered table-striped table-hover table-condensed">
            <thead>
            <tr>
               <th style="text-align: center; background-color: #0b93d5; color: white">#</th>
               <th style="text-align: center; background-color: #0b93d5; color: white">Nombre</th>
               <th style="text-align: center; background-color: #0b93d5; color: white">Cantidad</th>
               <th style="text-align: center; background-color: #0b93d5; color: white">Descripcion</th>
               <th style="text-align: center; width: 10%; background-color: #0b93d5; color: white">Status</th>
               <th class="hidden"></th>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Acción</th>
            </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
            <tr>
               <th style="text-align: center; background-color: #0b93d5; color: white">#</th>
               <th style="text-align: center; background-color: #0b93d5; color: white">Nombre</th>
               <th style="text-align: center; background-color: #0b93d5; color: white">Cantidad</th>
               <th style="text-align: center; background-color: #0b93d5; color: white">Descripcion</th>
               <th style="text-align: center; width: 10%; background-color: #0b93d5; color: white">Status</th>
               <th class="hidden"></th>
               <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Acción</th>
            </tr>
            </tfoot>
         </table>
         <!--</div>-->
      </div>
   </div>
</div>
<!--MODAL EDITAR MATERIAL-->
<div class="modal fade" id="modalEditMaterial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">

         <div class="modal-header bg-green-active">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-pencil"> Editar Material</i></h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" action="actualizaMaterial" method="post">
               <!--Parametros Ocultos-->
               <input type="hidden" id="mhdnIdMaterial" name="mhdnIdMaterial">
               <div class="box-body">
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Nombre</label>
                     <div class="col-sm-9">
                        <input type="text" name="mtxtNombre" class="form-control" id="mtxtNombre"
                               placeholder="Nombre Grupo">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Cantidad</label>
                     <div class="col-sm-9">
                        <input type="number" name="mtxtCantidad" class="form-control" id="mtxtCantidad"
                               placeholder="Nombre Material">
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
                  <button type="submit" class="btn btn-info" id="mbtnUpdGrupo">Actualizar</button>
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
</div>
<!--MODAL NUEVO MATERIAL-->
<div class="modal fade" id="modalNuevoMaterial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                     <label class="col-sm-3 control-label">Cantidad</label>
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

<!--<div class="table-responsive">-->
<!--   <div class="box-body">-->
<!--      <!--      <a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditMaterial" class="btn btn-app" style="background-color: #0b97c4; color: white">-->
<!--      <!--         <i class="fa fa-plus-circle"></i> <strong>Nuevo Material</strong>-->
<!--      <!--      </a>-->
<!--      <a class="btn btn-info btn-lg" style="font-family: 'Berkshire Swash', cursive;" data-toggle="modal"-->
<!--         data-target="#modalNuevoMaterial">-->
<!--         <i class="fa fa-plus-circle"><strong> <u>Nuevo Material</u></i></strong>-->
<!--      </a>-->
<!--   </div>-->
<!--</div>-->
<!--<input type="text" id="inBolStatus" name="inBolStatus"> status-->
<!--<input type="text" id="inIdMaterial" name="inIdMaterial">id-->

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>