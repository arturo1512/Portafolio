<div class="row ">
   <div class="col-lg-offset-2 register-box-body col-lg-8  ">
      <div class="box box-info">

         <div class="register-logo">
            <b class="box-title">Registra Usuario</b>
         </div>

         <div class="box box-info">
            <form class="form-horizontal" action="guardarRegistro" method="POST">
               <div class="box-body">
                  <div class="form-group">
                     <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                     <div class="col-sm-10">
                        <input type="text" name="Nombre" class="form-control" placeholder="Nombre" minlength="4"
                               required>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="aPaterno" class="col-sm-2 control-label">Appellido Paterno</label>
                     <div class="col-sm-10">
                        <input type="text" name="aPaterno" class="form-control" placeholder="Apellido Paterno"
                               minlength="4" required>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="aMaterno" class="col-sm-2 control-label">Appellido Materno</label>
                     <div class="col-sm-10">
                        <input type="text" name="aMaterno" class="form-control" placeholder="Apellido Matero"
                               minlength="4">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputTelefono" class="col-sm-2 control-label">Telefono</label>
                     <div class="col-sm-10">
                        <input type="tel" name="telefono" class="form-control" placeholder="Telefono" required>
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3"
                               placeholder="Email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputFecha" class="col-sm-2 control-label">Fecha Nac.</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="datepicker" name="fechaNac"
                               placeholder="Fecha Nacimiento">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                     </div>
                  </div>
                  <!--TABLA Direccion-->
                  <hr>
                  <div class="box-header">
                     <h3 class="box-title">Direccion</h3>
                  </div>
                  <div class="form-group">
                     <label for="inputCalle" class="col-sm-2 control-label">Calle</label>
                     <div class="col-sm-10">
                        <input type="text" name="calle" class="form-control" placeholder="Calle" required>
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputNumero" class="col-sm-2 control-label">Numero</label>
                     <div class="col-sm-10">
                        <input type="text" name="numero" class="form-control" placeholder="Numero" required>
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputCP" class="col-sm-2 control-label">C.P</label>
                     <div class="col-sm-10">
                        <input type="text" name="cp" class="form-control" placeholder="C.P" required>
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputColonia" class="col-sm-2 control-label">Colonia</label>
                     <div class="col-sm-10">
                        <input type="text" name="colonia" class="form-control" placeholder="Colonia">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputCiudad" class="col-sm-2 control-label">Ciudad</label>
                     <div class="col-sm-10">
                        <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputEstado" class="col-sm-2 control-label">Estado</label>
                     <div class="col-sm-10">
                        <input type="text" name="estado" class="form-control" placeholder="Estado">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputMunicipio" class="col-sm-2 control-label">Municipio</label>
                     <div class="col-sm-10">
                        <input type="text" name="municipio" class="form-control" placeholder="Municipio">
                        <span class="glyphicon glyphicon-book form-control-feedback"></span>
                     </div>
                  </div>
                  <!--TABLA Grupo-->
                  <hr>
                  <div class="box-header">
                     <h3 class="box-title">Grupo</h3>
                  </div>
                  <div class="form-group">
                     <label for="inputMunicipio" class="col-sm-2 control-label"></label>
                     <div class="col-sm-10">
                        <select id="cboGrupo" class="form-control select2" style="width: 100%;" name="grupo">
                           <option value="">::Elija</option>
                        </select>
                     </div>
                  </div>
               </div>

               <!--TABLA USUARIO-->
               <hr>
               <div class="box-header">
                  <h3 class="box-title">Nom Usuario</h3>
               </div>
               <div class="form-group">
                  <label for="inputUsuario" class="col-sm-2 control-label">Usuario</label>
                  <div class="col-sm-10">
                     <input type="text" name="usuario" class="form-control"
                            placeholder="Nombre de Usuario" required>
                     <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                     <input type="password" name="password" class="form-control" placeholder="Password" required>
                     <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-8">
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                  </div>
                  <!-- /.col -->
               </div>
               <!--<span id="resultadogrup"></span>-->
               <input type="idgrup" name="idgrupo" style="display:none">
            </form>
            <?php
            echo "<script>$swal('$mensaje','$mensaje2','$simbolo')</script>";
            ?>
         </div>
         <!--<a href="login.html" class="text-center">I already have a membership</a>-->
      </div>
      <!-- /.form-box -->
   </div>
</div>

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>

