function validarFormulario() {
  var codigo = number = document.getElementById("validationServer01").value;
  var descripcion = string = document.getElementById("validationServer02").value;
  var codigoBarra = number = document.getElementById("validationServer03").value;
  var precioUnitario = number = document.getElementById("validationServer04").value;
  var stock = number = document.getElementById("validationServer05").value;
  var proveedor = string = document.getElementById("validationServer06").value;
  var myCheck = boolean = document.getElementById("myCheck").value;
  var categoria = document.getElementsByClassName("form-select").value;

  if (codigo === "" || descripcion === "" || codigoBarra === "" || precioUnitario === "" || stock === "" || proveedor === "" || myCheck === false || categoria === "") {
      alert("Por favor, complete todos los campos.");
      return false;
  }

  if (codigo.length > 8 || codigo.length < 8) {
      alert("Por favor, introduzca una contraseña válida.");
      return false;
  }

  if(descripcion !== string) {
    alert("Por favor, introduzca solamente letras.");
    return false;

  }

  if(codigoBarra.length > 13 || codigoBarra.length < 13) {
    alert("Por favor, introduzca un código lineal de 13 dígitos.")
    return false;

  }

  if(precioUnitario.length > 6 || precioUnitario < 6) {
    alert("Por favor, introduzca un precio unitario válido.")
    return false;

  }

  if(proveedor !== string) {
    alert("Por favor, introduzca un nombre de proveedor, empresa o compañía válido.")
    return false;

  if(stock !== number || stock.length > 4) {
    alert("Por favor, ingrese un número válido.")
    return false;
  }

  } if(myCheck === false) {
    alert("Por favor, dar click a la caja antes de continuar.")
    return false;

  }

  return true;
}