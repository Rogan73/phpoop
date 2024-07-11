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
<h2 class="">Sign Up</h2>

<form class="mt-4 " method="POST" enctype="multipart/form-data" action="auth/register">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" >
 
  </div>

  <div class="mb-3">
    <label for="username" class="form-label">User name</label>
    <input type="text" class="form-control" id="username" name="username" >
  </div>

  <div class="mb-3">
    <label for="fullname" class="form-label">Full name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" >
  </div>  

  <div class="mb-3">
    <label for="avatar" class="form-label">Avatar</label>
    <input type="file" class="form-control" id="avatar"  name="avatar" >
  </div>  

 <div class="d-flex mb-3">
    <div class="mr-4">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" >
    </div>

    <div class=" ms-4">
      <label for="passwordconfirm" class="form-label">Password Confirm</label>
      <input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm" >
    </div>

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>


</div>


</body>
</html>