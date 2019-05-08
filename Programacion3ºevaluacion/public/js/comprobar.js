function comprobacion(){
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let edad=document.getElementById('precio').value;
  let error=true;
  if(nombre==""){
    error=false;
  }
  if (apellidos=="") {
    error=false;
  }
  if (precio=="") {
    error=false;
  }
  if (error==false) {
    return false;
  }
}
