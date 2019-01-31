<!DOCTYPE html>
<html>
<header>
    <title></title>
</header>
<body>
<form action="<?php echo base_url(); ?>Clogin/ingresar" method="POST">
    <table>
        <tr>
            <td><label>Usuario</label></td>
            <td><input type="text" name="txtUsu"> </input></td>
        </tr>
        <tr>
            <td><label>Contraseña</label></td>
            <td><input type="password" name="txtClave"> </input></td>
        </tr>
        <tr>
            <td><input type="submit" value="Ingresar"> </input></td>
        </tr>
    </table>

</form>
<?php echo $mensaje; ?>
</body>
</html>