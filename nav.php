<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link "  href="index.php">Slapta 1</a>
        <a class="nav-link" href="index2.php">Slapta 2</a>
      </div>
     
    </div>
    <div class="navbar-nav float-end">
        <?php if (isset($_SESSION['user_login']) && $_SESSION['user_login']==1){ ?>
            <span class="nav-link">Jūs esate prisijungęs kaip: <?=$_SESSION['user']?></span>
            <a class="btn btn-danger "  href="login.php?logout=1">Atsijungti</a>
        <?php }else{ ?>
            <a class="btn btn-success "  href="login.php">Prisijungti</a>
        <?php } ?>    

        

        

    </div>
  </div>
</nav>