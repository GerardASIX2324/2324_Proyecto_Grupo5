function validarLogin() {
    var usuario = document.getElementById("usuario").value;
    var contrasena = document.getElementById("contrasena").value;

    if (usuario === "admin" && contrasena === "12345aA") {
        window.location.href = "view/alumnos.php";
        return false;
    } else if (usuario === "" || contrasena === "") {
        document.getElementById("validar").innerHTML = "Por favor, completa todos los campos.";
        return false;
    } else {
        document.getElementById("validar").innerHTML = " <span style='color: red;'>Usuario y contraseña incorrectos.";
        return false; 
    }
}

document.addEventListener("DOMContentLoaded", (event) => {//PUESTO POR FATIMA :) Es una funcion que sirve para esperar que cargen todos los elementos del DOM(documento externo) 
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById("apellido");
    var DNI = document.getElementById("DNI");
    var telefono = document.getElementById("telefono");
    var email = document.getElementById("mail");
    var fecha = document.getElementById("fecha");
    var idClase = document.getElementById("id_clase");
    nombre.onblur= validaNombre //lo que hace es que cuando el usuario abandona la casilla esto la valida
    apellido.onblur= validaApellido
    DNI.onblur = validarDNI
    telefono.onblur = validarTelefono
    email.onblur = validarEmail
    fecha.onblur = validarFecha
    idClase.onblur = validarID


})

function validaNombre(){
    var errorNombre = document.getElementById("error_nombre");

    if(nombre.value == ""){//Campo nombre incorrecto
        errorNombre.innerHTML = "<span style='color: red;'>El campo Nombre no puede estar vacio";
        errorNombre.style.display ="block"
        nombre.style.border = "solid red"
        return false;
        
    }else{//Campo nombre correcto
        errorNombre.innerHTML = "<span style='color: black;'>"
        errorNombre.style.display ="none"
        nombre.style = "black"
    }

    if (!/^[a-zA-Z\s]+$/.test(nombre.value)){// Campo nombre no contiene solo letras
        errorNombre.innerHTML = "<span style='color: red;'>El campo Nombre NO puede contener numeros";
        errorNombre.style.display ="block"
        nombre.style.border = "solid red"
        return false;
    } else{
        errorNombre.innerHTML = "<span style='color: black;'>"
        errorNombre.style.display ="none"
        nombre.style = "black"
    }

    if(nombre.value.length < 3){
        errorNombre.innerHTML = "<span style='color: red;'>El campo Nombre debe tener 3 caracteres minimo";
        errorNombre.style.display ="block"
        nombre.style.border = "solid red"
        return false;
    } else{
        errorNombre.innerHTML = "<span style='color: black;'>"
        errorNombre.style.display ="none"
        nombre.style = "black"
    }
    if(nombre.value.length > 20){
        errorNombre.innerHTML = "<span style='color: red;'>El campo Nombre no debe tener mas de 20 caracteres";
        errorNombre.style.display ="block"
        nombre.style.border = "solid red"
        return false;
    } else{
        errorNombre.innerHTML = "<span style='color: black;'>"
        errorNombre.style.display ="none"
        nombre.style = "black"
    }

}

