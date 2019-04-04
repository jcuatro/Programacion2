//inicio

//variables array de numeros

var tablero_jn=[];
var tablero0_jn=[];

//variables array de colores

var tablero_jc=[];
var tablero0_jc=[];

//posiciona

var fila=0;
var columna=0;
var posinicial="";
var pos1 ="";
var pos2="";
var pos3="";
var valor=0;
var clase="";

//movimientos

var movimientos=0;
var movimient=[];
var fallos=0;

//funcion iniciar teclado

function iniciar(){

//tableros numeros

let tablero1_n = [[2,1,1],
              [2,2,2],
              [4,6,4]];

let tablero2_n = [[5,2,3],
              [6,4,3],
              [4,5,3]];

let tablero3_n = [[1,6,1],
              [5,5,5],
              [6,1,1]];

let tablero4_n = [[2,3,5],
              [6,4,4],
              [6,3,3]];

//tableros colores

let tablero1_c = [["yellow","white","blue"],
              ["white","green","red"],
              ["pink","green","white"]];

let tablero2_c = [["pink","pink","pink"],
              ["red","red","yellow"],
              ["blue","green","green"]];

let tablero3_c = [["pink","yellow","yellow"],
              ["yellow","blue","red"],
              ["pink","red","green"]];

let tablero4_c = [["blue","white","white"],
              ["blue","yellow","green"],
              ["white","red","blue"]];



//rotar tableros
tablero1_n= rotar (tablero1_n, tablero1_c);
tablero2_n= rotar (tablero2_n, tablero2_c);
tablero3_n= rotar (tablero3_n, tablero3_c);
tablero4_n= rotar (tablero4_n, tablero4_c);



//tablero juego

tablero_jn = [tablero1_n,tablero2_n,tablero3_n,tablero4_n];
tablero0_jn=[];
tablero_jc = [tablero1_c,tablero2_c,tablero3_c,tablero4_c]
tablero0_jc=[];

//bucle para posicionar los cuadrantes aleatorios

  for(let cont=tablero_jn.length; cont>=0; cont--){

    let posiciona = Math.floor(Math.random()*(cont))

    let cuadrante_numero = tablero_jn[posiciona];

    let cuadrante_color = tablero_jc[posiciona];

    tablero_jn.splice(posiciona, 1);

    tablero_jc.splice(posiciona, 1);

    tablero0_jn.push(cuadrante_numero); //tablero num final

    tablero0_jc.push(cuadrante_color); //tablero col final

  }

}

//funcion para rotar cuadrantes

function rotar(x,y){

  let copia=x;

  let copiac=y;

  //for (let cambio = 0; cambio<=1; cambio ++){

  for (let vuelta=Math.floor(Math.random() * (4)); vuelta>=0; vuelta--){

    copia = copia.reverse();

    copiac =  copiac.reverse();

    for (let i=0;i<x.length;i++){

      for(let f=0;f<i;f++){

        let aux = copia[f][i];

        let auxc = copiac[f][i];

        copia[f][i]=copia[i][f];

        copiac[f][i]=copiac[i][f];

        copia[i][f]= aux;

        copiac[i][f]= auxc;

      }

    }

  }

  return copia

}

//pintar tablero por pantalla

