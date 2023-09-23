// function mostrarID (ID){
//     alert("Tu numero de pais es: " + ID);
// }

// $(".alert-button").on("click", function(){
//     console.log("demo");
//     let dataId = $(this).attr("data-id");
// });


function mostrarID(ID) {
    //console.log("id");
    var modalBody = document.getElementById('modal-body-content');
    modalBody.innerHTML = 'Tu ID de país es: ' + ID;
  }

//   Swal.fire({
//     icon: 'error',
//     title: 'Oops...',
//     text: 'Something went wrong!',
//     footer: '<a href="">Why do I have this issue?</a>'
//   })


// Uso de clase

  $('.btnjs').click(function(){
    Swal.fire({
        title: '<strong>HTML <u>example</u></strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
          'Great!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
          'No',
        cancelButtonAriaLabel: 'Thumbs down'
      })
    
 });
 
 //Uso de onclick

 function mostrarJS() {
  //console.log("id");
  Swal.fire({
      title: 'Do you want to save the changes?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Save',
      denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire('Saved!', '', 'success')
      } else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
      }
    })
  
}

 // Botones de cambio de estado

 $('#btn1').click(function(){
  $('#primero div').addClass('bg-warning');
  });
 
$('#btn2').click(function(){
  $('#primero div').addClass('bg-primary');
  $('#primero div').removeClass('bg-warning');
});

$('#btn3').click(function(){
  $('#segundo div').removeClass('bg-light');
  $('#segundo div').addClass('bg-danger');
});

$('#btn4').click(function(){
  $('#segundo div').removeClass('bg-danger');
  $('#segundo div').addClass('bg-light');
});
             
 $('#btn5').click(function(){
  $('#tercero').addClass('d-none');
 });

 $('#btn6').click(function(){
    $('#tercero').removeClass('d-none');
});



