$(document).ready(function () {
    obtenerDatos(); // Llenar los datos por defecto al cargar la página

    // Controladores de eventos para los selectores
    $('#selectTipo, #selectMarca, #selectModelo').change(function () {
        //
          obtenerDatosFiltrados(); // Llamar a la función para obtener datos filtrados
    });
});

function obtenerDatosFiltrados() {
    // Obtener valores seleccionados en los selectores
    var selectTipo = $('#selectTipo').val();
    var selectMarca = $('#selectMarca').val();
    var selectModelo = $('#selectModelo').val();

     //Realizar solicitud AJAX con los parámetros de filtrado
    $.ajax({
        url: 'xd',
        type: 'GET',
        dataType: 'json',
        data: {
            tipo: selectTipo,
            marca: selectMarca,
            modelos: selectModelo
        },
        
        success: function(data) {
            llenarTabla(data.equipos); // Llenar tabla con datos filtrados
        },
        error: function(xhr, status, error) {
            console.error('Error al obtener los datos filtrados:', error);
        }
    });
}

function llenarSelectores(data) {
    // Llenar selector de hoteles
    var selectTipo = $('#selectTipo');

    $.each(data.tipoEquipos, function (index, tipo) {
        selectTipo.append($('<option>', {
            value: tipo.nombreTipoEquipo,
            text: tipo.nombreTipoEquipo
        }));
    });
    var selectMarca = $('#selectMarca');

    $.each(data.marcas, function (index, tipo) {
        selectMarca.append($('<option>', {
            value: tipo.nombremarca,
            text: tipo.nombremarca
        }));
    });
    var selectModelo = $('#selectModelo');

    $.each(data.modelos, function (index, tipo) {
        selectModelo.append($('<option>', {
            value: tipo.nombremodelo,
            text: tipo.nombremodelo
        }));
    });

}

function obtenerDatos() {
    $.ajax({
        url: 'xd',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            llenarSelectores(data); // Llenar selectores con datos por defecto
            llenarTabla(data.equipos); // Llenar tabla con datos por defecto
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