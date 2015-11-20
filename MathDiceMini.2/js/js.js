var semafore = false;
function dado1(num){
    var textoResul = document.getElementById("txtResul");
    var dado = document.getElementById("1");
    dado.style.visibility="hidden";
    textoResul.value += num;
}
function dado2(num){
    var textoResul = document.getElementById("txtResul");
    var dado = document.getElementById("2");
    dado.style.visibility="hidden";
    textoResul.value += num;
}
function dado3(num){
    var textoResul = document.getElementById("txtResul");
    var dado = document.getElementById("3");
    dado.style.visibility="hidden";
    textoResul.value += num;
}
function dado4(num){
    var textoResul = document.getElementById("txtResul");
    var dado = document.getElementById("4");
    dado.style.visibility="hidden";
    textoResul.value += num;
}
function dado5(num){
    var textoResul = document.getElementById("txtResul");
    var dado = document.getElementById("5");
    dado.style.visibility="hidden";
    textoResul.value += num;
}
function añadirOp(op){
    var textoResul = document.getElementById("txtResul");
    textoResul.value += op;
}
function calcular(){
    var textoResul = document.getElementById("txtResul");
    textoResul.value = eval(textoResul.value);
}