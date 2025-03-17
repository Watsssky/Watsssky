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
        <img src="img/BMW-Logo.png" alt="logo" width="300">
        </a>
    </div>
        
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
    <main class="main_text">
        <div class="text_2">
            <h1 class="headline_2">Наши модели автомобилей</h1>
            <div class="car-models">
                
                <div class="car">
                    <img src="img/BMW_M2.png" alt="car1">
                    <h3>BMW M2 Серии Coupe</h3>
                    <button>Купить</button> 
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW_3.png" alt="car2">
                    <h3>BMW 3 Серии</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW4_Coupe.png" alt="car3">
                    <h3>BMW 4 Серии Coupe</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW5.png" alt="car4">
                    <h3>BMW 5 Серии</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW6_GT.png" alt="car5">
                    <h3>BMW 6 Серии GT</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW7.png" alt="car6">
                    <h3>BMW 7 Серии</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW8_Cabrio.png" alt="car7">
                    <h3>BMW 8 Серии Cabrio</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW_X5.png" alt="car8">
                    <h3>BMW X5</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW_X7.png" alt="car9">
                    <h3>BMW X7</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW_Z4_Roadster.png" alt="car10">
                    <h3>BMW Z4 Roadster</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW_M5.png" alt="car11">
                    <h3>BMW M5</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW_M8_Cabrio.png" alt="car12">
                    <h3>BMW M8 Cabrio</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                    <img src="img/BMW_iX.png" alt="car13">
                    <h3>BMW iX</h3>
                    <button>Купить</button>
                    <button>Заказать тест-драйв</button>
                </div>
                <div class="car">
                <img src="img/BMW_XM.png" alt="car14">
                <h3>BMW XM</h3>
                <button>Купить</button>
                <button>Заказать тест-драйв</button>
            </div>
            <div class="car">
                <img src="img/BMW_X6.png" alt="car15">
                <h3>BMW X6</h3>
                <button>Купить</button>
                <button>Заказать тест-драйв</button>
            </div>
            <div class="car">
                <img src="img/BMW_X6_M.png" alt="car16">
                <h3>BMW X6 M</h3>
                <button>Купить</button>
                <button>Заказать тест-драйв</button>
            </div>
            <div class="car">
                <img src="img/BMW_X5_M.png" alt="car17">
                <h3>BMW X5 M</h3>
                <button>Купить</button>
                <button>Заказать тест-драйв</button>
            </div>
            <div class="car">
                <img src="img/NEW_BMW_M3_Competition.png" alt="car18">
                <h3>NEW BMW M3 Competition</h3>
                <button>Купить</button>
                <button>Заказать тест-драйв</button>
            </div>
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