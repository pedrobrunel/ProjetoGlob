<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estilo.css"> 
    

    <script>
        function incluirMenu(arquivo, elemento){
            fetch(arquivo)
                .then(response => response.text())
                .then(data => {
                    document.querySelector(elemento).innerHTML = data;
                    
                    // Agora os elementos existem no DOM, então podemos adicionar eventos:
                    const divsMenuCima = document.querySelectorAll(".divMenuCima");               
                    const divsMenuPapel = document.querySelectorAll(".barrinhaDivsMenu");       
                    // Criar o áudio uma única vez (evita múltiplas instâncias)
                    const audio = new Audio("sons/MenuHover.mp3");
                    const audioPapel = new Audio("sons/barulhoPapel.mp3")

                    divsMenuCima.forEach(div => {
                        div.addEventListener("mouseenter", function () {
                            audio.currentTime = 0; // Reinicia o som
                            audio.play().catch(error => console.log("Erro ao tocar áudio:", error)); // Toca o som
                        });
                    });
                

                divsMenuPapel.forEach(div => {
                        div.addEventListener("mouseenter", function () {
                            audioPapel.currentTime = 0; // Reinicia o som
                            audioPapel.play().catch(error => console.log("Erro ao tocar áudio:", error)); // Toca o som
                        });
                    });
                });
        
            }
    </script>

<script src="https://unpkg.com/@rive-app/canvas@2.10.1"></script>
    
</head>
<body onload="incluirMenu('menus/menuCima.php', '#menuCima'); incluirMenu('menus/menuBaixo.html', '#menuBaixo');">

    <div id="menuCima"></div>
    
    
    <div class="divDoMeio">
        <div class="div1" height="100%">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const r = new rive.Rive({
                        src: "imagens/outromundo.riv", // Caminho do arquivo .riv
                        canvas: document.getElementById("riveCanvas"),
        loop: true,
        stateMachines: ["State Machine 1"], // Nome do State Machine
        autoplay: true,
                    });
                });
            </script>

<canvas id="riveCanvas" width="700" height="700"></canvas>

            
        </div>

        
        <div class="div2">
            <img class="imgDivHome" src="imagens/inventarioHome.png" height="100%" >   
            <div class="barrinhaDivsMenu"><h2>Inventário</div>      
        </div>

        <div class="div3">
        <img class="imgDivHome" src="imagens/bibliotecaHome.png" height="100%" >
        <div class="barrinhaDivsMenu"><h2>Biblioteca</div>
        </div>
        
        <div class="div4">
            <img class="imgDivHome" src="imagens/lojaHome.png" height="100%" >
            <div class="barrinhaDivsMenu"><h2>Lojas</div>
        </div>
        <div class="div5">
            <img class="imgDivHome" src="imagens/tv-Glob-2.png" height="100%" >
            <div class="barrinhaDivsMenu"><h2>Programas de TV</h2></div>
        </div>

</div>

<div id="menuBaixo"></div>


</body>
</html>