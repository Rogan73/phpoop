<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP OOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/phpoop">Home</a>
        
      </div>
      <div class="navbar-nav ms-auto">
        <div class="navbar-nav">

        <?php if(isset($_SESSION['user'])){ ?>
          <a class="nav-link" href="profile">Profile</a>

          <form action="auth/logout" method="POST">
            <button type = "submit" class="nav-link" >Logout</button>  
          </form>
          


        <?php }else{ ?>
          <a class="nav-link" href="login">Login</a>
          <a class="nav-link" href="register">Register</a>
        <?php } ?>

        </div>
      </div>
    </div>
  </div>
</nav>