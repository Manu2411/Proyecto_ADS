function validar() {
    var User, Pass, newpass;
     User = document.getElementById("user").value;
     newpass = document.getElementById("new").value;
     Phra = document.getElementById("fra").value;

    if (User == "" && Phra == "" && newpass == "") {
        alert("Todos los campos son requeridos");

        return false;
    }else if (User == "") {
        alert("Por favor, ingrese el usuario");

        return false;
    }else if (Phra == "") {
        alert("Por favor, ingrese la frase clave");
        return false;
    }else if (newpass == "") {
        alert("Por favor, ingrese la nueva contraseña");
        return false;
    }
}
