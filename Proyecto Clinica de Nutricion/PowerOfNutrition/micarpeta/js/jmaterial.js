// $.post(baseurl + "CInventario/muetraMaterial",
//     function (data) {
//         //alert(data);
//         //alert('Probando');
//         var mat = JSON.parse(data);
//         $.each(mat, function (i, item) {
//             if (item.bol_status == 1) {
//                 item.bol_status = 'Activo';
//                 var $color = 'green';
//             } else {
//                 item.bol_status = 'Inactivo';
//                 var $color = 'red';
//             }
//             $('#tblMaterial tbody').append(
//                 '<tr>' +
//                 '<td>' + item.i_pk_material + '</td>' +
//                 '<td>' + item.vc_nombre + '</td>' +
//                 '<td>' + item.i_cantidadMat + '</td>' +
//                 '<td>' + item.txt_desc + '</td>' +
//                 '<td style="text-align: center; color: ' + $color + '">' + item.bol_status + '</td>' +
//                 '<td style="width: 5%"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" ' +
//                 'data-toggle="modal" data-target="#modalEditGrupo" ' +
//                 /*'onclick="selGrupo(\'' + item.i_pk_Grupo + '\',\'' + item.vc_Tipo + '\',\'' + item.txt_descripcion + '\',\'' + item.i_estado + '\');*/'><i class="fa fa-fw fa-edit"></i></a></td>' +
//                 '</tr>'
//             );
//         });
//         $('#tblMaterial').DataTable({
//             'paging': true,
//             //'lengthChange': false,
//             //'searching': false,
//             //'ordering': true,
//             'info': true,
//             //'autoWidth': false,
//             'filter': true
//         });
//     });

$('#tblMaterial').DataTable({
    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todo"]],
    'paging': true,
    //'lengthChange': false,
    //'searching': false,
    //'ordering': true,
    'info': true,
    'autoWidth': false,
    'filter': true,

    'ajax': {
        url: baseurl + "CInventario/muetraMaterial",
        type: "POST",
        dataType: 'json',
        dataSrc:{
            active:1
        }

        // "dataSrc": function (data) {
        //     return data;
        // }

    },
    'columns': [
        {data: 'i_pk_material'},
        {data: 'vc_nombre'},
        {data: 'i_cantidadMat'},
        {data: 'txt_desc'},
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
                        '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditMaterial" onClick="selMaterial(\'' + row.i_pk_material + '\',\'' + row.vc_nombre + '\',\'' + row.i_cantidadMat + '\',\'' + row.txt_desc + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="updMaterialStaus(' + row.i_pk_material + ',' + 0 + ')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Inactivo</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="delMaterialActivo(' + row.i_pk_material + ',' + 0 + ')"><i style="color:red;" class="glyphicon glyphicon-trash"></i> Eliminar</a></li>' +
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
                        '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditMaterial" onClick="selMaterial(\'' + row.i_pk_material + '\',\'' + row.vc_nombre + '\',\'' + row.i_cantidadMat + '\',\'' + row.txt_desc + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="updMaterialStaus(' + row.i_pk_material + ',' + 1 + ')"><i style="color:green;" class="glyphicon glyphicon-ok"></i> Activo</a></li>' +
                        '    </ul>' +
                        '</div>' +
                        '</span>';
                }
            }

        },
    ],
    "columnDefs": [
        {
            "targets": [4],
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
            "targets": [5],
            "visible" : false,
            "remder": function (data, type, row) {
                if (row.bool_activo == 0) {
                    row.child().hide();
                }
            }
        },
    ],
    "order": [[0, "asc"]],

});
//con esta funcion pasamos los paremtros a los text del modal.
selMaterial = function (i_pk_material, vc_nombre, i_cantidadMat, txt_desc) {
    $('#mhdnIdMaterial').val(i_pk_material);
    $('#mtxtNombre').val(vc_nombre);
    $('#mtxtCantidad').val(i_cantidadMat);
    $('#mtxtDescripcion').val(txt_desc);
    // $('#mcboOtro value(3)').prop('selected', true);
    //$('[name=mcboOtro]').val(7);
};
updMaterialStaus = function (i_pk_material, bol_status) {
    console.log(i_pk_material);
    console.log(bol_status);
    $.ajax({
        type: "POST",
        url: baseurl + "CInventario/updateStatusMaterial",
        data: {
            'inIdMaterial': i_pk_material,
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
delMaterialActivo = function (i_pk_material, bool_activo) {
    console.log(i_pk_material);
    console.log(bool_activo);
    $.ajax({
        type: "POST",
        url: baseurl + "CInventario/deleteActivoMaterial",
        data: {
            'postIdMaterial': i_pk_material,
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




