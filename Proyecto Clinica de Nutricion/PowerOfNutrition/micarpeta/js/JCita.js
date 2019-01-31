//

$('#tblCita').DataTable({
    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todo"]],
    'paging': true,
    //'lengthChange': false,
    //'searching': false,
    //'ordering': true,
    'info': true,
    'autoWidth': false,
    'filter': true,

    'ajax': {
        url: baseurl + "CListaCita/muestraCita",
        type: "POST",
        dataType: 'json',
        dataSrc: {
            active: 1
        }

    },
    'columns': [
        {data: 'i_pk_id_cita'},
        {data: 'fk_idCliente'},
        {data: 'vc_tipo'},
        {data: 'dt_fechaInicio'},
        {data: 'dt_fechaFinal'},
        {data: 'dt_hora'},
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
                        '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditcita" onClick="selCita(\'' + row.i_pk_id_cita + '\',\'' + row.fk_idCliente + '\',\'' + row.vc_tipo + '\',\'' + row.dt_fechaInicio + '\',\'' + row.dt_fechaFinal + '\',\'' + row.dt_hora + '\',\'' + row.bol_status + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="updCitaStaus(' + row.i_pk_id_cita + ',' + 0 + ')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Inactiva</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="delCitaActivo(' + row.i_pk_id_cita + ',' + 0 + ')"><i style="color:red;" class="glyphicon glyphicon-trash"></i> Eliminar</a></li>' +
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
                        '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditcita" onClick="selCita(\'' + row.i_pk_id_cita + '\',\'' + row.vc_tipo + '\',\'' + row.dt_fechaInicio + '\',\'' + row.dt_fechaFinal + '\',\'' + row.dt_hora + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                        '    <li><a href="#" title="Inactivo"  onClick="updCitaStaus(' + row.i_pk_id_cita + ',' + 1 + ')"><i style="color:green;" class="glyphicon glyphicon-ok"></i> Activo</a></li>' +
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
            "targets": [5],
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
selCita = function (i_pk_id_cita,fk_idCliente, vc_tipo, dt_fechaInicio, dt_fechaFinal, dt_hora) {
    $('#mhdnIdCita').val(i_pk_id_cita);
    $('#mtxtTipo').val(fk_idCliente);
    $('#mtxtTipo').val(vc_tipo);

    $('#mtxtFechaInicio').val(dt_fechaInicio);
    $('#mtxtFechaFinal').val(dt_fechaFinal);
    $('#mtxtHora').val(dt_hora);
    // $('#mcboOtro value(3)').prop('selected', true);
    //$('[name=mcboOtro]').val(7);
};
updCitaStaus = function (i_pk_id_cita, bol_status) {
    console.log(i_pk_id_cita);
    console.log(bol_status);
    $.ajax({
        type: "POST",
        url: baseurl + "CListaCita/updateStatusCita",
        data: {
            'inIdCita': i_pk_id_cita,
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
delCitaActivo = function (i_pk_id_cita, bool_activo) {
    console.log(i_pk_id_cita);
    console.log(bool_activo);
    $.ajax({
        type: "POST",
        url: baseurl + "CListaCita/deleteActivaCita",
        data: {
            'postIdCita': i_pk_id_cita,
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




