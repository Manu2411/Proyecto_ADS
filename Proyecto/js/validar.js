function validar() {
    var User, Pass;
     User = document.getElementById("user").value;
     Pass = document.getElementById("contra").value;

    if (User == "" && Pass == "") {
        alert("Todos los campos son requeridos");

        return false;
    }else if (User == "") {
        alert("Por favor, ingrese el usuario");

        return false;
    }else if (Pass == "") {
        alert("Por favor, ingrese la contraseña");

        return false;
    }
}
