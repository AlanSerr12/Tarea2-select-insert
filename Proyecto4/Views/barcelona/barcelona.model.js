
class Jugadores_Model {
  constructor(
    Nombre,
    Apellido,
    NJugador,
    Edad,
    Rol,
    Ruta
  ) {
    this.Nombre = Nombre;
    this.Apellido = Apellido;
    this.NJugador = NJugador;
    this.Edad = Edad;
    this.Rol = Rol;
    this.Ruta = Ruta;
  }
  todos() {
    var html = "";
    $("#tabla_Jugadores").html(html);
    $.get("../../Controllers/barcelona.controller.php?op=" + this.Ruta, (res) => {
      
    });
  }
  insertar() {
    var dato = new FormData();
    dato = this.Rol;
   $.ajax({
    url: "../../Controllers/barcelona.controller.php?op=insertar",
    type: "POST",
    data: dato,
    contentType: false,
    processData: false,
    success: function (res) {
        res = JSON.parse(res);
        if(res === "ok"){
            Swal.fire("jugadores", "jugador Registrado", "success");
            todos_controlador();
        }else{
            Swal.fire("Error", res, "error"); 
        }
    }
   });
   this.limpia_Cajas();    
  }

  numero_repetido(){
    var Numero = this.Numero;
    $.post("../../Controllers/barcelona.controller.php?op=numero_repetido", {Numero: Numero}, (res) => {
        res = JSON.parse(res);
        if( parseInt(res.numero_repetido) > 0){
            $('#NumeroRepetido').removeClass('d-none');
            $('#NumeroRepetido').html('El numero ingresado para el jugador, ya exite en la base de datos');
            $('button').prop('disabled', true);
        }else{
            $('#NumeroRepetido').addClass('d-none');
            $('button').prop('disabled', false);
        }

    })
  }

  limpia_Cajas(){
    document.getElementById("Nombre").value = "";
    document.getElementById("Apellido").value = "";  
    document.getElementById("NJugador").value = "";
    document.getElementById("Edad").value = "";
    $("#Modal_jugador").modal("hide");
  }

  
}
