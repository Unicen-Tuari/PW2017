"use strict";
function tirarDados() {
  let num1 = Math.floor(Math.random()*6+1);
  let num2 = Math.floor(Math.random()*6+1);
  let dado1 = document.getElementById("primerDado");
  dado1.src = "images/dado"+num1+".png"
  let dado2 = document.getElementById("segundoDado");
  dado2.src = "images/dado"+num2+".png"
  console.log(num1 + " - " + num2);
}
