<?php
require_once __DIR__ . "/source/autoload.php";
use source\classes\Client;
use source\classes\Addres;
// pegando os dados do cliente
if(isset($_POST['btnSave'])){
  if(!empty($_POST['inputName'])){
    $name = filter_var($_POST['inputName'],FILTER_SANITIZE_STRING);
  }else{
  //  echo "<script>alert(' faltou o nome ');</script>";
}
  if(!empty($_POST['inputLastname'])){
      $lastname = filter_var($_POST['inputLastname'],FILTER_SANITIZE_STRING);
  }else{
     // echo "<script>alert(' faltou o sobrenome ');</script>";
}
  if(!empty($_POST['inputCPF'])){
    $cpf = filter_var($_POST['inputCPF'],FILTER_DEFAULT);
  }else{
    //echo "<script>alert(' faltou o CPF ');</script>";
  }
  if(!empty($_POST['inputCellphone'])){
    $cellphone = filter_var($_POST['inputCellphone'],FILTER_SANITIZE_STRING);
  }else{
    //echo "<script>alert(' faltou o telefone ');</script>";
}
  if(!empty($_POST['inputMail'])){
    $mail = filter_var($_POST['inputMail'],FILTER_VALIDATE_EMAIL);
  }else{
    //echo "<script>alert(' faltou o email ');</script>";
  }
// pegando e testando a senha
if(!empty($_POST['inputPassword'])){
$pass = filter_var($_POST['inputPassword'],FILTER_SANITIZE_STRING);
}else{
   // echo "<script>alert(' faltou a senha ');</script>";
}
if(!empty('inputConfirmPassword')){
$confirmPass = filter_var($_POST['inputConfirmPassword'],FILTER_SANITIZE_STRING);
}else{
   // echo "<script>alert(' faltou a senha confirmada ');</script>"; 
}
if(!empty($pass)&& !empty($confirmPass)){
if($pass != $confirmPass){
    //echo "<script>alert('as senhas não coincidem ');</script>";
}
}
//pegando o endereço
if(!empty($_POST['inputNumber'])){
$number = filter_var( $_POST['inputNumber'],FILTER_DEFAULT);
}else{
    //echo "<script>alert(' faltou a o numero ');</script>"; 
}
if(!empty($_POST['inputStreet'])){
$street = filter_var($_POST['inputStreet'],FILTER_SANITIZE_STRING);
}else{
    //echo "<script>alert(' faltou a rua ');</script>"; 
}
if(!empty($_POST['inputDistrict'])){
    $district = filter_var($_POST['inputDistrict'],FILTER_SANITIZE_STRING);
    }else{
        //echo "<script>alert(' faltou a rua ');</script>"; 
    }
if(!empty($_POST['inputCEP'])){
    $CEP = filter_var($_POST['inputCEP'],FILTER_SANITIZE_STRING);
}else{
    //echo "<script>alert(' faltou o CEP ');</script>"; 
}
}
if(!empty($number)&& !empty($street)&& !empty($district)&& !empty($CEP)){
$addres = new Addres($number,$street,$district,$CEP);
$addresConverted = $addres->conversionToString();
}
if(!empty($name)&& !empty($lastname)&& !empty($addresConverted) && !empty($confirmPass) && !empty ($cpf)){
$client = new Client($name,$lastname,$addresConverted,$cellphone,$mail,$confirmPass,$cpf);  
}
if(isset($client)&& isset($addresConverted)){
if($client->saveInDataBase()){
  echo "salvado com sucesso";
  //header("location: /../index.php");
}else{
echo "error";
}

}
//header("location: /../index.php");
//setcookie($cookieName,'' , time()+3600);
//setcookie($cookieName, '', time()-3600);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    body{
        width: 1000;
        height: 600;
        
    }
    .form-center{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
    .buttons-position{
        display: flex;
      justify-content: center;
      align-items: center;
    }
    form{
        width: 600px;
        height: 600px;
    }
    </style>
</head>
<body>
  <!-- formulário -->
          <!-- formulário dentro do -->
          <div class="form-center"> 
          <form action ="/TCC/register.php" method="POST">
            <!-- name-->
            
            <div class="mb-4 row">
              <label for="name" class="col-sm-2 col-form-label">nome</label>
              <div class="col-sm-10">
                <input type="text"  id="name"name="inputName"class="form-control">
                </div>
                </div>
                <!-- fim name-->

                <!-- lastname-->
                <div class="mb-4 row">
                  <label for="lastname" class="col-sm-2 col-form-label">sobrenome </label>
                  <div class="col-sm-10">
                    <input type="text"  id="lastName"name="inputLastname"class="form-control">
                    </div>
                    </div>
                    <!-- cpf-->
                    <div class="mb-4 row">
                  <label for="CPF" class="col-sm-2 col-form-label">CPF </label>
                  <div class="col-sm-10">
                    <input type="text"  id="CPF"name="inputCPF"class="form-control">
                    </div>
                    </div>
                    <!-- fim cpf-->
                <!-- fim lastname-->
                <!-- addres-->
                <!-- street -->
                <div class="mb-4 row">
                  <label for="street" class="col-sm-2 col-form-label">Rua</label>
                  <div class="col-sm-10">
                    <input type="text"  id="addres"name="inputStreet"class="form-control">
                    </div>
                    </div>
                    <!-- fim street -->

                    <!-- number -->
                    <div class="mb-4 row">
                      <label for="number" class="col-sm-2 col-form-label">Numero</label>
                      <div class="col-sm-10">
                        <input type="text"  id="number"name="inputNumber"class="form-control">
                        </div>
                        </div>
                    <!-- fim number -->

                    <!-- disctrict -->
                    <div class="mb-4 row">
                      <label for="district" class="col-sm-2 col-form-label">Bairro</label>
                      <div class="col-sm-10">
                        <input type="text"  id="district"name="inputDistrict"class="form-control">
                        </div>
                        </div>
                    <!-- fim district -->

                      <!-- CEP -->
                    <div class="mb-4 row">
                      <label for="CEP" class="col-sm-2 col-form-label">CEP</label>
                      <div class="col-sm-10">
                        <input type="text"  id="CEP"name="inputCEP"class="form-control">
                        </div>
                        </div>
                    <!-- fim CEP -->

                <!-- fim addres-->

                <!-- cellphone -->
                <div class="mb-4 row">
                  <label for="cellphone" class="col-sm-2 col-form-label">Celular</label>
                  <div class="col-sm-10">
                    <input type="text"  id="cellphone"name="inputCellphone"class="form-control"value="(45)">
                    </div>
                    </div>
                <!-- fim cellphone -->

                <!-- email-->
            <div class="mb-4 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text"  id="staticEmail" value="email@example.com"name="inputMail"class="form-control">
              </div>
            </div>
            <!-- fim email-->
            <!-- password -->
        <div class="mb-4 row">
                <label for="Password" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password"  id="password"name="inputPassword"class="form-control">
                    </div>
                    </div>
                <!-- fim da password -->
                    <!-- Confirm password -->
        <div class="mb-4 row">
                <label for="Password" class="col-sm-2 col-form-label">Confirme a senha</label>
                <div class="col-sm-10">
                    <input type="password"  id="confirmPassword"name="inputConfirmPassword"class="form-control">
                    </div>
                    </div>
                <!-- fim da confirm password -->
          <div class="buttons-position"> 
          <button type="submit" class="btn btn-primary"value="save"name="btnSave">Salvar dados</button>
          <button type="reset" class="btn btn-primary"value="clear">limpar </button>
          </div>
          
          <!-- fim do formulário-->

        </form>
        </div>
      
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