function validaApellido(){
    var errorApellido = document.getElementById("error_apellido");
    if(apellido.value == "" ){
        errorApellido.innerHTML = "<span style='color: red;'>El campo Apellido no puede estar vacio";
        errorApellido.style.display ="block"
        apellido.style.border = "solid red"
        return false;
    }else{
        errorApellido.innerHTML = "<span style='color: black;'>"
        errorApellido.style.display = "none"
        apellido.style = "black"
    }

    if (!/^[a-zA-Z\s]+$/.test(apellido.value)){// Campo apellido no contiene solo letras
        errorApellido.innerHTML = "<span style='color: red;'>El campo Nombre NO puede contener numeros";
        errorApellido.style.display ="block"
        apellido.style.border = "solid red"
        return false;
    } else{
        errorApellido.innerHTML = "<span style='color: black;'>"
        errorApellido.style.display ="none"
        apellido.style = "black"
    }

    if(apellido.value.length < 3){
        errorApellido.innerHTML = "<span style='color: red;'>El campo Apellido debe tener al menos 3 caracteres";
        errorApellido.style.display ="block"
        apellido.style.border = "solid red"
        return false;
    } else{
        errorApellido.innerHTML = "<span style='color: black;'>"
        errorApellido.style.display = "none"
        apellido.style = "black"
    }
    if(apellido.value.length > 50){
        errorApellido.innerHTML = "<span style='color: red;'>El campo Apellido no debe tener mas de 50 caracteres";
        errorApellido.style.display ="block"
        apellido.style.border = "solid red"
        return false;
    } else{
        errorApellido.innerHTML = "<span style='color: black;'>"
        errorApellido.style.display ="none"
        apellido.style = "black"
    }
}

function validarDNI() {
    var errorDNI = document.getElementById("error_DNI");
    var letras = "TRWAGMYFPDXBNJZSQVHLCKE";

    if (DNI.value == "") {
        errorDNI.innerHTML = "<span style='color: red;'>El campo DNI no puede estar vacio.";
        errorDNI.style.display ="block"
        DNI.style.border = "solid red"
        return false;
    }else{
        errorDNI.innerHTML = "<span style='color: black;'>"
        errorDNI.style.display ="none"
        DNI.style = "black"
    }

    if (DNI.value.length !== 9) {
        errorDNI.innerHTML = "<span style='color: red;'>El campo DNI debe tener 9 caracteres.";
        errorDNI.style.display ="block"
        DNI.style.border = "solid red"
        return false;
    }else{
        errorDNI.innerHTML = "<span style='color: black;'>"
        errorDNI.style.display ="none"
        DNI.style = "black"
    }

    var numero = DNI.value.substr(0, 8);
    var letra = DNI.value.charAt(8).toUpperCase();

    if (!(/^\d+$/.test(numero))) {
        errorDNI.innerHTML = "<span style='color: red;'>Los primeros 8 caracteres del DNI deben ser numericos";
        errorDNI.style.display ="block"
        DNI.style.border = "solid red"
        return false;
    }else{
        errorDNI.innerHTML = "<span style='color: black;'>"
        errorDNI.style.display ="none"
        DNI.style = "black"
    }

    var letraCalculada = letras.charAt(numero % 23);

    if (letra !== letraCalculada) {
        errorDNI.innerHTML = "<span style='color: red;'>La letra del DNI no es valida";
        errorDNI.style.display ="block"
        DNI.style.border = "solid red"
        return false;
    }else{
        errorDNI.innerHTML = "<span style='color: black;'>"
        errorDNI.style.display ="none"
        DNI.style = "black"
    }
    
}

function validarTelefono(){
    var errorTelefono = document.getElementById("error_telefono");

    if (telefono.value== ""){
        errorTelefono.innerHTML = "<span style='color: red;'>El campo Telefono no puede estar vacio";
        errorTelefono.style.display ="block"
        telefono.style.border = "solid red"
        return false;
    } else{
        errorTelefono.innerHTML = "<span style='color: black;'>"
        errorTelefono.style.display = "none"
        telefono.style = "black"
    }
    if( !(/^\d{9}$/.test(telefono.value)) ) {
        errorTelefono.innerHTML = "<span style='color: red;'>El campo Telefono no contiene 9 caracteres";
        errorTelefono.style.display ="block"
        telefono.style.border = "solid red"
        return false;
      }else{
        errorTelefono.innerHTML = "<span style='color: black;'>"
        errorTelefono.style.display = "none"
        telefono.style = "black"
      }
}

