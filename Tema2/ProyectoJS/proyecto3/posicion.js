var inicio=[0,0];
var final=[0,0];
var fila=[1,2,3,4,5,6];
var columna=[1,2,3,4,5,6];
var posicion=false;
function aleatorio(){
  inicio[0]=fila[Math.floor(Math.random() * (6))];
  inicio[1]=columna[Math.floor(Math.random() * (6))];
  final[0]=fila[Math.floor(Math.random() * (6))];
  final[1]=columna[Math.floor(Math.random() * (6))];
}
while(posicion == false){
  aleatorio();
  if(inicio[1]==final[1] && inicio[0]==final[0]){
      posicion=false;
  }
  else{posicion=true;}
}
console.log("Posición inicial: "+inicio);
console.log("Posicion final: "+final);
