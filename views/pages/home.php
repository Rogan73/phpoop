<?php use App\Services\Page; ?>

<!DOCTYPE html>
<html lang="en">
<?php Page::component('head'); ?>
<body>
<?php Page::component('navbar'); ?>

<div class="container mt-4">

 <div class="jumbotron mt-4">
 <h1>Home</h1>

   <a href="login" class="btn btn-primary">Login</a>
   <a href="register" class="btn btn-primary">Register</a>

 </div>

</div>






</body>
</html>