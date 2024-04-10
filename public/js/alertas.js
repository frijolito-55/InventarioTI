//ALERTA DE ALIMINAR PRESTAMOS Y RESGUARDOS
$(document).ready(function(){
    $('.baja').click(function(e){
      e.preventDefault(); // Evita que el enlace se siga al hacer clic

      // Muestra una alerta de confirmación
      if(confirm('¿Estás seguro de querer eliminar este elemento?')){
        // Aquí puedes poner el código para eliminar el elemento
        alert('Elemento eliminado correctamente.');
      } else {
        alert('Operación cancelada.');
      }
    });
  });

  //ALERTA DE RECUPERACIÓN DE PRESTAMOS
  function confirmarRecuperacion() {
    if (confirm("¿Estás seguro de que quieres recuperar este elemento?")) {
      // Aquí puedes agregar la lógica para recuperar el elemento
      alert("Elemento recuperado correctamente");
    } else {
      alert("Operación cancelada");
    }
  }

  //ALERTA DE CERRA SESION
  function confirmarSalida() {
    if (confirm("¿Estás seguro de que quieres salir?")) {
      // Aquí puedes agregar la lógica para salir
      alert("Sesión cerrada correctamente");
    } else {
      // Otra acción si se cancela la salida
      alert("Operación cancelada");
    }
  }