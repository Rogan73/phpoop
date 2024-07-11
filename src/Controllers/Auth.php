<?php

namespace App\Controllers;

use App\Services\Router;

class Auth{

    public function login($data){
        $email=$data['email'];
        $password=$data['password'];
        $user=\R::findOne('users','email=?',[$email]);
        if($user){
            if(password_verify($password, $user->password)){
                session_start();
                $_SESSION['user'] = [
                    'id' => $user->id,
                    'email' => $user->email,
                    'fullname' => $user->fullname,
                    'group' => $user->group,
                    'username' => $user->username,
                    'avatar' => $user->avatar
                ];
              
                Router::redirect('/profile');
            }else{
                Router::redirect('/login');
            }
        }else{
            //Router::redirect('/login');
            die('user not found');
        }

    }

     public function register($data,$files){
       //echo 'register action';    
       //print_r($data);

       // 

      $email=$data['email'];
      $username=$data['username'];
      $fullname=$data['fullname'];
      $password=$data['password'];
      $passwordconfirm=$data['passwordconfirm'];
      
      // Validation
      if(strlen($email)<5 || strlen($email)>255){
        // email is invalid
        //return false;
        Router::error('500');
        die();
      }

      if(strlen($username)<5 || strlen($username)>255){
        // username is invalid
        //return false;
        Router::error('500');
        die();

      }

      if(strlen($fullname)<5 || strlen($fullname)>255){
        // fullname is invalid
        //return false;
        Router::error('500');
        die();
      }

      if(strlen($password)<5 || strlen($password)>255){
        // password is invalid
        //return false;
        Router::error('500');
        die();

      }

      if($password!=$passwordconfirm){
        // password is invalid
        //return false;
        Router::error('500');
        die();
      }
     

      $avatar=$files['avatar'];
      $avatar_name=time() . '_' .  $avatar['name'];
      $avatar_tmp=$avatar['tmp_name'];
      $path='uploads/avatars/'. $avatar_name;

      if  (move_uploaded_file($avatar_tmp,$path)){
        // avatar uploaded successfully
        //return true;
        $user=\R::dispense('users');
        $user->email=$email;
        $user->username=$username;
        $user->fullname=$fullname;
        $user->group=1; // 1- user 2- admin
        $user->password=password_hash($password, PASSWORD_DEFAULT);
        $user->avatar=$path;   // убрал '/'.
        // $user->avatar_size=$avatar['size'];
        // $user->avatar_error=$avatar['error'];
        // $user->avatar_type=$avatar['type'];
        $user->created_at=date('Y-m-d H:i:s');
        $user=\R::store($user);
        

        Router::redirect('/login');


      }else{
        // avatar upload failed
        //die('avatar upload failed');
        Router::error('500');
        die();  
        //return false;
      }

      
      $avatar_size=$avatar['size'];
      $avatar_error=$avatar['error'];
      $avatar_type=$avatar['type'];

     }

     public function logout(){
        session_start();
        unset($_SESSION['user']);
        session_destroy();
        Router::redirect('/login');
     }

}

?>