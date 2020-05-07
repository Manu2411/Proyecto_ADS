function validar() {
    var correo, expresion;

    correo = document.getElementById("email").value;

    expresion = /\w+@\w+\.+[a-z]/;

    if (!expresion.test(correo)) {
        alert("El correo ingresado no es válido, tiene que cumplir el siguiente formato: valor@ejemplo.com");
        return false;
    }

}