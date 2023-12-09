//archivo de donde llamar al procedimiento
//controlador

function init() {
  $("#form_jugadores").on("submit", function (e) {
    guardaryeditar(e);
  });
}

$().ready(() => {
  //detecta carga de la pagina
  todos_controlador();
});

var todos_controlador = () => {
  var todos = new Jugadores_Model("","", "", "", "","todos");
  todos.todos();
}

var guardaryeditar = (e)=>{
    e.preventDefault();
    var formData = new FormData($("#form_jugadores")[1]);
    var Edad = document.getElementById("Edad").value
  console.log(Edad);
  if(Edad > 0){
    var jugadores = new Jugadores_Model("","","","",formData,"editar");
    jugadores.editar();
  }else{
    var jugadores = new Jugadores_Model("","","","",formData,"insertar");
    jugadores.insertar();  
  }
}

var numero_repetido = () => {
    var numero = $('#Numero').val();
    var jugadores = new Jugadores_Model('','','',numero,'','numero_repetido');
    jugadores.numero_repetido();
}

var editar = (Edad) => {
  var uno = new Jugadores_Model( "", "","", Edad, "","uno");
  uno.uno();
};

var eliminar=(Edad)=>{
  var eliminar = new Jugadores_Model("", "","", Edad, "","eliminar");
  eliminar.eliminar();
}

;init();
