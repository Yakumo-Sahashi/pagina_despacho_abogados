$(document).ready(() => {
  var espaera = 0;

  $('#telefono').on('input', function () {
    this.value = this.value.replace(/[^0-9+]/g, '');
  });

  $('#nombre').on('input', function () {
    this.value = this.value.replace(/[^a-zA-Z ñÑ]/g, '');
    this.value = this.value.toUpperCase();
  });


  $('#mensaje').on('input', function () {
    this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
  });


  $('#tel').click(()=>{
    copiar();
  });

  function enviar_email() {
    let telefono = "" +  $('#telefono').val();
    if ($('#nombre').val() == "" && $('#correo').val() == "" && $('#telefono').val() == "" && $('#mensaje').val() == "") {
      erro_msj("Desbes llenar todos los campos.");
      return false;
    } else if ($('#correo').val() == "") {
      erro_msj("Debes llenar el campo de electrónico.");
      return false;
    } else if ($('#telefono').val() == "") {
      erro_msj("Debes llenar el campo numero telefonico.");
      return false;
    } else if ($('#mensaje').val() == "") {
      erro_msj("Debes llenar el campo mensaje.");
      return false;
    } else {
      if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($('#correo').val()))) {
        erro_msj("El correo electronico debe de seguir la siguiente estructura 'example@mail.com'.");
        return false;
      }else if (telefono.length != 10) {
        erro_msj("El numero telefonico debe contener 10 digitos.");
        return false;
      }else{
        espaera = 1;
        opening();
      }
      
    }

    $.ajax({
      type: 'POST',
      data: $('#frm_contacto').serialize(),
      url: 'model/model_contacto.php',
      success: (r) => {
        ending();
        if (r === "2") {
          swal({
            icon: "success",
            title: "Informacion registrada",
            html: true,
            text: '\n\nHemos recibido tu informacion. \nNos pondremos en contacto contigo.',
            buttons: true,
          });
          $('#frm_contacto')[0].reset();
        } else {
          espaera = 0;
          erro_msj("Se ha producido un error al procesar tu solicitud! \n Intentalo de nuevo.");
          return false;
        }
      }
    });
  }

  function copiar() {
    var $temp = $("<input>")
    $("body").append($temp);
    $temp.val('5590436367').select();
    document.execCommand("copy");
    $temp.remove();
  }
  
  function erro_msj(msj) {
    swal({
      title: "Error!",
      text: msj,
      icon: "warning",
      button: "Ok!",
    });
  }

  $('#btn_contacto').click(() => {
    enviar_email();
  });

  $("#frm_contacto").keypress((e) => {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) {
      if (espaera == 0) {
        enviar_email();
      }
    }
  });

});