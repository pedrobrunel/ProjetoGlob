<?php

include('../protect.php');

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
<nav>
    <div class="divMenuCima"> <strong>Mundo</strong></div>
    <div class="divMenuCima"> <strong>Jogos</strong></div>
    <div class="divMenuCima"> <strong>Publicações</strong></div>
    <div class="divMenuCima"> <strong>Biblioteca</strong></div>
    <div class="divMenuCima"> <strong>Jornal</strong></div>
    <div class="divMenuCima"> <strong>TV Glob</strong></div>
    <div class="divMenuCima"> <strong>Olá, <?php echo $_SESSION['nome']; ?></strong></div>
    <div class="divMenuCima"> <strong><a href="logout.php">Sair</a></strong></div>
</nav>


<script>
    console.log("entrou 1:");

document.addEventListener("DOMContentLoaded", function () {
const divsMenuCima = document.querySelectorAll(".divMenuCima");
console.log("entrou 2");

divsMenuCima.forEach(div => {
    console.log("Elemento encontrado:"); // Testa se os elementos existem
    div.addEventListener("click", function () {
        alert("oi");
    });
});
});

</script>


</body>
</html>
