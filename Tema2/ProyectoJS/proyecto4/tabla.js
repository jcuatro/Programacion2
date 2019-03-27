var body = document.getElementsByTagName("body")[0];
 var tabla   = document.createElement("table");
 var tblBody = document.createElement("tbody");
 var content1 = new Array (2,6,5,4,5,5);
 var content2 = new Array (4,6,6,3,2,6);
 var content3 = new Array (3,4,1,2,6,3);
 var content4 = new Array (1,4,2,5,6,1);
 var content5 = new Array (5,5,3,2,2,1);
 var content6 = new Array (4,1,4,3,1,3);

 var color1 = new Array ("blue","yellow","pink","red","yellow","blue");
 var color2 = new Array ("blue","white","pink","red","yellow","blue");
 var color3 = new Array ("blue","yellow","blue","red","red","pink");
 var color4 = new Array ("pink","white","pink","red","green","red");
 var color5 = new Array ("green","white","green","green","white","yellow");
 var color6 = new Array ("green","white","pink","white","green","yellow");

 for (var i = 0; i <= 0; i++) {

   var hilera = document.createElement("tr");

     for (var j = 0; j <= 5; j++) {

       var celda = document.createElement("td");
       var textoCelda = document.createTextNode(content1[j]);
       celda.style.backgroundColor = color1[j];

       celda.appendChild(textoCelda);
       hilera.appendChild(celda);

   }
   tblBody.appendChild(hilera);
 }
 for (var i = 0; i <= 0; i++) {
   var hilera = document.createElement("tr");
     for (var j = 0; j <= 5; j++) {

       var celda = document.createElement("td");
       var textoCelda = document.createTextNode(content2[j]);
       celda.style.backgroundColor = color2[j];

       celda.appendChild(textoCelda);
       hilera.appendChild(celda);

   }
   tblBody.appendChild(hilera);
 }
 for (var i = 0; i <= 0; i++) {
   var hilera = document.createElement("tr");
     for (var j = 0; j <= 5; j++) {

       var celda = document.createElement("td");
       var textoCelda = document.createTextNode(content3[j]);
       celda.style.backgroundColor = color3[j];


       celda.appendChild(textoCelda);
       hilera.appendChild(celda);

   }
   tblBody.appendChild(hilera);
 }
 for (var i = 0; i <= 0; i++) {
   var hilera = document.createElement("tr");
     for (var j = 0; j <= 5; j++) {

       var celda = document.createElement("td");
       var textoCelda = document.createTextNode(content4[j]);
       celda.style.backgroundColor = color4[j];

       celda.appendChild(textoCelda);
       hilera.appendChild(celda);

   }
   tblBody.appendChild(hilera);
 }
 for (var i = 0; i <= 0; i++) {
   var hilera = document.createElement("tr");
     for (var j = 0; j <= 5; j++) {

       var celda = document.createElement("td");
       var textoCelda = document.createTextNode(content5[j]);
       celda.style.backgroundColor = color5[j];

       celda.appendChild(textoCelda);
       hilera.appendChild(celda);

   }
   tblBody.appendChild(hilera);
 }
 for (var i = 0; i <= 0; i++) {
   var hilera = document.createElement("tr");
     for (var j = 0; j <= 5; j++) {

       var celda = document.createElement("td");
       var textoCelda = document.createTextNode(content6[j]);
       celda.style.backgroundColor = color6[j];

       celda.appendChild(textoCelda);
       hilera.appendChild(celda);

   }
   tblBody.appendChild(hilera);
 }

 tabla.appendChild(tblBody);

 body.appendChild(tabla);

 tabla.setAttribute("border","1");
 tabla.setAttribute("height","800");
 tabla.setAttribute("width","800");
