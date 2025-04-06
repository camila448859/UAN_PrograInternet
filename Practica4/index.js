function calif() {
    var grade = document.getElementById("grade").value;
    if (grade <= 6) {
        document.getElementById("resultado1").innerHTML = "NA"
    } else if (grade > 6 && grade <= 7.5) {
        document.getElementById("resultado1").innerHTML = "S"
    } else if (grade > 7.5 && grade <= 9) {
        document.getElementById("resultado1").innerHTML = "B"
    } else if (grade > 9 && grade <= 10) {
        document.getElementById("resultado1").innerHTML = "MB"
    } else if (grade == 10) {
        document.getElementById("resultado1").innerHTML = "LAP"
    }
}

function obtenerNumero() {
    var valor = document.getElementById("numero").value
    var x = parseInt(valor)
    console.log(typeof (x))

    factorial(x)
}

function factorial(x) {
    var f = 1

    for (i = 1; i <= x; i++) {
        f *= i
        console.log(f)
    }
    var salida = x + "! = " + f
    document.getElementById("resultado2").innerHTML = salida
}




function send() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var age = document.getElementById("age").value;
    var gender = document.querySelector('input[name="gender"]:checked').value;
    var dob = document.getElementById("dob").value;
    var color = document.getElementById("color").value;

    document.getElementById("resultado3").innerHTML = `
      <strong>Nombre:</strong> ${name}<br>
      <strong>Correo:</strong> ${email}<br>
      <strong>Edad:</strong> ${age}<br>
      <strong>Género:</strong> ${gender}<br>
      <strong>Fecha de Nacimiento:</strong> ${dob}<br>
      <strong>Color Favorito:</strong> <span style="color:${color};">${color}</span>
    `;
}

