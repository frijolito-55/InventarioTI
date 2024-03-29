$(document).ready(function(){
    obtenerDatos(); // Llenar los datos por defecto al cargar la página

    // Controladores de eventos para los selectores
    $('#selectHotel, #selectTipo , #selectMarca, #selectModelo, #hotelDestino').change(function(){
        //
        obtenerDatosFiltrados(); // Llamar a la función para obtener datos filtrados
    });
});

function obtenerDatos() {
    $.ajax({
        url: 'DevolverDatos',
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
    var Destino = $('#hotelDestino').val();
    console.log(Destino);
     //Realizar solicitud AJAX con los parámetros de filtrado
    $.ajax({
        url: 'DevolverDatos',
        type: 'GET',
        dataType: 'json',
        data: {
            hotel: hotelSeleccionado,
            tipo: tipoSeleccionado,
            marca: marcaSeleccionado,
            modelos: modeloSeleccionado,
            destino: Destino
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
   
    var selectHotel = $('#selectHotel');
    
    $.each(data.hoteles, function(index, hotel) {
        selectHotel.append($('<option>', {
            value: hotel.nombreHotel,
            text: hotel.nombreHotel
        }));
    });

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
        var destino = $('#hotelDestino');
        $.each(data.hoteles, function(index, hotel) {
            destino.append($('<option>', {
                value: hotel.nombreHotel,
                text: hotel.nombreHotel
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
            <td>${equipo.nombreTipoEquipo}</td>
            <td>${equipo.nombremarca}</td>
            <td>${equipo.nombremodelo}</td>
            <td>${equipo.numeroSerie}</td>
            <td>${equipo.nombreHotel}</td>
            <td>${equipo.destino}</td>
            <td>
            <i class="fa-solid fa-circle-check fa-lg" type="submit"></i>            
            </td>
        `);
        $('#contenido').append(fila);
    });
}
