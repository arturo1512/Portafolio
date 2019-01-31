//

$('#tblNomina').DataTable({
    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todo"]],
    'paging': true,
    //'lengthChange': false,
    //'searching': false,
    //'ordering': true,
    'info': true,
    'autoWidth': false,
    'filter': true,

    'ajax': {
        url: baseurl + "Cnomina/muestraNomina",
        type: "POST",
        dataType: 'json',
        dataSrc: {
            active: 1
        }

    },
    'columns': [
        {data: 'i_pk_id_nomina'},
        {data: 'i_fk_num_emp'},
        {data: 'i_fk_idNomina'},
        {data: 'd_sueldo'},
        {data: 'dt_fechaRecibo'},
        {data: 'bol_status'},
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
                        '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalNomina" onClick="selFactura(\'' + row.i_pk_id_nomina + '\',\'' + row.i_fk_num_emp + '\',\'' + row.i_fk_idNomina + '\',\'' + row.d_sueldo + '\',\'' + row.dt_fechaRecibo + '\',\'' + row.bol_status + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="updCitaStaus(' + row.i_pk_id_nomina + ',' + 0 + ')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Inactiva</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="delCitaActivo(' + row.i_pk_id_nomina + ',' + 0 + ')"><i style="color:red;" class="glyphicon glyphicon-trash"></i> Eliminar</a></li>' +
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
                        '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditFactura" onClick="selFactura(\'' + row.i_pk_id_nomina + '\',\'' + row.i_fk_num_emp + '\',\'' + row.i_fk_idNomina + '\',\'' + row.d_sueldo + '\',\'' + row.dt_fechaRecibo + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="updCitaStaus(' + row.i_pk_id_nomina + ',' + 1 + ')"><i style="color:green;" class="glyphicon glyphicon-ok"></i> Activo</a></li>' +
                        '    </ul>' +
                        '</div>' +
                        '</span>';

                }
            }

        }
    ],
    "columnDefs": [
        {
            "targets": [5],
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
            "targets": [4],
            //"visible": false,
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
selFactura = function (i_pk_id_nomina, i_fk_num_emp, i_fk_idNomina, d_sueldo, dt_fechaRecibo) {
    $('#mhdnIdNomina').val(i_pk_id_nomina);
    $('#mtxtTipo2').val(i_fk_num_emp);
    $('#mtxtTipo3').val(i_fk_idNomina);
    $('#mtxtSueldo').val(d_sueldo);
    $('#mtxtFechaRecibo').val(dt_fechaRecibo);

    // $('#mcboOtro value(3)').prop('selected', true);
    //$('[name=mcboOtro]').val(7);
};
updCitaStaus = function (i_pk_id_nomina, bol_status) {
    console.log(i_pk_id_nomina);
    console.log(bol_status);
    $.ajax({
        type: "POST",
        url: baseurl + "Cnomina/updateStatusNomina",
        data: {
            'inIdFactura': i_pk_id_nomina,
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
delCitaActivo = function (i_pk_id_nomina, bool_activo) {
    console.log(i_pk_id_nomina);
    console.log(bool_activo);
    $.ajax({
        type: "POST",
        url: baseurl + "CListaCita/deleteActivaCita",
        data: {
            'postIdFactura': i_pk_id_nomina,
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




