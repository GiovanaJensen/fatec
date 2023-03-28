/*4. Implemente um programa que tenha um matriz de ordem dada pelo usuário, popule a matriz com valores dados pelo usuário e mostre o menor valor da matriz. O menor valor deve ser procurado após o preenchimento da matriz.*/

var linhas = parseInt(prompt("Determine o número de linhas da matriz: "));
var colunas = parseInt(prompt("Determine o número de colunas: "));

function matriz(linhas, colunas){

  var matriz =[];

  for(var i = 0; i < linhas; i++){
    matriz.push([]);
    for(var j = 0; j < colunas; j++){
      matriz[i][j] = parseInt(prompt("Digite o valor desejado para a posição " + i + " " + j));
    }
  }

  return matriz;
}

function menorValor(matriz){
  var ehMenor = matriz[0][0];
  for(var i = 0; i < matriz.length; i++){
    for(var j = 0; j < matriz[i].length; j++){
      if (matriz[i][j] < ehMenor){
        ehMenor = matriz[i][j];
      }
    }
  }
  return ehMenor;
}

var matriz = matriz(linhas,colunas);

console.log("O menor valor presente na matriz é: " + menorValor(matriz));