<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo get_the_title(); ?></title>
    <?php wp_head(); ?>
    <style>
        html {
        margin-top: 0 !important;
    }
    </style>
</head>

<body>
<header class="header">
        <div class="header-row">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/content/Logo.png'?>" alt="" class="logo__image">
                <span class="logo__text">Авторские туры и экскурсии<br>по Армении</span>
            </a>
            <div class="header__info-container">
                <div class="info-container__contact-container">
                    <a href="tel:+37477533561" class="phone-link">+374 (77) 533 561</a>
                    <a href="mailto:ladatravelarmenia@yandex.ru" class="mail-link">ladatravelarmenia@yandex.ru</a>
                </div>
                <button class="call-button">Заказать звонок</button>
            </div>
        </div>
        <hr />
        <div class="header-row">
            <nav class="header-navigation">
                <a href="" class="nav-link">
                    <span class="nav-link__value">Главная</span>
                </a>
                <div href="" class="nav-link nav-link--complex">
                    <span class="nav-link__value">О нас</span>
                    <div class="link-container">
                        <a href="#" class="nav-link">1 Главная Главная</a>
                        <a href="#" class="nav-link">2 Главная Главная</a>
                    </div>
                </div>
                <div href="" class="nav-link nav-link--complex">
                    <span class="nav-link__value">Туры</span>
                    <div class="link-container">
                        <a href="#" class="nav-link">1 Главная Главная</a>
                        <a href="#" class="nav-link">2 Главная Главная</a>
                    </div>
                </div>
                <div href="" class="nav-link nav-link--complex">
                    <span class="nav-link__value">Экскурсии</span>
                    <div class="link-container">
                        <a href="#" class="nav-link">1 Главная Главная</a>
                        <a href="#" class="nav-link">2 Главная Главная</a>
                    </div>
                </div>
                <div href="" class="nav-link nav-link--complex">
                    <span class="nav-link__value">Направления</span>
                    <div class="link-container">
                        <a href="#" class="nav-link">1 Главная Главная</a>
                        <a href="#" class="nav-link">2 Главная Главная</a>
                    </div>
                </div>
                <div href="" class="nav-link nav-link--complex">
                    <span class="nav-link__value">Проживание</span>
                    <div class="link-container">
                        <a href="#" class="nav-link">1 Главная Главная</a>
                        <a href="#" class="nav-link">2 Главная Главная</a>
                    </div>
                </div>
                <div href="" class="nav-link nav-link--complex">
                    <span class="nav-link__value">Об армении</span>
                    <div class="link-container">
                        <a href="#" class="nav-link">1 Главная Главная</a>
                        <a href="#" class="nav-link">2 Главная Главная</a>
                    </div>
                </div>
                <a href="" class="nav-link">
                    <span class="nav-link__value">Контакты</span>
                </a>
            </nav>
        </div>
    </header>