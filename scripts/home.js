// function getCaptchaResponse() {
//   var response = grecaptcha.getResponse();

//   if (response.length == 0) {
//     $("#g-recaptcha-error").show(0);
//   } else {
//     alert("Continuar con el envio del formulario");
//   }
// }

// function verifyCaptcha() {
//   $("#g-recaptcha-error").hide(0);
// }

// $("#submitForm").click(function () {
//   getCaptchaResponse();
// });

// $(document).ready(function () {
//   $("#3h5").html("Soy el nuevo texto del  tercer h5");
// });

// $("#btn").click(function () {
//   var accion = $("#accion").val();
//   var valor = $("#valor").val();
//   var posicion = $("#posicion").val();

//   if (accion == "agregar") {
//     $("#h5").append("<h5>Soy un h5 que agregaste =D</h5>");
//     $("#posicion").val('');
//     $("#valor").val('');
//   }
//   if (accion == "editar") {
//     $("#h5").find("h5").eq(posicion).html(valor);
//     $("#posicion").val('');
//     $("#valor").val('');
//   }
//   if (accion == "eliminar") {
//     $("#h5").find("h5").eq(posicion).remove();
//     $("#posicion").val('');
//     $("#valor").val('');
//   }

//   console.log(valor);
// });

$(document).ready(function () {
  var h5 = $("#h5").find("h5").length;

  for (let index = 0; index <= h5; index++) {
    $("#posicionSelect").append("<option>" + index  + "</option>");
  }

  $("#colorSelect").hide();
  $("#btnc").hide();

  $("#accion").change(function () {
    if ($(this).val() == "modificar") {
      $("#valor").show();
      $("#colorSelect").hide();
      $("#btn").show();
      $("#btnc").hide();
    }
    if ($(this).val() == "color") {
      $("#btn").hide();
      $("#btnc").show();
      $("#valor").hide();
      $("#colorSelect").show();
    } else {
    }
  });

  $("#btn").click(function () {
    var posicion = $("#posicionSelect").val();
    var valor = $("#valor").val();
    $("#h5").find("h5").eq(posicion).html(valor);
    $("#valor").val('');
  });

  $("#btnc").click(function () {
    var posicion = $("#posicionSelect").val();
    var color = $("#colorSelect").val();
    $("#h5").find("h5").eq(posicion - 1).css('color',''+color+'');
  });
});
