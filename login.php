<?php
  //echo password_hash('labas',PASSWORD_DEFAULT);


  session_start();
  if (isset($_POST['user'])){
    $user=$_POST['user'];
    $password=$_POST['password'];
    
    if ($user=='admin' && password_verify($password,'$2y$10$LSA6Q61kpNMCL3JAgfaPdOeZyChsnfAKFCjZdHMyqEh09kVEsATu.')){
    //if ($user=='admin' && md5($password)=='2e53d715b9d776b6c45263d31ecd3d87'){
        $_SESSION['user_login']=1;
        $_SESSION['user']=$user;
        header("Location: index.php");
    }

  }

  if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php
     include_once("nav.php")
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Prisijungti
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST" >
                            <div class="mb-3">
                                <label for="" class="form-label">Vartotojo vardas</label>
                                <input type="text" class="form-control" name="user">

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Slaptažodis</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button class="btn btn-success">Prisijungti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