function pintar(){

  iniciar();

  document.write("<div id='juego'>");

  for (let i=0; i<=3; i++){

    if(i==0){

      document.write("<div class='tablero'>");

      for (let cont=0; cont<=2; cont++){

        for (let cont2=0; cont2<=2; cont2++){

          document.write("<span class='celda' id='"+(1+cont)+"."+(1+cont2)+"' onClick='cliccordenada(this)' style='background-color:"+tablero0_jc[i][cont][cont2]+"'>"+tablero0_jn[i][cont][cont2]+"</span>");

        }

      }

      document.write("</div>");

    }

    else if(i==1){

      document.write("<div class='tablero'>");

      for (let cont=0; cont<=2; cont++){

        for (let cont2=3; cont2<=5; cont2++){

          document.write("<span class='celda' id='"+(1+cont)+"."+(1+cont2)+"' onClick='cliccordenada(this)' style='background-color:"+tablero0_jc[i][cont][(cont2-3)]+"'>"+tablero0_jn[i][cont][(cont2-3)]+"</span>");

        }

      }

      document.write("</div>");

    }

    else if(i==2){

      document.write("<div class='tablero'>");

      for (let cont=3; cont<=5; cont++){

        for (let cont2=0; cont2<=2; cont2++){

          document.write("<span class='celda' id='"+(1+cont)+"."+(1+cont2)+"' onClick='cliccordenada(this)' style='background-color:"+tablero0_jc[i][(cont-3)][cont2]+"'>"+tablero0_jn[i][(cont-3)][cont2]+"</span>");

        }

      }

      document.write("</div>");

    }

    else if(i==3){

      document.write("<div class='tablero'>");

      for (let cont=3; cont<=5; cont++){

        for (let cont2=3; cont2<=5; cont2++){

          document.write("<span class='celda' id='"+(1+cont)+"."+(1+cont2)+"' onClick='cliccordenada(this)' style='background-color:"+tablero0_jc[i][(cont-3)][(cont2-3)]+"'>"+tablero0_jn[i][(cont-3)][(cont2-3)]+"</span>");

        }

      }

      document.write("</div>");

    }

  }

  document.write("</div>");

  }

//funcion dados aleatorios

function random() {

  movimient=[];

  document.getElementById("jugadas").innerHTML="Has realizado "+(movimientos)+" movimientos"

  movimientos=0;

  document.getElementById("movimientos").innerText=movimient;

  fallos=0;

  if (posinicial != ""){document.getElementById(posinicial).style.borderColor = "black";}

  if (pos2 != ""){

    document.getElementById(pos2).style.borderColor = "black";

    pos2="" ;             }

  for(let cont=0; cont < 2; cont ++){

      if (cont==0){

        let f = Math.floor(Math.random() * (6) + 1);

        let c = Math.floor(Math.random() * (6) + 1);

        pos1 = f+"."+c;

        posinicial = pos1;

        let dadon = document.getElementById(pos1);

        let valordadon = document.getElementById(pos1).innerText;

        document.getElementById(pos1).style.borderColor = "aqua";

        document.getElementById('dado2').style.backgroundColor = dadon.style.backgroundColor;

        document.getElementById('dado2').style.borderColor = "aqua";

        document.getElementById('dado2').innerHTML = valordadon;

      }

      else {

        while (pos2=="" || pos1==pos2){

        let f = Math.floor(Math.random() * (6) + 1);

        let c = Math.floor(Math.random() * (6) + 1);

        pos2 = f+"."+c;

        }

        let dadoc = document.getElementById(pos2);

        let valordadoc = document.getElementById(pos2).innerText;

        document.getElementById(pos2).style.borderColor = "#FA00FA";

        document.getElementById('dado1').style.backgroundColor = dadoc.style.backgroundColor;

        document.getElementById('dado1').innerHTML = valordadoc;

        document.getElementById('dado1').style.borderColor = "#FA00FA";

      }

  }

  movimientos=0;

  fallos=0;

}



//comprobar posicion

