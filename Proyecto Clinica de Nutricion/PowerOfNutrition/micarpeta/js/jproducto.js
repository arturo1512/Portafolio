$('#tblProducto').DataTable({
    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todo"]],
    'paging': true,
    //'lengthChange': false,
    //'searching': false,
    //'ordering': true,
    'info': true,
    'autoWidth': false,
    'filter': true,

    'ajax': {
        url: baseurl + "CProducto/muetraProducto",
        type: "POST",
        dataType: 'json',
        dataSrc: {
            active: 1
        }

        // "dataSrc": function (data) {
        //     return data;
        // }

    },
    'columns': [
        {data: 'i_pk_codigoBarras'},
        {data: 'vc_nombre'},
        {data: 'f_precio'},
        {data: 'vc_presentacion'},
        {data: 'txt_desc'},
        {data: 'dt_caducidad'},
        {data: 'bol_status'},
        {data: 'bool_activo'},
        {
            "orderable": true,
            render: function (data, type, row) {
                if (row.bol_status == 1) {
                    return '<span class="pull-right">' +
                        '<div class="dropdown">' +
                        '  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                        '    Acciones' +
                        '  <span class="caret"></span>' +
                        '  </button>' +
                        '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                        '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditProducto" onClick="selProducto(\'' + row.i_pk_codigoBarras + '\',\'' + row.vc_nombre + '\',\'' + row.f_precio + '\',\'' + row.vc_presentacion + '\',\'' + row.txt_desc + '\',\'' + row.dt_caducidad + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="updProductoStaus(' + row.i_pk_codigoBarras + ',' + 0 + ')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Inactivo</a></li>' +
                        '    <li><a href="#" title="Eliminar"  onClick="delProductoActivo(' + row.i_pk_codigoBarras + ',' + 0 + ')"><i style="color:red;" class="glyphicon glyphicon-trash"></i> Eliminar</a></li>' +
                        '    </ul>' +
                        '</div>' +
                        '</span>';
                } else {
                    return '<span class="pull-right">' +
                        '<div class="dropdown">' +
                        '  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                        '    Acciones' +
                        '  <span class="caret"></span>' +
                        '  </button>' +
                        '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                        '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditProducto" onClick="selProducto(\'' + row.i_pk_codigoBarras + '\',\'' + row.vc_nombre + '\',\'' + row.f_precio + '\',\'' + row.vc_presentacion + '\',\'' + row.txt_desc + '\',\'' + row.dt_caducidad + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="updProductoStaus(' + row.i_pk_codigoBarras + ',' + 1 + ')"><i style="color:green;" class="glyphicon glyphicon-ok"></i> Activo</a></li>' +
                        '    </ul>' +
                        '</div>' +
                        '</span>';
                }
            }

        },
    ],
    "columnDefs": [
        {
            "targets": [6],
            "data": "bol_status",
            "render": function (data, type, row) {
                if (data == 0) {
                    return "<span style='text-align: center' class='label label-danger center-block'>Inactivo</span>";
                } else {
                    return "<span style='text-align: center' class='label label-success center-block'>Activo</span>";
                }
            }
        },
        {
            "targets": [7],
            "visible": false,
            // "remder": function (data, type, row) {
            //     if (row.bool_activo == 0) {
            //         row.child().hide();
            //     }
            // }
        },
    ],
    "order": [[0, "asc"]],

});
//con esta funcion pasamos los paremtros a los text del modal.
selProducto = function (i_pk_codigoBarras, vc_nombre, f_precio, vc_presentacion, txt_desc, dt_caducidad) {
    $('#mhdnIdProducto').val(i_pk_codigoBarras);
    $('#mtxtNombre').val(vc_nombre);
    $('#mtxtPrecio').val(f_precio);
    $('#mtxtPrecentacion').val(vc_presentacion);
    $('#mtxtDescripcion').val(txt_desc);
    $('#datepicker').val(dt_caducidad);
    // $('#mcboOtro value(3)').prop('selected', true);
    //$('[name=mcboOtro]').val(7);
};
updProductoStaus = function (i_pk_codigoBarras, bol_status) {
    console.log(i_pk_codigoBarras);
    console.log(bol_status);
    $.ajax({
        type: "POST",
        url: baseurl + "CProducto/updateStatusProducto",
        data: {
            'inIdProducto': i_pk_codigoBarras,
            'inBolStatus': bol_status
        },
        //headers: 'content/json',
        success: function (data) {
            //swal("Los Campos fueron agregados con exito");
            //swal('', '', 'success');
            location.reload(true)
        },
        error: function (err) {
            console.log(err);
        }
    });
};
delProductoActivo = function (i_pk_codigoBarras, bool_activo) {
    console.log(i_pk_codigoBarras);
    console.log(bool_activo);
    $.ajax({
        type: "POST",
        url: baseurl + "CInventario/deleteActivoProducto",
        data: {
            'postIdProducto': i_pk_codigoBarras,
            'postBoolActivo': bool_activo
        },
        //headers: 'content/json',
        success: function (data) {
            //swal("Los Campos fueron agregados con exito");
            //swal('', '', 'success');
            location.reload(true)
        },
        error: function (err) {
            console.log(err);
        }
    });
};




