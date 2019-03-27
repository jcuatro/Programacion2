
var genero=[];
var años=[];
var tiempo=[];
var nombre;
var nombre2;


function comprobar(){
let verificar=true;
if (nombre != "salir"){
  verificar = true;
}
  else{
    verificar = false;
  }
  return verificar
}


function identidad(){
  nombre = prompt("¿Como te identificas? M para mujer y H para hombre", "");
  if (nombre!="M" || nombre!="H") {
    prompt("¿Como te identificas? M para mujer y H para hombre", "");
  } else {
    return nombre;
  }
  return nombre}
function edad(){
  nombre2 = Number(prompt("Dime tu edad",""));
  return nombre2}
function vicio(){
  nombre2 = Number(prompt("¿Cuanto tiempo estás delante de una pantalla?",""));
  return nombre2}
identidad();

while (comprobar()==true) {
    genero.push(nombre);
    console.log(genero);
    if (comprobar()==true){
    años.push(edad());
    console.log(años);
    tiempo.push(vicio());
    console.log(tiempo);
    identidad();
  }
}

document.write("Tu sexo es: "+identidad());
document.write("<br>");document.write("Tienes: "+edad()+"años");
document.write("<br>");document.write("Tiempo delante de una pantalla: "+vicio());
