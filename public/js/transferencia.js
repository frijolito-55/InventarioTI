$(document).ready(function(){
    obtenerDatos(); // Llenar los datos por defecto al cargar la página

    // Controladores de eventos para los selectores
    $('#selectHotel, #selectTipo , #selectMarca, #selectModelo').change(function(){
        //
        obtenerDatosFiltrados(); // Llamar a la función para obtener datos filtrados
    });
    //$('#Nserie').on('input', function() {
      //  buscarSerie(); // Llamar a la función buscarSerie() cada vez que haya un cambio en el input
    //});
});

function obtenerDatos() {
    $.ajax({
        url: 'TansferenciaFiltrar',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            llenarSelectores(data); // Llenar selectores con datos por defecto
            llenarTabla(data.equipos); // Llenar tabla con datos por defecto
        },
        error: function(xhr, status, error) {
            console.error('Error al obtener los datos:', error);
        }
    });
}

function obtenerDatosFiltrados() {
    // Obtener valores seleccionados en los selectores
    var hotelSeleccionado = $('#selectHotel').val();
    var tipoSeleccionado = $('#selectTipo').val();
    var marcaSeleccionado = $('#selectMarca').val();
    var modeloSeleccionado = $('#selectModelo').val();
    var estadodes = $('#selectEstado').val();
    //var buscarNserie = $('#Nserie').val();
    
     //Realizar solicitud AJAX con los parámetros de filtrado
    $.ajax({
        url: 'filtrar',
        type: 'GET',
        dataType: 'json',
        data: {
            hotel: hotelSeleccionado,
            tipo: tipoSeleccionado,
            marca: marcaSeleccionado,
            modelos: modeloSeleccionado,
            estado: estadodes
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
    var selectHotel = $('#selectHotel');
    
    $.each(data.hoteles, function(index, hotel) {
        selectHotel.append($('<option>', {
            value: hotel.nombreHotel,
            text: hotel.nombreHotel
        }));
    });

    // Llenar selector de tipos de equipo
    var selectTipo = $('#selectTipo');
    
    $.each(data.tipoEquipos, function(index, tipo) {
        selectTipo.append($('<option>', {
            value: tipo.nombreTipoEquipo,
            text: tipo.nombreTipoEquipo
        }));
    });

    var selectMarca = $('#selectMarca');
        $.each(data.marcas, function(index, marca) {
            selectMarca.append($('<option>', {
                value: marca.nombremarca,
                text: marca.nombremarca
            }));
        });

        var selectModelo = $('#selectModelo');
        $.each(data.modelos, function(index, modelo) {
            selectModelo.append($('<option>', {
                value: modelo.nombremodelo,
                text: modelo.nombremodelo
            }));
        });
        var selectEstatus = $('#selectEstado');
        $.each(data.estados, function(index, estado) {
            selectEstatus.append($('<option>', {
                value: estado.descripcion,
                text: estado.descripcion
            }));
        });
}
function buscarSerie(){
    var buscarNserie = $('#Nserie').val();
    $.ajax({
        url: 'filtrar',
        type: 'GET',
        dataType: 'json',
        data: {
            
        },
        
        success: function(data) {
            llenarTabla(data.equipos); // Llenar tabla con datos filtrados
        },
        error: function(xhr, status, error) {
            console.error('Error al obtener los datos filtrados:', error);
        }
    });

}


function llenarTabla(equipos) {
    // Limpiar tabla antes de agregar nuevos datos
    $('#contenido').empty();

    // Recorrer los datos y construir filas de tabla
    $.each(equipos, function(index, equipo) {
        var fila = $('<tr>');
        fila.html(`
            <td>${equipo.nombreHotel}</td>
            <td>${equipo.nombreTipoEquipo}</td>
            <td>${equipo.nombremarca}</td>
            <td>${equipo.nombremodelo}</td>
            <td>${equipo.numeroSerie}</td>
            <td>Click to edit</td>
        `);
        $('#contenido').append(fila);
    });
}
