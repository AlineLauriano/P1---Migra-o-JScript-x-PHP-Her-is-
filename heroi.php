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
            if(!empty($_POST['nome_heroi'])){
                $nome_heroi = strtolower($_POST['nome_heroi']);
                $universo = strtolower($_POST['universo']);
                if($universo=="dc"){
                    switch($nome_heroi){
                        case "batman":
                            echo  "<img src='imgs/dc/batman.jpg'>";
                            echo "<a href='index.php' class='botao'>Voltar</a>";
                            break;
                        case "mulher maravilha":
                            echo "<img src='imgs/dc/mulher-maravilha.jpg'>";
                            echo "<a href='index.php' class='botao'>Voltar</a>";
                            break;
                        default:
                            echo "Herói inválido.";
                            break;
                    }
                }else if($universo=="marvel"){
                    switch($nome_heroi){
                        case "homem aranha":
                            echo "<img src='imgs/marvel/homem-aranha.jpg'>";
                            echo "<a href='index.php' class='botao'>Voltar</a>";
                            break;
                        case "homem de ferro":
                            echo "<img src='imgs/marvel/homem-de-ferro.jpg'>";
                            echo "<a href='index.php' class='botao'>Voltar</a>";
                            break;
                        default:
                            echo "Herói inválido.";
                            break;
                    }
                }

                ?>

                <?php
            }else{
                echo "Digite um herói válido";
            }

   
        ?>

    </main>
</body>
</html>