function cliccordenada(cordenada){

  pos=pos3;

  if ((pos3!="")&&(posinicial!=pos1)&&(pos2!=pos3)){

    if(pos3 != pos1){

    document.getElementById(pos1).style.borderColor = "black";

    }

    else{

    document.getElementById(pos3).style.borderColor = "black";

    }

  }

  let posicion = cordenada.id;

  pos3=posicion;

  posicion = posicion.split(".");

  fila = posicion[0];

  columna = posicion[1];
  clase = cordenada.style.backgroundColor;
  valor = document.getElementById(pos3).innerText;
  movimiento(pos1, posicion);
}
function menor(){
  pos=pos3;
  if ((pos3!="")&&(posinicial!=pos1)&&(pos2!=pos3)){
    if(pos3 != pos1){
    document.getElementById(pos1).style.borderColor = "black";
    }
    else{
    document.getElementById(pos3).style.borderColor = "black";
    }
  }
  let posicion=(document.getElementById("fila1").value + "." + document.getElementById("columna1").value);
  console.log(posicion);
  pos3=posicion;
  clase = document.getElementById(posicion).style.backgroundColor;
  console.log(clase);
  posicion = posicion.split(".");

  fila = posicion[0];
  columna = posicion[1];
  valor = document.getElementById(pos3).innerText;
  movimiento(pos1, posicion);
}
function movimiento(inicio,posicion){
  movimient.push(posicion)
  console.log(movimient);
  let elemnt = document.getElementById(inicio);
  let color2 = elemnt.style.backgroundColor;
  let valor2 = document.getElementById(inicio).innerText;
  inicio = inicio.split(".");
  let fila2=inicio[0];
  let columna2=inicio[1];
  document.getElementById("movimientos").innerText=movimient;
  if (fila == fila2){
    if ((clase!=color2)&&(valor!=valor2)){
      pos1=posinicial;
      movimient=[];
      movimientos=0;
      document.getElementById("movimientos").innerText=movimient;
      document.getElementById("jugadas").innerText="Has realizado "+(movimientos)+" movimientos";
      fallos++;
      if(fallos==4){alert("Game Over")
      fallos=0;
    }
  }
    else if (clase==color2){
        document.getElementById("jugadas").innerHTML="Has realizado "+(movimientos+1)+" movimientos";
        movimientos++;
        if (pos3==pos2){
          alert("Has Ganado con "+movimientos+" movimientos");
          pos1=posinicial;
          movimient=[];
          movimientos=0;
          document.getElementById("movimientos").innerText=movimient;
          document.getElementById("jugadas").innerText="Has realizado "+(movimientos)+" movimientos";
        }

        else{
          pos1=pos3;
        }
      }
    else if (valor==valor2){
      document.getElementById("jugadas").innerHTML="Has realizado "+(movimientos+1)+" movimientos";
      movimientos++;
        if (pos3==pos2){
            alert("Has Ganado con "+movimientos+" movimientos");
            pos1=posinicial;
            movimient=[];
            movimientos=0;
            document.getElementById("movimientos").innerText=movimient;
          document.getElementById("jugadas").innerText="Has realizado "+(movimientos)+" movimientos";
        }
        else{
          pos1=pos3;
        }
      }
    }
    else if (columna == columna2){
      if ((clase!=color2)&&(valor!=valor2)){
        pos1=posinicial;
        movimient=[];
        movimientos=0;

        document.getElementById("movimientos").innerText=movimient;
        document.getElementById("jugadas").innerText="Has realizado "+(movimientos)+" movimientos";
        fallos++;
        if(fallo==4){alert("Game Over");}
      }
      else if (clase==color2){
        document.getElementById("jugadas").innerHTML="Has realizado "+(movimientos+1)+" movimientos";
        movimientos++;
        if (pos3==pos2){
          alert("Has Ganado con "+movimientos+" movimientos");
          pos1=posinicial;
          movimient=[];
          movimientos=0;
          document.getElementById("movimientos").innerText=movimient;
          document.getElementById("jugadas").innerText="Has realizado "+(movimientos)+" movimientos";
        }
        else{
          pos1=pos3;
        }
      }

      else if (valor==valor2){
        document.getElementById("jugadas").innerHTML="Has realizado "+(movimientos+1)+" movimientos";
        movimientos++;

        if (pos3==pos2){
          alert("Has Ganado con "+movimientos+" movimientos");
          pos1=posinicial;
          movimient=[];
          movimientos=0;
          document.getElementById("movimientos").innerText=movimient;
          document.getElementById("jugadas").innerText="Has realizado "+(movimientos)+" movimientos";
        }
        else{
          pos1=pos3;
        }
      }
    }

    else{
      pos1=posinicial;
      movimient=[];
      movimientos=0;
      document.getElementById("movimientos").innerText=movimient;
      document.getElementById("jugadas").innerText="Has realizado "+(movimientos)+" movimientos";
      fallos++;
      if(fallos==4){alert("Tu eres tonto")
      fallos=0;
      }
    }
  }


pintar();
random();
