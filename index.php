<?php
session_start();
require_once __DIR__ . "/source/autoload.php";
use source\classes\Order;
use source\classes\Addres;
use source\classes\Product;
use source\classes\Client;
if(count($_COOKIE) > 0) {
} else {
  //header("Location: ./modals/register.html");
}
?>

<!Doctype html>
<html lang="pt-br">
<meta charset="utf-8">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="Style/style.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
      <!--Chama o Header-->
    <?php include_once __DIR__ . "/models/header.html"; ?> 
    <body>
    <section> 
      <!--  Criando o Slider  -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./Imagens/Restaurante.png" class="d-block w-100 " alt="Frente do restaurante"width="800"height="500">
          </div>
          <div class="carousel-item">
            <img src="./Imagens//buffet.jpg" class="d-block w-100" alt="buffet do restaurante"width="800"height="500">
          </div>
          <div class="carousel-item">
            <img src="./Imagens/sobremesas.jpg" class="d-block w-100" alt="sobremesas"width="800"height="500">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- fim slider -->
        <!--Exposição dos produtos vendidos -->

        <div class="exposicao">
            <h1>MARMITAS</h1>
            <h1>Peça as marmitas pelo site agora mesmo: </h1>
            <div class="containera">

                <div class="pequena">
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

                <div class="media">
                    <h2>Marmita média</h2>
                    <img src="Imagens/Marmita_pequena.png" alt="marmita média">
                    <h3>Descrição:</h3>
                    <p>A marmita todos os dias vai vir com arroz, feijão, batata frita e a mistura depende do dia</p>
                    <button class="btn btn-danger">Adicionar ao carrinho</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Escolher personalizada</button>
                </div>

                <div class="grande">
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


</body>


</html>
<?php
include_once __DIR__."/models/footer.html";
include_once __DIR__ . "/modals/custom_Lunchbox.html";
