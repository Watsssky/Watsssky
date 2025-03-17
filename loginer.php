<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <header>
    <div class="logotipe">
        <a href="index.php" class="logo_bmw">
        <img src="img/BMW-Logo.png" alt="logo" width="300">
        </a>
    </div>
        
        <nav>
            <ul>
                <li><a href="about.php">О нас</a></li>
                <li><a href="index.php">Главная</a></li>
                <li><a href="cars.php">Машины</a></li>
                <li><a href="form_register.php">Зарегистрироваться</a></li>
            </ul>
        </nav>

    </header>
    <hr>
    <main class="grid">
    <div class="container_login">
    <h2>Авторизация</h2>
    <form name="forma" action="login.php" method="post">
        Логин: <input type="text" name="login" value="">
        <br>
        Пароль: <input type="text" name="password" value="">
        <br>
        <input name="submit" type="submit" value="Авторизоваться">
    </form>
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
</html>