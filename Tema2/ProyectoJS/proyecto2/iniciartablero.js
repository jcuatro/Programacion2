var tablero_j=[];
var tablero1=[];
var tablero2=[];
var tablero3=[];
var tablero4=[];
var tablero5=[];
var tablero6=[];
var numero = 0;
var posicion= 0;
function iniciaTablero(){
//tableros numeros
tablero1 = [2,6,5,4,5,5];
tablero2 = [4,6,6,3,2,6];
tablero3 = [3,4,1,2,6,3];
tablero4 = [1,4,2,5,6,1];
tablero5 = [5,5,3,2,2,1];
tablero6 = [4,1,4,3,1,3];
//tableros colores
var color1 = ["blue","yellow","pink","red","yellow","blue"];
var color2 = ["blue","white","pink","red","yellow","blue"];
var color3 = ["blue","yellow","blue","red","red","pink"];
var color4 = ["pink","white","pink","red","green","red"];
var color5 = ["green","white","green","green","white","yellow"];
var color6 = ["green","white","pink","white","green","yellow"];

//tablero juego
tablerototal = [tablero1,tablero2,tablero3,tablero4,tablero5,tablero6];
colortotal = [color1,color2,color3,color4,color5,color6];
}
iniciaTablero();
function compruebaTablero(){
  return console.log(tablerototal,colortotal);
}
compruebaTablero();
