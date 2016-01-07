var semafore = false;
function dado1(num){
    if(semafore==false){
        var textoResul = document.getElementById("txtResul");
        var dado = document.getElementById("1");
        dado.style.visibility="hidden";
        textoResul.value += num;
        semafore = true;
    }
}
function dado2(num){
    if(semafore==false){
        var textoResul = document.getElementById("txtResul");
        var dado = document.getElementById("2");
        dado.style.visibility="hidden";
        textoResul.value += num;
        semafore = true;
    }
}
function dado3(num){
    if(semafore==false){
        var textoResul = document.getElementById("txtResul");
        var dado = document.getElementById("3");
        dado.style.visibility="hidden";
        textoResul.value += num;
        semafore = true;
    }
}
function dado4(num){
    if(semafore==false){
        var textoResul = document.getElementById("txtResul");
        var dado = document.getElementById("4");
        dado.style.visibility="hidden";
        textoResul.value += num;
        semafore = true;
    }
}
function dado5(num){
    if(semafore==false){
        var textoResul = document.getElementById("txtResul");
        var dado = document.getElementById("5");
        dado.style.visibility="hidden";
        textoResul.value += num;
        semafore = true;
    }
}
function añadirOp(op){
    if(semafore){
        var textoResul = document.getElementById("txtResul");
        textoResul.value += op;
        semafore = false;
    }
}
function calcular(){
    var textoResul = document.getElementById("txtResul");
    textoResul.value = eval(textoResul.value);
}