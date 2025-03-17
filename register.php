<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
    include('connect.php');
    
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

   $query = "INSERT INTO users SET 
   login='$login', 
   password='$password', 
   name='$name', 
   surname='$surname', 
   patronymic='$patronymic', 
   phone='$phone', 
   email='$email',
   id_role='2'";
//mysqli_query($link, $query);

$res = mysqli_query($link, $query) or die(mysqli_error($link));
if ($res) {
       echo "Данные успешно сохранены!";
       header('Location: index.php');
   } else {
       echo "Произошла ошибка, пожалуйста повторите попытку.";
   }      
?>
</body>
</html>

