<?php
    $title = "Contato";
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
                <h1 id="clique_exercicio">Contato</h1>
                <p>Fale com a nossa empresa</p>
                <div>
                    <form action="" method="get" id="form_exercicio">
                        <div>
                            <label for="form_nome">Digite seu nome</label>
                            <input type="text" id="form_nome" name="nome">
                        </div>
                        <div>
                            <label for="form_email">Digite seu e-mail</label>
                            <input type="text" id="form_email" name="email">
                        </div>
                        <div>
                            <label for="form_mensagem">Digite sua mensagem</label>
                            <textarea id="form_mensagem" placeholder="Digite a mensagem completa" name="mensagem"></textarea>
                        </div>
                        <button type="submit" id="botao">Enviar via botão</button>
                        <input type="submit" value="Enviar via atributo do input">
                    </form>
                </div>
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