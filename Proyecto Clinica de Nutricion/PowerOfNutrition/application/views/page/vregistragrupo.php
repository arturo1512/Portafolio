<div class="row ">
    <div class="col-lg-offset-2 register-box-body col-lg-8  ">
        <div class="box box-info">

            <div class="register-logo">
                <b class="box-title">Nuevo Grupo de Usuarios</b>
            </div>

            <div class="box box-info">
                <form class="form-horizontal" action="nuevoGrupo" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="NombreGrupo" class="form-control" placeholder="Nombre Grupo"
                                       minlength="4" required>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textarea" class="col-sm-2 control-label">Descripcion del Grupo</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Enter ..."
                                      name="descGrupo" style="resize:none"></textarea>
                            <span class="glyphicon glyphicon-book form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10">
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-1">
                            <button type="submit" class="btn btn-block btn-primary btn-sm"
                                    style='width:90px; height:35px'>Register
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <?php
            echo "<script>$swal('$mensaje', '$mensaje2', '$simbolo')</script>";
            ?>
        </div>
    </div>
</div>