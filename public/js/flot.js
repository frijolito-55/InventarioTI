$(document).ready(function () {
    obtenerDatos(); // Llenar los datos por defecto al cargar la página

    // Controladores de eventos para los selectores
    $('#hotelSelected, #departamentoSelected').change(function () {
        //
        //  obtenerDatosFiltrados(); // Llamar a la función para obtener datos filtrados
    });
});

function llenarSelectores(data) {
    // Llenar selector de hoteles
    var selectHotel = $('#hotelSelected');

    $.each(data.hoteles, function (index, hotel) {
        selectHotel.append($('<option>', {
            value: hotel.nombreTipoEquipo,
            text: hotel.nombreTipoEquipo
        }));
    });

    // Llenar selector de tipos de equipo
    var selectDepa = $('#departamentoSelected');

    $.each(data.departamentos, function (index, depa) {
        selectDepa.append($('<option>', {
            value: depa.nombredepartamento,
            text: depa.nombredepartamento
        }));
    });
}

function obtenerDatos() {
    $.ajax({
        url: 'xd',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            //llenarSelectores(data); // Llenar selectores con datos por defecto
            llenarTabla(data); // Llenar tabla con datos por defecto
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener los datos:', error);
        }
    });
}
function llenarTabla(equipos) {
    // Limpiar tabla antes de agregar nuevos datos
    $('#contenido').empty();

    // Recorrer los datos y construir filas de tabla
    $.each(equipos, function (index, equipo) {
        var fila = $('<tr>');
        fila.html(`
            <td>${equipo.nombreTipoEquipo}</td>
            <td>${equipo.nombremarca}</td>
            <td>${equipo.nombremodelo}</td>
            <td>${equipo.numeroSerie}</td>
            <td class="text-center">
                <button type="button" class="btn btn-outline-secondary" onclick="AsignarResguardo()">
                    Asignar
                </button>
            </td>
        `);
        $('#contenido').append(fila);
    });
}