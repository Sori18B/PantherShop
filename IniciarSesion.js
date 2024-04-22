var correo = document.getElementById("txtCorreo");
var contraseña = document.getElementById("txtContraseña");
var I_sesion = document.getElementById("iniciarsesionxd");

I_sesion.addEventListener("click", IniciarSesion);

function IniciarSesion(){
    correo = correo.value;
    var correobien = "joseeduardosoriano08@gmail.com";
    contraseña = contraseña.value;
    var contraseñabien = "gokufase1000";

if(correo == correobien && contraseña == contraseñabien){
location = "Index.html"
}
else{
alert("Datos incorrectos");
}
}
