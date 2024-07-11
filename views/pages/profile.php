<?php 


use App\Services\Page; 
use App\Services\Router;



if (!isset($_SESSION['user'])) {
  //header('Location: /login');
  Router::redirect('/login');
  die();
}


?>

<!DOCTYPE html>
<html lang="en">
<?php Page::component('head'); ?>
<body>
<?php Page::component('navbar'); ?>

<div class="container mt-4">

 <div class="jumbotron mt-4">
 <h1>Profile</h1>

 <h2>Hello <?php echo $_SESSION['user']['username']; ?></h2>
 <img src="<?php echo $_SESSION['user']['avatar']; ?>" alt="avatar" height="200">

 </div>

</div>






</body>
</html>