function validarEmail(){
    var email = document.getElementById("mail");
    var errorEmail = document.getElementById("error_email");
    
    if (email.value == "") {
        errorEmail.innerHTML = "<span style='color: red;'>El campo Mail no puede estar vacío</span>";
        errorEmail.style.display = "block";
        email.style.border = "solid red";
        return false;
    } else if (email.value.length > 60) {
        errorEmail.innerHTML = "<span style='color: red;'>El campo Mail no debe tener más de 60 caracteres</span>";
        errorEmail.style.display = "block";
        email.style.border = "solid red";
        return false;
    } else if (!(/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email.value))) {
        errorEmail.innerHTML = "<span style='color: red;'>El campo Mail no tiene un formato válido</span>";
        errorEmail.style.display = "block";
        email.style.border = "solid red";
        return false;
    } else {
        errorEmail.innerHTML = "";
        errorEmail.style.display = "none";
        email.style.borderColor = "black";
    }
    
}
function calcularEdad(fecha) {
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    return edad;
}

function validarFecha() {
    var fecha = document.getElementById("fecha");
    var errorFecha = document.getElementById("error_fecha");
    var edadMinima = 16;
    var hoy = new Date();

    if (fecha.value == "") {
        errorFecha.innerHTML = "<span style='color: red;'>El campo Fecha no puede estar vacío</span>";
        errorFecha.style.display = "block";
        fecha.style.border = "solid red";
        return false;
    } else{
        errorFecha.innerHTML = "<span style='color: black;'>";
        errorFecha.style.display = "none";
        fecha.style.borderColor = "black";
       
    }
    
    var fechaNacimiento = new Date(fecha.value);

    if (fechaNacimiento > hoy) {
        errorFecha.innerHTML = "<span style='color: red;'>La Fecha de nacimiento no puede ser posterior a la de hoy</span>";
        errorFecha.style.display = "block";
        fecha.style.border = "solid red";
        return false;
    } else{
        errorFecha.innerHTML = "<span style='color: black;'>";
        errorFecha.style.display = "none";
        fecha.style.borderColor = "black";
       
    }

    var edad = calcularEdad(fecha.value);
    
    if (edad < edadMinima) {
        errorFecha.innerHTML = "<span style='color: red;'>Debe ser mayor de 16 años</span>";
        errorFecha.style.display = "block";
        fecha.style.border = "solid red";
       
    } else {
        errorFecha.innerHTML = "<span style='color: black;'>";
        errorFecha.style.display = "none";
        fecha.style.borderColor = "black";
        
    }
}

function validarID(){
    var error_ID = document.getElementById("error_id");
    var idClase = document.getElementById("id_clase");

    if(idClase.value >= 1 && idClase.value <= 6){
        error_ID.innerHTML = "<span style='color: black;'></span>";
        error_ID.style.display = "none";
        idClase.style.borderColor = "black";
    } else{
        error_ID.innerHTML = "<span style='color: red;'>El campo ID no esta en el rango correcto</span>";
        error_ID.style.display = "block";
        idClase.style.border = "solid red";
        return false;
    }

    if (idClase.value == "") {
        error_ID.innerHTML = "<span style='color: red;'>El campo ID no puede estar vacío</span>";
        error_ID.style.display = "block";
        idClase.style.border = "solid red";
        return false;
    } else{
        error_ID.innerHTML = "<span style='color: black;'>";
        error_ID.style.display = "none";
        idClase.style.borderColor = "black";
    }
}

function validarFormulario() {
    var nombreValido = validaNombre();
    var apellidoValido = validaApellido();
    var dniValido = validarDNI();
    var telefonoValido = validarTelefono();
    var emailValido = validarEmail();
    var fechaValida = validarFecha();
    var idClaseValido = validarID();

    if (nombreValido && apellidoValido && dniValido && telefonoValido && emailValido && fechaValida && idClaseValido) {
        window.location.href = "../view/alumnos.php";
    } else {
        return false;
    }
}