<?php

$link = mysqli_connect('localhost', 'root', '', '09042020_fast-start');
mysqli_set_charset($link, 'utf8');

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FastStart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
</head>

<body>

<a href="#" class="scroll-top"><i class="pe-7s-up-arrow"></i></a>
<div class="preloader">
    <img src="images/loader.svg">
</div>

<div class="overlay">
    <div class="container header">
        <div class="row">
            <div class="col-md-7">
                <div class="header__logo">
                    <a href="#/">
                        <img src="images/logo.png">
                    </a>
                </div>

                <div class="header__land">
                    <h1 class="land-title outLeft">Разработка сайтов любой сложности</h1>
                    <p class="land-text outBot">
                        FastStart - команда опытных профессионалов по реализации задач любой сложности в области
                        web-разработки и программирования. В кратчайшие сроки мы реализуем все ваши идеи и мысли и дадим
                        мощный толчок вашему бизнесу!
                    </p>
                </div>

                <div class="header__btn">
                    <button class="btn-primary outRight">О нас</button>
                    <button class="btn-inverse outLeft">Стоимость</button>
                </div>
            </div>

            <div class="col-md-5">
                <div class="header__form">
                    <h2 class="form-title text-centre">свяжитесь со мной</h2>

                    <form method="get" action="#" class="form-page">
                        <input type="text" name="name" placeholder="Мое имя" min="2" max="20" required>
                        <input type="email" name="email" placeholder="Мой e-mail" min="7" max="50" required>
                        <input type="submit" value="Отправить запрос">
                    </form>

                    <p class="form-text text-centre">
                        Нажимая кнопку "ОТПРАВИТЬ ЗАПРОС" Вы даете согласие на обработку
                        личных данных в соотстветствии правилами политики конфиденциальности.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar">
    <div class="container">
        <div class="navbar__logo">
            <a href="#">
                <img src="images/logo2.png">
            </a>
        </div>

        <ul class="nav navbar__links">
            <li><a class="nav-link link_1" href="#">О нас</a></li>
            <li><a class="nav-link link_2" href="#">Приемущества</a></li>
            <li><a class="nav-link link_3" href="#">Как заказать</a></li>
            <li><a class="nav-link link_4" href="#">Стоимость</a></li>
            <li><a class="nav-link link_5" href="#">Отзыв</a></li>
            <li><a class="nav-link link_6" href="#">Контакты</a></li>
        </ul>

        <div class="navbar__burger">
            <div class="burger-line"></div>
        </div>
    </div>
</nav>

<?php

if (!empty($_GET['name']) && !empty($_GET['email'])) {
    $sql = "INSERT INTO requests (id, name, email) VALUES (null, '{$_GET['name']}', '{$_GET['email']}')";
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "<script>alert('Благодарим! Скоро Вам придет сообщение на почту')</script>";
        exit("<meta http-equiv='refresh' content='0; url= /'>");
    }
}
