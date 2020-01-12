<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title;?></title>
    <meta name="description" content="<?=$description;?>">
    <meta name="keywords" content="<?=$keywords;?>">
    <!-- Favicon -->
    <link rel="icon" href="/application/public/img/Pediatric-logo.png" type="image">
    <link rel="shortcut icon" href="/application/public/img/favicon.ico">
    <!-- OG Tags -->
    <meta property="og:title" content="<?=$title;?>">
    <meta property="og:description" content="<?=$description;?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="#">
    <meta property="og:site_name" content="<?=$title;?>">
    <!-- Bootstrap Reboot CSS -->
    <link rel="stylesheet" href="/application/public/css/bootstrap-reboot.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/application/public/css/bootstrap.min.css">
    <!-- Web Fonts -->
    <link rel="stylesheet" href="/application/public/css/all.min.css">
    <link rel="stylesheet" href="/application/public/css/fontawesome.min.css">
    <link rel="stylesheet" href="/application/public/css/light.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,900">
    <!-- Gamburger -->
    <link rel="stylesheet" href="/application/public/css/hamburger.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/application/public/css/main_v1.css">
    <!-- Custom CSS -->
    <?php if(isset($css)): foreach($css as $style):?>
    <link href="/application/public/css/<?php echo $style;?>.css" rel="stylesheet">
    <?php endforeach; endif; ?>
</head>

<body>
    <header id="header" class="header">
        <div class="container">
            <div class="row d-flex align-items-center">
                <button id="c-hamburger--htx" class="d-block d-sm-none c-hamburger c-hamburger--htx">
                    <span></span>
                </button>
                <div id="menu-mobile" class="menu-mobile d-none d-sm-none">
                    <ul class="menu__wrap d-flex flex-column">
                        <li class="menu__point"><a href="/" class="menu__link">Головна</a></li>
                        <li class="menu__point"><span onclick="event.preventDefault()" class="menu__link cursor-point">Послуги</span><!-- Код этой строки претерпел изменения -->
                            <ul class="menu__togle">
                                <li class="menu__togle-point"><a href="/services/diagnostic" class="menu__togle-link">Діагностика</a></li>
                                <li class="menu__togle-point"><a href="/services/treatment" class="menu__togle-link">Лікування</a></li>
                                <li class="menu__togle-point"><a href="/services/prevention" class="menu__togle-link">Профілактика</a></li>
                                <li class="menu__togle-point"><a href="/services/psychotherapy" class="menu__togle-link">Психотерапія</a></li>
                                <li class="menu__togle-point"><a href="/services/diettherapy" class="menu__togle-link">Дієтотерапія</a></li>
                                <li class="menu__togle-point_twice-f">
                                    <a href="/services/colonoscopy" class="menu__togle-link_twice-f">Гастроскопія</a>
                                    <a href="/services/colonoscopy" class="menu__togle-link_twice-f">Колоноскопія</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__point"><a href="/team" class="menu__link">Про відділеня</a></li>
                        <li class="menu__point"><a href="/reviews" class="menu__link">Відгуки</a></li>
                    </ul>
                </div>
                <div class="d-none d-md-block col-md-3 col-xl-2 ">
                    <img src="/application/public/img/main/Pediatric-logo.png" alt="" class="header__logo">
                </div>
                <div class="col-md-9 col-xl-10">
                    <div class="row header__right-head">
                        <div class="col-md-12 col-xl-7 ">
                            <h1 class="header__title">
                                Дитяче гастроентерологічне відділення Дніпропетровскої <norb>"МКЛ №9"</norb>
                            </h1>
                        </div>
                        <div class="d-sm-flex flex-column-reverse col-md-12 col-xl-5 flex-xl-column text-xl-right">
                            <p class="header__phone">Телефон:<a href="tel:+380957789314" class="header__phone-link"> (095)-778-93-14 </a></p>
                            <a href="#footer__map" class="header__adress">Проспект Мануйлівський, 29 А , м.Дніпро</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="menu stickytop d-none d-sm-block" id="menu">
        <div class="row">
            <div class="menu__bg"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="d-none d-sm-block col-md-8 col-lg-7 col-xl-5">
                    <ul class="menu__wrap d-flex">
                        <li class="menu__point"><a href="/" class="menu__link">Головна</a></li>
                        <li class="menu__point"><span class="menu__link cursor-point">Послуги</span>
                            <ul class="menu__togle">
                                <li class="menu__togle-point"><a href="/services/diagnostic" class="menu__togle-link">Діагностика</a></li>
                                <li class="menu__togle-point"><a href="/services/treatment" class="menu__togle-link">Лікування</a></li>
                                <li class="menu__togle-point"><a href="/services/prevention" class="menu__togle-link">Профілактика</a></li>
                                <li class="menu__togle-point"><a href="/services/psychotherapy" class="menu__togle-link">Психотерапія</a></li>
                                <li class="menu__togle-point"><a href="/services/diettherapy" class="menu__togle-link">Дієтотерапія</a></li>
                                <li class="menu__togle-point_twice-f">
                                    <a href="/services/colonoscopy" class="menu__togle-link_twice-f">Гастроскопія</a>
                                    <a href="/services/colonoscopy" class="menu__togle-link_twice-f">Колоноскопія</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__point"><a href="/team" class="menu__link">Про відділеня</a></li>
                        <li class="menu__point"><a href="/reviews" class="menu__link">Відгуки</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
