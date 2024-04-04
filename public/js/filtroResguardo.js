$(document).ready(function(){
    obtenerDatos(); // Llenar los datos por defecto al cargar la página

    // Controladores de eventos para los selectores
    $('#hotelSelected, #departamentoSelected').change(function(){
        //
        obtenerDatosFiltrados(); // Llamar a la función para obtener datos filtrados
    });
});
/*$('#contenido').on('click', '.ver-resguardo', function(e) {
    e.preventDefault();
    //var idEquipo = $(this).data('id');
    var rutaVistaResguardo = $(this).data('ruta-vista-resguardo');
    window.Location.href = rutaVistaResguardo;
});*/
function obtenerDatos() {
    $.ajax({
        url: 'mostrarDatosResguardo',
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
    var selectHotel = $('#selectHotel').val();
    var selectDepa = $('#departamentoSelected').val();

     //Realizar solicitud AJAX con los parámetros de filtrado
    $.ajax({
        url: 'filtrar',
        type: 'GET',
        dataType: 'json',
        data: {
            hotel: selectHotel,
            depa: selectDepa,
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
    var selectHotel = $('#hotelSelected');
    
    $.each(data.hoteles, function(index, hotel) {
        selectHotel.append($('<option>', {
            value: hotel.nombreHotel,
            text: hotel.nombreHotel
        }));
    });

    // Llenar selector de tipos de equipo
    var selectDepa = $('#departamentoSelected');
    
    $.each(data.departamentos, function(index, depa) {
        selectDepa.append($('<option>', {
            value: depa.nombredepartamento,
            text: depa.nombredepartamento
        }));
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
            <td>${equipo.nombredepartamento}</td>
            <td>${equipo.nombreCompleto}</td>
            <td>${equipo.nombreEquipo}</td>
            <td>2</td>
            <td class="text-center">
                <a href="#" class="ver-resguardo" data-id="${equipo.id_resguardo}">
                    <i class="fa-solid fa-eye fa-lg"></i>
                </a>
            </td>
        `);
        $('#contenido').append(fila);
    });
}

// Función para manejar el clic en el enlace "ver-resguardo"
$(document).on('click', '.ver-resguardo', function(e) {
    e.preventDefault(); // Evitar que el enlace siga su URL por defecto
    var idEquipo = $(this).data('id');
    // Redirigir a la vista VistaResguardo
    window.location.href = urlVistaResguardo + '?id=' + idEquipo;
});

