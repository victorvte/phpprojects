var semafore = false;
var vista = false;
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
function restaurar(){
    var textoResul = document.getElementById("txtResul");
    textoResul.value = "";
    var dado1 = document.getElementById("1");
    dado1.style.visibility="initial";
    var dado2 = document.getElementById("2");
    dado2.style.visibility="visible";
    var dado3 = document.getElementById("3");
    dado3.style.visibility="visible";
    var dado4 = document.getElementById("4");
    dado4.style.visibility="visible";
    var dado5 = document.getElementById("5");
    dado5.style.visibility="visible";
    semafore = false;
}
function recargar(){
    window.location.replace("https://phpprojects-victorvte.c9.io/MathDice/juego.php");
}
function cambiarVista(x){
    window.location.href = "https://phpprojects-victorvte.c9.io/MathDice/juego.php?vista=" + x; 
}
function myJavascriptFunction() { 
  var javascriptVariable = "John";
  window.location.href = "myphpfile.php?name=" + javascriptVariable; 
}