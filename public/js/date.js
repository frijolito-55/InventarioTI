$(document).ready(function() {
    $("#fechaPrestamo").datepicker({
        dateFormat: 'dd/mm/yy', // Formato de la fecha
        buttonText: '<i class="fa fa-calendar"></i>', // Ícono para el botón del calendario
        buttonImageOnly: true, // Mostrar solo el ícono del calendario en el botón
        theme: 'auto', // Adaptar el calendario al color del sistema
        onSelect: function(dateText) {
            // Puedes agregar aquí cualquier código adicional que quieras ejecutar al seleccionar una fecha
        },
        // Configuración regional en español
        regional: 'es'
    });
});
$(document).ready(function() {
    // Incluir el archivo de localización en español
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '&#x3C;Ant',
        nextText: 'Sig&#x3E;',
        currentText: 'Hoy',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
        'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
        'Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);

    $("#fechaDevolucion").datepicker({
        buttonText: '<i class="fa fa-calendar"></i>',
        buttonImageOnly: true,
        onSelect: function(dateText) {
            // Puedes agregar aquí cualquier código adicional que quieras ejecutar al seleccionar una fecha
        }
    });
});