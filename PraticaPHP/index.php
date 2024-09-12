<?php
    $title = "Pratica PHP";
    include "includes/header.php";
?>

<?php
    $nome = "Jhonathan";
    $saudacao = "Olá";
    $idade = 20;
?>

<h1>Olá <?php echo $nome; ?></h1>
<p>Seja bem vindo a página da minha empresa!</p>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
        <main>
            <div>
                <h1>Bem vindo(a)</h1>
                <p>Nossa empresa conta com a melhor equipe de desenvolvedores da cidade Joinville e região</p>
            </div>
        </main>
        <footer>
            <p class="text-center">Todos os direitos reservados</p>
        </footer>
    </div>
</body>
</html>

<?php
    include "includes/footer.php";
?>