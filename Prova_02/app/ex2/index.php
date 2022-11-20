<!DOCTYPE html>
<html>

<head>
    <?php
    // Exibir hora 
    date_default_timezone_set('America/Sao_Paulo');
    ?>
    <title>
        <?php echo 'Prova 02 - Questão 2 - ' . date('d/m/Y H:i:s'); ?>
    </title>
</head>

<style>
    #container {
        width: 100vw;
        height: 100vh;
        background-color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #corpo-calculadora {
        width: 500px;
        height: 550px;
        background-color: #e3e3e3;
        display: flex;
        flex-direction: column;
        border-radius: 15px;
    }

    #valores_calculadora {
        height: 120px;
        background-color: white;
        border: 1.5px solid #d3d3d3;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        display: flex;
        justify-content: end;
        padding-right: 40px;
        font-size: 28px;
        margin-bottom: 3px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }

    #teclado-calculadora {
        width: 100%;
        height: 250px;
        background-color: #e3e3e3;
        display: flex;
        margin-top: 5vh;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    button {
        background-color: purple;
        color: white;
        border: none;
        width: 64px;
        height: 64px;
        margin-bottom: 10px;
        font-size: 24px;
        border-radius: 16px;
    }
</style>


<body>
    <div id="container">
        <div>
            <h1 style="color: white;">
                <?php echo 'Prova 02 - Questão 2 - ' . date('d/m/Y H:i:s'); ?>
            </h1>
        </div>
        <div id="corpo-calculadora">
            <div id="valores_calculadora">
                <h1 id="valor_a_somar"></h1>
            </div>
            <div id="teclado-calculadora">
                <div id="linha-1">
                    <button id="btn-1">1</button>
                    <button id="btn-2">2</button>
                    <button id="btn-3">3</button>
                    <button id="btn-4">4</button>
                </div>
                <div id="linha-2">
                    <button id="btn-5">5</button>
                    <button id="btn-6">6</button>
                    <button id="btn-7">7</button>
                    <button id="btn-8">8</button>
                </div>
                <div id="linha-3">
                    <button id="btn-9">9</button>
                    <button id="btn-0">0</button>
                    <button id="btn-+" style="background-color: green; color: white">+</button>
                    <button id="btn--" style="background-color: rgb(0, 0, 0); color: white">-</button>
                </div>
                <div id="linha-4">
                    <button id="btn-/" style="background-color: orange;">/</button>
                    <button id="btn-*" style="background-color: navy;">*</button>
                    <button id="btn-=" style="background-color: white; color: black">=</button>
                    <button id="btn-C" style="background-color: red; color: white;">C</button>
                </div>
                <div id="linha-5">
                    <button id="btn-!" style="background-color: rgb(0, 0, 0); color: white">!</button>
                    <button id="btn-^" style="background-color: rgb(0, 0, 0); color: white">^</button>
                    <button id="btn-sqrt" style="background-color: rgb(0, 0, 0); color: white">√</button>
                    <button id="btn-." style="background-color: rgb(0, 0, 0); color: white">.</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        let visor_calculadora = document.getElementById("valor_a_somar");

        let btn_1 = document.getElementById("btn-1");
        let btn_2 = document.getElementById("btn-2");
        let btn_3 = document.getElementById("btn-3");
        let btn_4 = document.getElementById("btn-4");
        let btn_5 = document.getElementById("btn-5");
        let btn_6 = document.getElementById("btn-6");
        let btn_7 = document.getElementById("btn-7");
        let btn_8 = document.getElementById("btn-8");
        let btn_9 = document.getElementById("btn-9");
        let btn_0 = document.getElementById("btn-0");

        btn_1.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "1";
        }

        btn_2.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "2";
        }

        btn_3.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "3";
        }

        btn_4.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "4";
        }

        btn_5.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "5";
        }

        btn_6.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "6";
        }

        btn_7.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "7";
        }

        btn_8.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "8";
        }

        btn_9.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "9";
        }

        btn_0.onclick = function () {
            visor_calculadora.innerHTML = visor_calculadora.innerHTML + "0";
        }


        let btn_soma = document.getElementById("btn-+");
        let btn_subtracao = document.getElementById("btn--");
        let btn_multiplicacao = document.getElementById("btn-*");
        let btn_divisao = document.getElementById("btn-/");
        let btn_igual = document.getElementById("btn-=");
        let btn_limpar = document.getElementById("btn-C");
        let btn_fatorial = document.getElementById("btn-!");
        let btn_potencia = document.getElementById("btn-^");
        let btn_raiz = document.getElementById("btn-sqrt");
        let btn_ponto = document.getElementById("btn-.");

        let valor_calculado = 0;

        btn_fatorial.onclick = function () {
            let valor = visor_calculadora.innerHTML;
            let fatorial = 1;
            for (let i = 1; i <= valor; i++) {
                fatorial = fatorial * i;
            }
            visor_calculadora.innerHTML = fatorial;
        }
        btn_potencia.onclick = function () {
            let valor = visor_calculadora.innerHTML;
            let potencia = 1;
            for (let i = 1; i <= valor; i++) {
                potencia = potencia * valor;
            }
            visor_calculadora.innerHTML = potencia;
        }
        btn_raiz.onclick = function () {
            let valor = visor_calculadora.innerHTML;
            let raiz = 1;
            for (let i = 1; i <= valor; i++) {
                raiz = Math.sqrt(valor);
            }
            visor_calculadora.innerHTML = raiz;
        }
        btn_ponto.onclick = function () {
            visor_calculadora.innerHTML += ".";
        }

        btn_soma.onclick = function () {
            visor_calculadora.innerHTML += "+";
        }

        btn_subtracao.onclick = function () {
            visor_calculadora.innerHTML += "-";
        }

        btn_multiplicacao.onclick = function () {
            visor_calculadora.innerHTML += "*";
        }

        btn_igual.onclick = function () {
            let valor_calculado = eval(visor_calculadora.innerHTML);
            visor_calculadora.innerHTML = valor_calculado;
        }

        btn_limpar.onclick = function () {
            visor_calculadora.innerHTML = "";
        }
    </script>
</body>

</html>