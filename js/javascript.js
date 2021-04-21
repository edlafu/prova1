function validar_item(){
  var item = document.getElementById('item').value; //obtengo el valor del campo item
  if (item == "") { //si no tiene nada escrito muestro un mensaje y return false
    document.getElementById('mensaje_item').innerHTML = "Completa el item";
    return false;
  }else{
    document.getElementById('mensaje_item').innerHTML = "";
    return true;
  }
}

function validar_stock(){
  var stock = document.getElementById('stock').value;
  if (stock == "") {
    document.getElementById('mensaje_stock').innerHTML = "Completa el stock";
    return false;
  }else{
    document.getElementById('mensaje_stock').innerHTML = "";
    return true;
  }
}

function validar_form(){
  if(validar_item() && validar_stock()){ //si los dos son true hago return true
    return true;
  }else{ //si no, false...
    return false;
  }
}
