/*
Implemente um programa que tenha uma matriz de ordem 2x2, peça para o usuário popular esta matriz , calcule a determinante da matriz e mostre para o usuário o resultado.
*/

function matriz(){
    var matriz =[[],[]];

    for(var i=0; i<2; i++){
        for(var j=0; j<2; j++){
            matriz[i][j] = parseInt(prompt("Digite o valor da matriz na linha " + i + " na coluna " + j));
        }
    }

    document.write(getDeterminant(matriz));
}

function getDeterminant(matriz){
    var d = matriz[0][0] * matriz[1][1] - matriz[0][1] * matriz[1][0];
    return d;
}

matriz();