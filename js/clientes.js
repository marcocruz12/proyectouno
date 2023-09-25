
$(document).ready(function () {
   $('#btnEnviarClientes').click(function (e) { 
    let form = $('#formMostrarClientes');
    const formData = new FormData(form[0]);

    $.ajax({
        url: "mostrar_clientes.php",
        type: "post",
        data: formData,
        datatype: "json",
        contentType: false,
        processData: false,
        success: function(result) {
            
            result = JSON.parse(result);
            $('#nombre_modal').val(result.nombre);
            $('#apaterno_modal').val(result.apaterno);
            $('#modalMostrarClientes').modal('show');
        },
        error: function (result) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: 'Ocurrió un error inesparado',
            });
        },
    });
   });
});