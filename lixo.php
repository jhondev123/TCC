/** <script>
        $( document ).ready(function() {
            $('#staticBackdro').modal('show');
          });
    </script>" */
//setcookie('login',123 , time()+3600);

if(!isset($_COOKIE['login'])){
    // chamando o form de registro
    header("register.html");
        }
    else{
      header("register.html");
    echo "
    <script>
        $( document ).ready(function() {
            $('#staticBackdro').modal('show');
          });
    </script>";
    }
    