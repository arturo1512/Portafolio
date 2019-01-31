<body class="hold-transition skin-blue sidebar-mini" xmlns="http://www.w3.org/1999/html">


<section class="content-header">
    <h1>
        FACTURADOR
        <small>
            <?php
            date_default_timezone_set('America/Mexico_City');
            echo date('d/m/Y H:i:s');
            ?>
        </small>

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
                        <h1 class="box-title">Crear Factura</h1>


                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardaFactura" id="guardaFactura" method="post"
                              action="guardaFactura">
                            <h1>
                                <small>RFC</small>
                            </h1>
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user-plus"
                                                                   aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="RFC" id="RFC"
                                       placeholder="RFC"
                                       minlength="4" required>
                            </div>
                            <!--aqui para el salto de linea entre los campos a llenar use <h1></h1> para tomar en consideracion de que esto
                            se esta utilizando con este motivo-->

                            <h1>
                                <small>Nombre</small>
                            </h1>
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="Nombre" id="Nombre"
                                       placeholder="Nombre"
                                       minlength="2" required>
                            </div>

                            <!--aqui incluyo el apllido materno que no es mas que una copia del apellido paterno-->

                            <h1>
                                <small>Apellido Paterno</small>
                            </h1>

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="ApellidoP" name="ApellidoP"
                                       placeholder="Apellido Materno"
                                       minlength="3" required>
                            </div>
                            <h1>
                                <small>Apellido Materno</small>
                            </h1>

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-female" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="ApellidoM" name="ApellidoM"
                                       placeholder="Apellido Materno"
                                       minlength="3" required>
                            </div>

                            <!--calle-->

                            <h1>
                                <small>Calle</small>
                            </h1>

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-road" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="Calle" name="Calle"
                                       placeholder="Calle"
                                       minlength="3" required>
                            </div>

                            <!--Numero-->
                            <h1>
                                <small>Numero</small>
                            </h1>

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-hashtag" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="Numero" name="Numero"
                                       placeholder="Numero"
                                       minlength="1" required>
                            </div>
                            <!--CodigoPostal-->
                            <h1>
                                <small>Codigo Postal</small>
                            </h1>

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-hashtag" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="CodigoPostal" name="CodigoPostal"
                                       placeholder="Codigo Postal"
                                       minlength="3" required>
                            </div>
                            <!--                            Ciudad-->
                            <h1>
                                <small>Ciudad</small>
                            </h1>
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="Ciudad" name="Ciudad"
                                       placeholder="Ciudad"
                                       minlength="3" required>
                            </div>
                            <!--Estado-->
                            <h1>
                                <small>Estado</small>
                            </h1>

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="Estado" name="Estado"
                                       placeholder="Estado"
                                       minlength="3" required>
                            </div>
                            <!--mail-->
                            <h1>
                                <small>Correo</small>
                            </h1>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <input type="email" class="form-control" id="correo"
                                       name="correo" placeholder="Correo">
                            </div>
                            <!--Edad aqui esta Telefono-->

                            <h1>
                                <small>Telefono</small>
                            </h1>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="Telefono" name="Telefono"
                                       placeholder="Telefono"
                                       minlength="2" required>
                            </div>
                            <h1>
                                <small>Numero de ticket</small>
                            </h1>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="ticket" name="ticket"
                                       placeholder="ticket"
                                       minlength="1" required>
                            </div>



                    </div>

                </div>

                <div class="box-footer">
                    <input type="hidden" name="agregar-admin" value="1">
                    <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
                </form>
            </div>
    </div>
</div>
</body>
