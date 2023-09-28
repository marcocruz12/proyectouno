$(document).ready(function() {
    $('#btnEnviarCliente').click(function () {
      $('#nombre_modal').val('');
      $('#apaterno_modal').val('');
      $('#modalAgregarCliente').modal('show');
    });
  
    $('#btnGuardarCliente').click(function (event) {
      event.preventDefault(); // Evita que el formulario se envie automaticamente
  
      let nombre = $('#nombre_modal').val();
      let apaterno = $('#apaterno_modal').val();
      
      console.log("Nombre: " + nombre + " APaterno: " + apaterno);//comprobar si los datos se reciben bien
  
      $.ajax({
        url: "agregar_cliente.php",
        type: "post",
        data: { nombre: nombre, apaterno: apaterno },
        dataType: "json",
        success: function (result) {
          if (result.success) {
            Swal.fire({
              icon: 'success',
              title: 'Cliente agregado exitosamente',
            }).then(() => {
             location.reload(); 
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              html: 'Ocurrió un error inesperado success',
            });
          }
        },
        error: function () {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: 'Ocurrió un error inesperado error',
          });
        },
      });
    });
  });
  