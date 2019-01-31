<!DOCTYPE html>
<html
<head>
    <title>

    </title>
</head>
<body>
<h1>Cargo Persona</h1>
<form action="<?php echo base_url(); ?>Cpersona/guardar" method="post">
    <!--    Entrada de nombre de la persona-->
    <tr>
        <td><label>Nombre</label></td>
        <td><input type="text" name="txtNom"></td>
    </tr>
    <!--    Entrada de apellido-->
    <tr>
        <td><label>Apellido paterno</label></td>
        <td><input type="text" name="txtApp"></td>
    </tr>
    <!--    Entrada de apellido materno-->
    <tr>
        <td><label>Apellido materno</label></td>
        <td><input type="text" name="txtApm"></td>
    </tr>
    <!--    Entrada de correo-->

    <!--    Entrada de telefon-->
    <tr>
        <td><label>Telefono</label></td>
        <td><input type="text" name="txtTel"></td>
    </tr>
    <!--    entrada de domicilio-->
    <tr>
        <td><label>Calle</label></td>
        <td><input type="text" name="txtCalle"></td>
    </tr>
    <tr>
        <td><label>Numero</label></td>
        <td><input type="text" name="txtNum"></td>
    </tr>
    <tr>
        <td><label>Colonia</label></td>
        <td><input type="text" name="txtCol"></td>
    </tr>
    <tr>
        <td><label>Municipio</label></td>
        <td><input type="text" name="txtMun"></td>
    </tr>
    <tr>
        <td><label>Ciudad</label></td>
        <td><input type="text" name="txtCiu"></td>
    </tr>
    <tr>
        <td><label>Codigo postal</label></td>
        <td><input type="text" name="txtCp"></td>
    </tr>

    <tr>
        <td><label>Usuario</label></td>
        <td><input type="text" name="txtUsu"></td>
    </tr>
    <tr>
        <td><label>Clave</label></td>
        <td><input type="password" name="txtClave"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Guardar"></td>
    </tr>

</form>
<a href="<?php echo base_url();?>Clogin">loguearse</a>

</body>

</html>
