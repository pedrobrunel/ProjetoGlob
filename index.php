<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/login.css">
    <link rel="stylesheet" href="estilos/slider.css">

    <script src="js/slider.js" async></script>

</head>
<body>

    <div class="divideTela esquerda">
        <div class="centeredSlide">
            
            <section class="slideshow-container">
                <ul class="slides">
                    <li class="slide fade" data-active>
                        <img src="https://plus.unsplash.com/premium_photo-1683140811960-956e5bbf858e?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8Y2FydG9vbnxlbnwwfHwwfHx8MA%3D%3D"/>
                    </li>
                    <li class="slide fade">
                        <img src="https://plus.unsplash.com/premium_photo-1681488159219-e0f0f2542424?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGNhcnRvb258ZW58MHx8MHx8fDA%3D"/>
                    </li>
                    <li class="slide fade">
                        <img src="https://plus.unsplash.com/premium_photo-1681426472026-60d4bf7b69a1?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y2FydG9vbnxlbnwwfHwwfHx8MA%3D%3D"/>
                    </li>
                </ul>

                <button class="previous-button" data-change-slide-button="previous">&lt;</button>
                <button class="next-button" data-change-slide-button="next">&gt;</button>
            </section>

        </div>
    </div>

    <div class="divideTela direita">
        <div class="centeredLogin">
            <form action="" method="POST">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email">
                <label for="senha"> Senha</label>
                <input type="password" id="senha" name="senha">
                <center><button type="submit" id="botao" value="Entrar">
                    <strong>Entrar</strong>
                </button></center>
            </form>
        </div>
    </div>
    
</body>
</html>