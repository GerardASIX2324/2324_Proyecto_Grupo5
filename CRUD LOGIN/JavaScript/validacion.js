function validarFormulario() {
    var usuario = document.getElementById("usuario").value;
    var contrasena = document.getElementById("contrasena").value;
    var validar = document.getElementById("validar");

    if (usuario === "admin" && contrasena === "12345aA") {
        window.location.href = "./alumnos.php";
        return false;
    } else if (usuario === "" || contrasena === "") {
        validar.innerHTML = "Por favor, completa todos los campos.";
        // usuario.style.border = "thick solid red"
        return false;
    } else {
        validar.innerHTML = " <span style='color: red;'>Usuario y contraseña incorrectos.";
        // usuario.style.border = "thick solid red"
        return false; 
    }
}