$(document).ready(function(){
    obtenerDatos(); // Llenar los datos por defecto al cargar la página

    // Controladores de eventos para los selectores
    $('#hotelSelected, #departamentoSelected').change(function(){
        //
        obtenerDatosFiltrados(); // Llamar a la función para obtener datos filtrados
    });
});
function obtenerDatosFiltrados() {
    // Obtener valores seleccionados en los selectores
    var selectHotel = $('#hotelSelected').val();
    var selectDepa = $('#departamentoSelected').val();

     //Realizar solicitud AJAX con los parámetros de filtrado
    $.ajax({
        url: 'PrestamoTable',
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
function obtenerDatos() {
    $.ajax({
        url: 'PrestamoTable',
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
            <td>${equipo.fecha_prestamo}</td>
            <td>${equipo.fecha_devolucion}</td>
            <td>${equipo.equiposAsignados}</td>
            <td class="text-center">
                <a href="#" class="ver-prestamo" data-id="${equipo.id}">
                    <i class="fa-solid fa-eye fa-lg"></i>
                </a>
            </td>
        `);
        $('#contenido').append(fila);
    });
}
// Función para manejar el clic en el enlace "ver-prestamo"
$(document).on('click', '.ver-prestamo', function(e) {
    e.preventDefault(); // Evitar que el enlace siga su URL por defecto
    var idEquipo = $(this).data('id');
    // Redirigir a la vista Vistaprestamo
    window.location.href = urlVistaPrestamo + '?id=' + idEquipo;
});
