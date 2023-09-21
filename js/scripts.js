// function mostrarID (ID){
//     alert("Tu numero de pais es: " + ID);
// }


$(".alert-button").on("click", function(){
    console.log("demo");
    var dataId = $(this).attr("data-id");
    alert("Tu numero de pais es: " + dataId);
});
