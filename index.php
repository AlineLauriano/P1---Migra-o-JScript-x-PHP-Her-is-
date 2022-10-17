<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Heróis Marvel X Heróis Dc - PHP</title>
</head>
<body>
    <main>
        <section class="sessao">
            <h1>Escolha o universo de heróis que desejar</h1>
            <form action="universo.php" method="post">
                <input type="radio" class="caixa" name="universo" value="Marvel">Marvel<br>
                <input type="radio" class="caixa" name="universo" value="DC">DC<br>
                <input type="submit" value="Confirmar" class="botao">
            </form>
        </section>
    </main>
</body>
</html>