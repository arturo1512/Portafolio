//Esta direccion va asia el controlador Cgrupo
$.post(baseurl + "Cgrupo/getGrupos", {
        "i_estado": 1
    },
    function (data) {
        var g = JSON.parse(data);
        $.each(g, function (i, item) {
            if (item.vc_Tipo == 'Administrador') {
            } else {
                $('#cboGrupo').append(' <option value="' + item.i_pk_Grupo + '">' + item.vc_Tipo + '</option>');
            }

        })
    });
//para capturar el id del CoboBox de Grupos
$('#cboGrupo').change(function () {
    $('#cboGrupo option:selected').each(function () {
        var id = $('#cboGrupo').val();
        swal(id);
        //aqui iria el metodo post o que se yo
        /*$.post(baseurl + "CPrincipal/guardarRegistro",
            {
                "idgrupo" : id
        });*/
        $('input[type=idgrup]').prop({'value': id});
    });
});
//Muestra los datos en la tabla
$.post(baseurl + "CMostrar/selectGrupo",
    function (data) {
        //alert(data);
        // alert('Probando');
        var gr = JSON.parse(data);
        $.each(gr, function (i, item) {
            if (item.i_estado == 1) {
                item.i_estado = 'Activo';
                var $color = 'green';
            } else {
                item.i_estado = 'Inactivo';
                var $color = 'red';
            }
            $('#tblGrupo').append(
                '<tr>' +
                '<td style="text-align: center">' + item.i_pk_Grupo + '</td>' +
                '<td>' + item.vc_Tipo + '</td>' +
                '<td>' + item.txt_descripcion + '</td>' +
                '<td style="text-align: center; color: ' + $color + '">' + item.i_estado + '</td>' +
                '<td style="width: 5%"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" ' +
                'data-toggle="modal" data-target="#modalEditGrupo" ' +
                'onclick="selGrupo(\'' + item.i_pk_Grupo + '\',\'' + item.vc_Tipo + '\',\'' + item.txt_descripcion + '\',\'' + item.i_estado + '\');"><i class="fa fa-fw fa-edit"></i></a></td>' +
                '</tr>'
            );
        });
    });
//rellena los campos con lo solicitado
selGrupo = function (idgrupo, nombre, descripcion, status) {
    $('#mhdnIdGrupo').val(idgrupo);
    $('#mtxtNombre').val(nombre);
    $('#mtxtDescripcion').val(descripcion);
    $('#cboStatus').val(status);
}
//Muestra la tabla de Usaurios
$.post(baseurl + "CMostrar/selectUsuario",
    function (data) {
        //alert(data);
        //alert('Probando');
        var em = JSON.parse(data);
        $.each(em, function (i, item) {
            $('#tblUsuarios').append(
                '<tr>' +
                '<td style="text-align: center">' + item.i_pk_num_emp + '</td>' +
                '<td>' + item.vc_Tipo + '</td>' +
                '<td>' + item.vc_user + '</td>' +
                '<td>' + item.vc_nombre + '</td>' +
                '<td>' + item.vc_apePatern + '</td>' +
                '<td>' + item.vc_apeMat + '</td>' +
                '<td>' + item.dt_nacimiento + '</td>' +
                '<td>' + item.vc_telefono + '</td>' +
                '<td>' + item.vc_mail + '</td>' +
                '<td>' + item.vc_calle + '</td>' +
                '<td>' + item.i_numero + '</td>' +
                '<td>' + item.i_cp + '</td>' +
                '<td>' + item.vc_colonia + '</td>' +
                '<td>' + item.vc_ciudad + '</td>' +
                '<td>' + item.vc_estado + '</td>' +
                '<td>' + item.vc_municipio + '</td>' +
                '</tr>'
            );
        });
        // $('#tblUsuarios').DataTable({
        //     'paging': true,
        //     //'lengthChange': false,
        //     //'searching': false,
        //     //'ordering': true,
        //     'info': true,
        //     //'autoWidth': false,
        //     'filter': true
        // });
    });

