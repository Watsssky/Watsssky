<?php
 session_start();
 include('connect.php');

 if (!empty($_POST['password']) and !empty($_POST['login'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];
  
  $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
  $res = mysqli_query($link, $query);
  $user = mysqli_fetch_assoc($res);
  
  if (!empty($user)) {
   $_SESSION['auth'] = true;
            $_SESSION['name']=$user['name'];
            $_SESSION['patronymic']=$user['patronymic'];
            $_SESSION['id_role']=$user['id_role'];
            $_SESSION['id_user']=$user['id_user'];
            $_SESSION['flash']='Авторизация прошла успешно';
            header('Location: index.php');
  } else {
   echo "неверно ввел логин или пароль";
  }
 }
?>