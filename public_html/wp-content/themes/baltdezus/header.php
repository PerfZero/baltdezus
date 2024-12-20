<?php


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header__container">
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item">
                    <a href="/vrediteli" class="header__link">Вредители</a>
                </li>
                <li class="header__item">
                    <a href="/tovar" class="header__link">Товары</a>
                </li>
                <li class="header__item">
                    <a href="/uslugi" class="header__link">Услуги</a>
                </li>
                <li class="header__item">
                    <a href="/about" class="header__link">О нас</a>
                </li>
            </ul>
        </nav>
        <div class="header__logo">
            <a href="/" class="header__logo-link"><img src="http://baltdezus.devdenis.ru/wp-content/uploads/2024/12/logo-1.svg"></a>
        </div>
        <div class="header__call-to-action">
            <a href="#call-specialist" class="header__button"><img src="http://baltdezus.devdenis.ru/wp-content/uploads/2024/12/phone.svg">Вызвать специалиста</a>
        </div>
    </div>
</header>