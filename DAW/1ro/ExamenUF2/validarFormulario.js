function validacion(){
  let Nombre = document.getElementById("Nombre").value;
  let Apellido = document.getElementById("Apellidos").value;
  let NumeroTelefono = document.getElementById("telefono").value;
  let Email = document.getElementById("Email").value;
  

  if(Nombre.length == 0){
    alert("¡[ERROR] Debes introducir tu nombre!");
  } else if (Apellido.length == 0){
    alert("¡[ERROR] Debes introducir tu Apellido!");
  } else if (NumeroTelefono.length > 9 || NumeroTelefono.length < 9){
    alert("¡[ERROR] Debes introducir un número de 9 digitos!");
  } else if (Email.length == 0){
    alert("¡[ERROR] Debes introducir tu email!");
  }

  if (document.getElementById('Hombre').checked || document.getElementById('Mujer').checked ){

  } else {
    alert('¡[ERROR] Debes elegir tu sexo');
  }

  if (document.getElementById('Condiciones').checked ){

  } else {
    alert('¡[ERROR] Debes aceptar las condiciones y la politica de privacidad!');
  }

}