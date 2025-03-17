<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/register.css">
</head>
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
                <li><a href="loginer.php">Войти</a></li>


            </ul>
        </nav>

    </header>
    <hr>
    <body>
    <main class="grid">
    <div class="container">
    <h2>Регистрация</h2>
    <form name="forma" action="register.php" method="post">
        Фамилия: <input type="text" name="surname" value="">
        <br>
        Имя: <input type="text" name="name" value="">
        <br>
        Отчество: <input type="text" name="patronymic" value="">
        <br>
        Логин: <input type="text" name="login" value="">
        <br>
        Почта: <input type="text" name="email" value="">
        <br>
        Телефон: <input type="text" name="phone" value="">
        <br>
        Пароль: <input type="text" name="password" value="">
        <br>
        <input name="submit" type="submit" value="Зарегистрироваться">
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