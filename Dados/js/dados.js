"use strict";

let resultados = [0,0,0,0,0,0,0,0,0,0,0];
const tds = document.querySelectorAll('#resultado td');
const veces = document.getElementById('veces');
const caras = 6;

function obtenerValor(){
  return Math.floor(Math.random() * caras + 1);
}

function tirarDados() {
  let num1 = obtenerValor();
  let num2 = obtenerValor();
  let dado1 = document.getElementById("primerDado");
  dado1.src = "images/dado"+num1+".png"
  let dado2 = document.getElementById("segundoDado");
  dado2.src = "images/dado"+num2+".png"
  console.log(num1 + " - " + num2);
  let resultado = num1 + num2;
  resultados[resultado - 2] += 1;
  console.log(resultados);
  mostrarResultados(resultados);
}

function tirarXVeces(cantidad) {
    let v = (cantidad === undefined) ? veces.value : cantidad;
    for (var i = 0; i < v; i++) {
      tirarDados();
    }
}

function mostrarResultados(resultados) {
  for (let i = 0; i < tds.length; i++) {
    tds[i].innerHTML = resultados[i];
  }
}
