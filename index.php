<?php
require_once __DIR__ . "/source/autoload.php";
use source\classes\Order;
use source\classes\Addres;
use source\classes\Product;
use source\classes\Client;
$client=10;
$cookieName = "login";
$cookieValue = $client;
//setcookie($cookieName,$cookieValue , time()+3600);
if(!isset($_COOKIE[$cookieName])){
    include_once __dir__."/modals/register.html";

}


if(count($_COOKIE) > 0) {
    echo "Cookies estão ativos.";
} else {
    echo "Cookies não estão ativos.";
}

/**$product = new Product();
$addres = new Addres(12,"rua antonio","coqueiral","8580-6252");
$client = new Client("fiat","uno",$addres);
$order = new Order($product,$client,21);
$order->orderData(1);**/


?>

<!Doctype html>
<html lang="pt-br">
<meta charset="utf-8">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="Style/style.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body>

        <!--Chama o Header-->
        <?=include_once __DIR__ . "/modals/header.html"?> 
        
    <section>
        <div>
            <ul class="slider"> <!-- Criando o Slider -->
                <li>
                    <input type="radio" id="slide1" name="slide" checked>
                    <label for="slide1"></label>
                    <img src="./Imagens/Restaurante.png">
                </li>
                <li>
                    <input type="radio" id="slide2" name="slide" checked>
                    <label for="slide2"></label>
                    <img src="./Imagens/Teste2.png" alt="Icone do restaurante">
                </li>
            </ul>
        </div>
        <!--Exposição dos produtos vendidos -->
        <div>
            <h1>MARMITAS</h1>
            <h1>Peça as marmitas pelo site agora mesmo: </h1>
            <div class="containera">

                <div>
                    <h2>Marmita pequena</h2>
                    <img src="Imagens/Marmita_pequena.png" alt="marmita pequena">
                    <div class="descrip">
                        <h3>Descrição:</h3>
                        <p>A marmita todos os dias vai vir com arroz, feijão, batata frita e a mistura depende do dia
                        </p>
                        <button class="btn btn-danger">Adicionar ao carrinho</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Escolher personalizada</button>
                    </div>
                </div>

                <div>
                    <h2>Marmita média</h2>
                    <img src="Imagens/Marmita_pequena.png" alt="marmita média">
                    <h3>Descrição:</h3>
                    <p>A marmita todos os dias vai vir com arroz, feijão, batata frita e a mistura depende do dia</p>
                    <button class="btn btn-danger">Adicionar ao carrinho</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Escolher personalizada</button>
                </div>

                <div>
                    <h2>Marmita Grande</h2>
                    <img src="Imagens/Marmita_pequena.png" alt="marmita grande">
                    <h3>Descrição:</h3>
                    <p>A marmita todos os dias vai vir com arroz, feijão, batata frita e a mistura depende do dia</p>
                    <button class="btn btn-danger">Adicionar ao carrinho</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Escolher personalizada</button>
                </div>

            </div>

        </div>

    </section>
    <!-- rodapé do site  -->
    
    <?= include_once __DIR__."/models/footer.html";?>
    


</body>
<?php include_once __DIR__ . "/modals/custom_Lunchbox.html"?>
</html>
<?php

