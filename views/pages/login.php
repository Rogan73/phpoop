<?php

use App\Services\Page;
use App\Services\Router;



if (isset($_SESSION['user'])) {
  Router::redirect('/profile');
  die();
}

?>


<!DOCTYPE html>
<html lang="en">
<?php
 // require_once 'views/components/head.php';
Page::component('head');
?>

<body>

<?php
//  require_once 'views/components/navbar.php';
Page::component('navbar');
?>

<div class="container w-50 p-4 " style="background-color: #e8E9ea; border-radius:10px  ">
<h2 class="">Sign In</h2>

<form class="mt-4 " action="auth/login" method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>



</body>
</html>