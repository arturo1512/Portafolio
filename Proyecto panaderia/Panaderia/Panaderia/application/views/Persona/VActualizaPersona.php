<!DOCTYPE html>
<head>
    <title></title>
</head>
<form action="<?php echo base_url();?>Cpersona/actualizarDatos" method="post">
    <!--la variable s_usuario es traida desde el archivo Mlogin y es la siguiente: $this->session->set_userdata($s_usuario);-->
    <?php echo "Usuario: " . $this->session->userdata('sesion_usuario'); ?>
    <h3>Actualizar datos</h3>
    <input type="text" name="txtNom" placeholder="Nombre"></<input><br><br>
<input type="text" name="txtApp" placeholder="Apellido paterno"></<input><br><br>
<input type="text" name="txtApm" placeholder="Apellido materno"></<input><br><br>
<input type="submit" value="Actualiza"></<input>
</form>

</body>
</html>