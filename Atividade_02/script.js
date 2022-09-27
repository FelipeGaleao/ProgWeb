
let cor_original_quadrado;

window.onload = function(){
    let quadrado = document.getElementById("quadrado");
    cor_original_quadrado = quadrado.style.backgroundColor;
}

function retornar_cor_original() {
    document.getElementById("quadrado").style.backgroundColor = cor_original_quadrado;
}

function mudar_cor_quadrado(){
    document.getElementById("quadrado").style.backgroundColor = "rgb(0, 0, 0)";
}

