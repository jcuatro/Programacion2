var nfila=0;

var ncolumna=0;

while(nfila <=0 || nfila >=7){

  nfila = Number(prompt ("Indica la posición de la fila"));

  if (nfila >= 1 && nfila <=6){


    while(ncolumna <=0 || ncolumna >=7){

      ncolumna = Number(prompt ("Indica la posición de la columna"));

      if (ncolumna >= 1 && ncolumna <=6){


        document.write("Fila: "+nfila);
        document.write("<br>");
        document.write("Columna: "+ncolumna);

      }

      else {alert("La posición: "+ncolumna+" no existe");}

    }

  }

  else {alert("La posición: "+nfila+" no existe");}

  }
