<?php
require_once __DIR__ . "/source/autoload.php";
use source\classes\Order;
use source\classes\Addres;
use source\classes\Product;
use source\classes\Client;


//setcookie($cookieName,$cookieValue , time()+3600);
if(!isset($_COOKIE['login'])){
    // chamando o form de registro
    include_once __DIR__."/modals/register.html";
    echo "
    <script>
        $( document ).ready(function() {
            $('#staticBackdro').modal('show');
        });
    </script>";
    // pegando o endereço
    $number = $_POST['inputNumber'];
    $street = $_POST['inputStreet'];
    $district = $_POST['inputDistrict'];
    $CEP = $_POST['inputCEP'];
    // instanciando um endereço
    $addres = new Addres($number,$street,$district,$CEP);
    // pegando os dados do cliente
    $name = $_POST['inputName'];
    $lastname = $_POST['inputLastname'];
    $cellphone = $_POST['inputCellphone'];
    $mail = $_POST['inputMail'];
    //instanciando um client
    $client = new Client($name,$lastname,$addres,$cellphone,$mail);
    // criando os cookies do client
    $cookieName = "login";
    $addresConverted = $addres->string();
    $cookieValue = $client->conversionToString($addresConverted);


    setrawcookie($cookieName,$cookieValue , time()+3600);

    
}
//setcookie($cookieName, '', time()-3600);

if(count($_COOKIE) > 0) {
    echo "Cookies estão ativos.";
} else {
    echo "Cookies não estão ativos.";
}

/**$product = new Product();**/
/**$addres = new Addres(12,"rua antonio","coqueiral","8580-6252");
$client = new Client($name,$lastname,$addres,$cellphone,$mail);
$order = new Order($product,$client,21);**/
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
        <?=include_once __DIR__ . "/models/header.html"?> 
        
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

