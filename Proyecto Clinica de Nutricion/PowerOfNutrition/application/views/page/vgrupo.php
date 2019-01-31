<div class="register-logo">
   <b class="box-title">Grupos</b>
</div>
<div class="col-xs-12">
   <div class="box box-primary center-block table-responsive">
      <table id="tblGrupo" class="table table-bordered table-striped table-hover tab">
         <tr>
            <th style="text-align: center; background-color: #0b93d5; color: white">#</th>
            <th style="text-align: center; background-color: #0b93d5; color: white">Nombre Grupo</th>
            <th style="text-align: center; background-color: #0b93d5; color: white">Descripcion</th>
            <th style="text-align: center; background-color: #0b93d5; color: white">Status</th>
            <th style="text-align: center; background-color: #0b93d5; color: white">Editar</th>
         </tr>
      </table>
   </div>
</div>
<div class="modal fade" id="modalEditGrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">

         <div class="modal-header bg-green-active">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Editar Grupo</h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" action="actualizaGrupo" method="post">
               <!--Parametros Ocultos-->
               <input type="hidden" id="mhdnIdGrupo" name="mhdnIdGrupo">
               <div class="box-body">
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Nombre</label>
                     <div class="col-sm-9">
                        <input type="text" name="mtxtNombre" class="form-control" id="mtxtNombre"
                               placeholder="Nombre Grupo">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Descripcion</label>
                     <div class="col-sm-10">
                        <textarea class="form-control" rows="3" id="mtxtDescripcion" placeholder="Enter ..."
                                  name="mtxtDescripcion" style="resize:none"></textarea>
                     </div>
                  </div>

                  <div class="form-group">
                     <label>Status</label>
                     <select id="cboStatus" name="cboStatus" class="form-control select2" style="width: 100%;">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                     </select>
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
   <?php
   echo "<script>$swal('$mensaje', '$mensaje2', '$simbolo')</script>";
   ?>
   <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<!-- /.modal -->
<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>

