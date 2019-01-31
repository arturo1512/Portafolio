<body class="hold-transition skin-blue sidebar-mini" xmlns="http://www.w3.org/1999/html">


<section class="content-header">
    <h1>
        GESTOR DE CITAS

        <small><?php
            date_default_timezone_set('America/Mexico_City');
            echo date('d/m/Y H:i:s');
            ?> Llenado de registro de cita</small>

    </h1>

</section>
<div class="row">
    <div class="col-md-8">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div>
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Crear Cita</h1>


                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardad_registro" id="guardad_registro" method="post"
                              action="guardaCita">
                            <h1>
                                <small>Nombre paciente</small>
                            </h1>
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user-plus"
                                                                   aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                       placeholder="Nombre Paciente"
                                       minlength="4" required>
                            </div>
                            <!--aqui para el salto de linea entre los campos a llenar use <h1></h1> para tomar en consideracion de que esto
                            se esta utilizando con este motivo-->

                            <h1>
                                <small>Apellido paterno</small>
                            </h1>
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="Apellidop" id="Apellidop"
                                       placeholder="Apellido paterno"
                                       minlength="4" required>
                            </div>

                            <!--aqui incluyo el apllido materno que no es mas que una copia del apellido paterno-->

                            <h1>
                                <small>Apellido materno</small>
                            </h1>

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-female" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="ApellidoM" name="ApellidoM"
                                       placeholder="Apellido Materno"
                                       minlength="4" required>
                            </div>

                            <!--Edad aqui esta el llenado de la edad-->


                            <h1>
                                <small>Edad</small>
                            </h1>
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="Edad" name="Edad" placeholder="Edad +"
                                       minlength="1" required>
                            </div>

                            <!--aqui agrego el peso de la persona-->

                            <h1>
                                <small>Peso</small>
                            </h1>
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-anchor" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="Peso" name="Peso" placeholder="Peso"
                                       minlength="2" required>
                            </div>

                            <!-- telefono-->


                            <h1>
                                <small>Telefono</small>
                            </h1>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input type="tel" class="form-control" id="Telefono" name="Telefono"
                                       placeholder="Telefono" required
                                       minlength="10">

                            </div>

                            <!--Correo electronico-->

                            <h1>
                                <small>Correo</small>
                            </h1>
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <input type="email" class="form-control" id="Correo"
                                       name="correo" placeholder="Correo">
                            </div>


                            <div class="box-header">

                                <h1>

                                    <small><h3>Detalle cita:</h3></small>
                                </h1>

                            </div>
                            <div class="box-body">
                                <!-- Date -->
                                <div class="form-group">
                                    <h1>
                                        <small style="color: black">Fecha inicio</small>
                                    </h1>
                                    <!--aqui agrego la fecha inicial-->
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="date"
                                               name="Fecha_inicio">
                                    </div>
                                </div>

                                <!--esta es el area de la fecha-->

                                <div class="form-group">
                                    <h1>
                                        <small style="color: black">Fecha final</small>
                                    </h1>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="date2"
                                               name="Fecha_final">
                                    </div>


                                </div>
                                <div class="form-group">
                                    <h1>
                                        <small style="color: black">Tipo cita</small>
                                    </h1>

                                    <select name="categoria_evento" class="form-control ">
                                        <option value="none" selected="" disabled="">-Selecciona una Opcion-</option>
                                        <!-- --><?php
                                        /*                                        foreach ($datos as $i => $categoria){

                                                                                    echo '<option values="',$i,'">',$categoria,'</option>';
                                                                                }

                                                                                */ ?>
                                        <!--aqui mediante un foreach imprimo los datos en form-control-->
                                        <?php foreach ($catalogoconsulta as $catalogoconsulta): ?>
                                            <option value="<?php echo $catalogoconsulta->idcatCitas ?>"><?php echo $catalogoconsulta->vc_consulta ?></option>
                                        <?php endforeach; ?>

                                    </select>


                                </div>


                            </div>
                            <div class="bootstrap-timepicker">
                                <div class="form-group">

                                    <label>hora</label>

                                    <div class="input-group">
                                        <input type="time" class="form-control timepicker"id="hora" name="hora">

                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>
                            <!--dipsdd-->

                            <!-- /.box-body -->

                            <!-- /.box-body -->

                            <div class="box-footer">
                                <input type="hidden" name="agregar-admin" value="1">
                                <button type="submit" class="btn btn-primary">Añadir</button>
                            </div>
                        </form>
                        <div class="box"></div>
                    </div>
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
</div>


<!-- /.content-wrapper -->
</body>
