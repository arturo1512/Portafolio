<div class="register-logo">
    <b class="box-title">Nomina</b>
</div>
<div class="box box-success table-responsive">
    <div class="box-body">
        <div class="col-sm-12">
            <!--<div class="table-responsive"> -->

            <table id="tblNomina" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Identificador de
                        recibo de nomina
                    </th>
                    <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Numero de
                        Empleado
                    </th>
                    <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Id de sueldo nomina</th>
                    <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Sueldo</th>
                    <th style="text-align: center; width: 5%; background-color: #0b93d5; color: white">Fecha de Recibo</th>
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

<!--<div class="col-md-offset-0">-->
<!--    <div class="table-responsive">-->
<!--        <div class="box-body">-->
<!--            <a href="--><?php //echo base_url(); ?><!--Cexcel/generar_excel" class="btn btn-sm btn-success" style="font-family: 'Berkshire Swash', cursive;">-->
<!--                <i class="fa fa-list-alt"><strong> <u>Exportar Excel</u></i></strong>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--edicion-->
<div class="modal fade" id="modalEditFactura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">

            <div class="modal-header bg-green-active">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-pencil"> Editar Nomina</i></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action=" actualizaNomina" method="post">
                    <!--Parametros Ocultos-->
                    <input type="hidden" id="mhdnIdNomina" name="mhdnIdNomina">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Numero de empleado</label>
                            <div class="col-sm-9">
                                <input type="text" name="mtxtTipo2" class="form-control" id="mtxtTipo2"
                                       placeholder="Empleado">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">id de nomina</label>
                            <div class="col-sm-9">
                                <input type="text" name="mtxtTipo3" class="form-control" id="mtxtTipo3"
                                       placeholder="Id nomina">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sueldo</label>
                            <div class="col-sm-9">
                                <input type="text" name="mtxtSueldo" class="form-control" id="mtxtSueldo"
                                       placeholder="Sueldo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Fecha</label>
                            <div class="col-sm-9">
                                <input type="date" name="mtxtFechaRecibo" class="form-control" id="mtxtFechaRecibo"
                                       placeholder="Fecha">
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
<div class="modal fade" id="modalnuevaNomina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
