var vueltas="";
var tiempo=[];
var vertiempo=0;

function vuelta(){

  vueltas =prompt("¿Quieres introducir un tiempo, si o no?","");

  return vueltas}


function marcas(){

  nombre=Number(prompt("Cuantos segundos ha hecho",""));

  return nombre}

function comprobar(){

  let verificar=true;

  if (vueltas != "no"){
      verificar = true;
  }

  else{
    verificar = false;
  }
  return verificar
  }

function tiempos(){
  vuelta();
  while(comprobar()==true){
      if(comprobar()==true){
      vertiempo= marcas();
        if(vertiempo>0){
          tiempo.push(vertiempo);
        }
      vuelta();
    }
  }
}


function menor(){
  let tiempo1=Infinity;
  let mejortiempo=0;

  for(cont=0; cont<tiempo.length; cont++){
    let tiempo2=tiempo[cont];
    if (tiempo1>tiempo2){
      tiempo1=tiempo2;
      mejortiempo=tiempo[cont];
    }
  }
    return mejortiempo
}

function mayor(){
  let tiempo1=0;
  let peortiempo=0;
  for(cont=0; cont<tiempo.length; cont++){
    let tiempo2=tiempo[cont];
    if (tiempo1<tiempo2){
      tiempo1=tiempo2;
      peortiempo=tiempo[cont];
    }
  }
    return peortiempo
}

function media(){
  let numero=0;
  let total=0;
  let resultado=0;
  for(j=0; j<tiempo.length; j++){
    total=total+tiempo[cont];
    }
  resultado = total/j;
return resultado
}

tiempos();
var mejortiempo=menor();
console.log("El mejor tiempo ha sido: "+mejortiempo+" segundos.");
var peortiempo= mayor();
console.log("El peor tiempo ha sido: "+peortiempo+" segundos.");
var resultado=media();
console.log("La media de los tiempos ha sido: "+resultado+" segundos.");
