document.getElementById("btn_inicio-sesion").addEventListener("click", iniciosesion);
document.getElementById("btn_registro").addEventListener("click", registro);
window.addEventListener("resize", anchopagina);

var f_inicio = document.querySelector(".finicio");
var f_registro = document.querySelector(".fregistro");
var inicio__registro = document.querySelector(".inicio_registro");
var caja__inicio = document.querySelector(".caja_inicio");
var caja__registro = document.querySelector(".caja_registro");

function anchopagina(){

    if (window.innerWidth > 850){
        caja__registro.style.display = "block";
        caja__inicio.style.display = "block";
    }else{
        caja__registro.style.display = "block";
        caja__registro.style.opacity = "1";
        caja__inicio.style.display = "none";
        f_inicio.style.display = "block";
        inicio__registro.style.left = "0px";
        f_registro.style.display = "none";   
    }
}

anchopagina();



function iniciosesion(){
    if (window.innerWidth > 850){
        f_inicio.style.display = "block";
        inicio__registro.style.left = "10px";
        f_registro.style.display = "none";
        caja__registro.style.opacity = "1";
        caja__inicio.style.opacity = "0";
    }else{
        f_inicio.style.display = "block";
        inicio__registro.style.left = "0px";
        f_registro.style.display = "none";
        caja__registro.style.display = "block";
        caja__inicio.style.display = "none";
    }
}

function registro(){
    if (window.innerWidth > 850){
        f_registro.style.display = "block";
        inicio__registro.style.left = "410px";
        f_inicio.style.display = "none";
        caja__registro.style.opacity = "0";
        caja__inicio.style.opacity = "1";
    }else{
        f_registro.style.display = "block";
        inicio__registro.style.left = "0px";
        f_inicio.style.display = "none";
        caja__registro.style.display = "none";
        caja__inicio.style.display = "block";
        caja__inicio.style.opacity = "1";
    }
}