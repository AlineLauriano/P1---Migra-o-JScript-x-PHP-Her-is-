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
        <?php
            if(!empty($_POST['universo'])){
                $universo = $_POST['universo'];
                ?>
                <section class="sessao">
                    <h1>Qual o nome do seu herói favorito ?</h1>
                    <form action="heroi.php" method="post">
                        <input type="hidden" name="universo" value="<?php echo $universo; ?>" >
                        <input type="text" name="nome_heroi" class="texto"><br>
                        <input type="submit" class="botao">
                    </form>
                </section>
                <?php
            }else{
                ?>
                <section class="sessao">
                    <h3>Selecione o Universo válido!</h3><br>
                    <a href="index.php" class="botao">Voltar</a>
                </section>
                <?php
            }
        ?>
    </main>
</body>
</html>