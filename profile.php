<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <div class="logotipe">
        <a href="index.php" class="logo_bmw">
        <img src="img/logo.png" alt="logo" width="300">
        </a>
    </div>
    <div class="three">
        <h1>Лучший выбор машин</h1>
    </div>
    <body>
        <nav>
            <ul>
                <li><a href="about.php">О нас</a></li>
                <li><a href="index.php">Главная</a></li>
                <li><a href="cars.php">Машины</a></li>

            <h1><?php if (!empty($_SESSION['auth'])): ?>
            Добрый день, <?php echo $_SESSION['name'] ?>!</h1> 
            <li><a href="profile.php">Личный кабинет</a></li>
            <li><a href="logout.php">Выйти</a></li>
            
        <?php else: ?>
            <li><a href="loginer.php">Войти</a></li>
            <li><a href="form_register.php">Зарегистрироваться</a></li>
        <?php endif; ?>
            </ul>
        </nav>

</header>
<hr>
<main class="main_text_1">
<div class="profile-box">
        <h1>Ваш профиль</h1>
        <?php
 include('connect.php');

    if (!empty($_SESSION['auth'])): ?>
<p>
    <h1>Добрый день!</h1>
</p>
    <?php
        $id_user=$_SESSION['id_user'];
        //echo $id_user;
        $query = "SELECT * FROM users WHERE id_user = $id_user";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($result = mysqli_fetch_array($res)) {
        echo "Имя пользователя: {$result['name']} ";
     }
     ?>
<p>
    <?php
        $id_user=$_SESSION['id_user'];
        //echo $id_user;
        $query = "SELECT * FROM users WHERE id_user = $id_user";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
 
        while ($result = mysqli_fetch_array($res)) {
        echo "Фамилия: {$result['surname']} ";
    }
    ?>
</p>
<p>
    <?php
        $id_user=$_SESSION['id_user'];
        //echo $id_user;
        $query = "SELECT * FROM users WHERE id_user = $id_user";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($result = mysqli_fetch_array($res)) {
        echo "Отчество: {$result['patronymic']} ";
    }
    ?>
</p>
<p>
<?php
        $id_user=$_SESSION['id_user'];
        //echo $id_user;
        $query = "SELECT * FROM users WHERE id_user = $id_user";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($result = mysqli_fetch_array($res)) {
        echo "Почта: {$result['email']} ";
    }
    ?>
</p>
<p>
    <?php
        $id_user=$_SESSION['id_user'];
        //echo $id_user;
        $query = "SELECT * FROM users WHERE id_user = $id_user";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($result = mysqli_fetch_array($res)) {
        echo "Телефон: {$result['phone']} ";
        }
    ?>
    </p>
    <a href="edit_profile.php">Редактировать профиль</a>
        <?php else: ?>
        <p>
            авторизуйтесь
        </p>
        <?php endif; ?>
</div>
   
</main>
<hr>
<footer>
    <h2>Контакты</h2>
    <p>Email: info@autosalon.com</p>
    <p>Телефон: +7 (123)-456-7890</p>
</footer>
</body>
</html>