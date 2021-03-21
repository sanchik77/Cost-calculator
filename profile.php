<?php
session_start();

if(!$_SESSION['user'])
    header('Location: index.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Склад в городе Харькова</title>
	<?php require_once 'head.php'  ?>
	
</head>
<body>

    <header class="header">
    <div class="wrapper__navbar">
    <div class="container">
        <div class="wrapp__content">
            <a href="#"><img class="logo__style" src="img/logo.png" alt="logo"></a>
            <div class="title__nav-bar">
                <h1>Склад №1</h1>
                <p>Харьков,«Паркинг» Харьковское Шоссе 17А</p>
            </div>
            <div class="number__company">
                <div class="tel__company"><a href="tel:+380972233445">+38 (097) 223-34-45</a></div>
                <div class="tel__company"><a href="tel:+380972233445">+38 (097) 223-34-45</a></div>
                <div class="tel__company"><a href="tel:+380972233445">+38 (097) 223-34-45</a></div>
            </div>
            <a href="#"><img class="h-85" src="img/24-71.png" alt="Работаем без выходных 24 на 7"></a>
            <div class="social">
                <a href="#"><i class="fab fa-telegram"></i></a>
                <a href="#"><i class="fab fa-viber"></i></a>
            </div>
            <div class="log-in__sign-up">
                    <nav>
                        <ul>
                            <li class="product__menu"><a class="style__fa-user hover__fa-user_title_kabinet" href="authorization.php"><i class="far fa-user"></i><div class="style__title_kabinet hover__fa-user_title_kabinet"><?php echo $_SESSION['user']['login'] ?></div></a>
                        
                            <div class="wrapper__sub-menu w-200">
                                <ul class="navbar__submenu">
                                    <!-- <li><a class="p-w-d-h color__p-w-d-h" href="#"><i class="far fa-user"></i>Личные данные</a></li> -->
                                    <li><a class="p-w-d-h color__p-w-d-h" href="order.php"><i class="fas fa-folder"></i>Заказы</a></li>
                                    <li><a class="p-w-d-h color__p-w-d-h" href="logout.php"><i class="fas fa-sign-out-alt"></i>Выход</a></li>
                                </ul>
                            </div>
                        </li>
                        </ul>
                    </nav>
                    
                    
                </div>

        </div>

    </div>
</div>
<div class="wrapper__navbar-information">
    <div class="container">
        <nav>
            <ul class="ul__navbar-information">
                <li class="product__menu li__navbar-information"><a class="hover__b-t" href="#">Выбор склада</a>
                <div class="wrapper__sub-menu sub-menu__information">
                                <ul class="navbar__submenu">
                                    <li class="p-7"><a href="#">Харьков, "Паркинг"
Харьковское Шоссе 17А</a></li>
                                    <li class="p-7"><a href="#">Харьков, "МегаСити"
Харьковское Шоссе 19</a></li>
                                    <li class="p-7"><a href="#">Харьков, "МегаСити"
Харьковское Шоссе 19 эт. 2</a></li>
                                </ul>
                            </div>
            
            </li>
                <li class="product__menu li__navbar-information"><a class="hover__b-t" href="#">Склад для дома</a>
                <div class="wrapper__sub-menu sub-menu__information">
                                <ul class="navbar__submenu">
                                    <li class="p-7"><a href="#">Временное хранение мебели</a></li>
                                    <li class="p-7"><a href="#">Переезд или ремонт</a></li>
                                    <li class="p-7"><a href="#">Аренда мини склада</a></li>
                                </ul>
                            </div>
            </li>
            <li class="product__menu li__navbar-information"><a class="hover__b-t" href="#">Склад для бизнеса</a>
            <div class="wrapper__sub-menu sub-menu__information">
                                <ul class="navbar__submenu">
                                    <li class="p-7"><a href="#">Переезд или ремонт офиса</a></li>
                                    <li class="p-7"><a href="#">Хранение для бизнеса</a></li>
                                    <li class="p-7"><a href="#">Аренда мини склада</a></li>
                                </ul>
                            </div>
        </li>
            <li class="product__menu li__navbar-information"><a class="hover__b-t" href="#">Калькулятор цены</a></li>
            <li class="product__menu li__navbar-information"><a class="hover__b-t" href="#">Контакты</a></li>
            </ul>
        </nav>
    </div>
</div>
    </header>
    <section class="main__blocks_information">
        <?php
        if ($_SESSION['message']) {
            echo '
               <p class="msg1"> ' . $_SESSION['message'] . ' </p> ';
        }
        unset($_SESSION['message']);
        ?>
        <div class="container">
            <div class="wrapper__blocks_information">
                <div class="block__info_big">
                    <h1 class="title__info-block">Лучший склад для хранения вещей в Харькове</h1>
                    <ul>
                        <li><i class="fas fa-check"></i>Профессиональная охрана ШЕРИФ</li>
                        <li><i class="fas fa-check"></i>Профессиональный перевозчик</li>
                        <li><i class="fas fa-check"></i>Скидка при долгосрочной аренде!</li>
                    </ul>
                    <a class="button__info_block" href="#">Подробнее</a>
                </div>
                <div class="blocks__info_mini">
                    <div class="block__info_mini">
                        <h1>Склад для дома</h1>
                        <a class="button__info_block button__info-block_mini" href="#"><i class="fas fa-angle-right"></i>Подробнее</a>
                    </div>
                    <div class="block__info_mini">
                        <h1>Склад для интернет магазина</h1>
                        <a class="button__info_block button__info-block_mini" href="#"><i class="fas fa-angle-right"></i>Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="wrapper__anons-features">
                <div class="anons-features">
                    <a href="#"></a>
                    <div class="feature-one">

                    </div>
                    <div class="desc">
                        <h2>О складе «Warehouse 13»</h2>
                    </div>
                </div>
                <div class="anons-features">
                    <a href="#"></a>
                    <div class="feature-one feature-2 ">

                    </div>
                    <div class="desc">
                        <h2>Услуги и цены</h2>
                    </div>
                </div>
                <div class="anons-features">
                    <a href="#"></a>
                    <div class="feature-one feature-3">

                    </div>
                    <div class="desc">
                        <h2>Фотогалерея</h2>
                    </div>
                </div>
                <div class="anons-features">
                    <a href="#"></a>
                    <div class="feature-one feature-4">

                    </div>
                    <div class="desc">
                        <h2>Личный кабинет</h2>
                    </div>
                </div>
                <div class="anons-features">
                    <a href="#"></a>
                    <div class="feature-one feature-5">

                    </div>
                    <div class="desc">
                        <h2>Наши контакты</h2>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="about">
        <div class="container">
            <div class="wrapper__about_info">
                <h1><strong>Склад хранения вещей в Харькове. «Warehouse 13» — удобно, быстро и надежно!</strong> </h1>
                <p>«Warehouse 13» — склад хранения вещей в г. Харьков, состоит из индивидуальных боксов. Такой склад понадобится для хранения вещей при ремонтах или переездах, хранение мебели, сезонных вещей, оптимизации и снижения расходов при ведении малого и среднего бизнеса, а также для интернет-магазинов. В нем хранят практически любые вещи: бытовую технику, инструменты, оргтехнику, мебель, спорт инвентарь, оборудование, бухгалтерский и кадровый архив.</p>
            </div>

        </div>
    </section>

    <section class="calc" id="calc">
        <div class="container">
            <div class="wrapper__content_calc">
                <div class="calc__main">
                    <div class="title__calc">Калькулятор стоимости аренды ячейки</div>
                    <div class="wrapper__main_calc">
                        <div class="calc__form">
                            <div class="type__box">
                                <span class="my-radio">
                                    <input id="r1" type="radio" value="450" class="js-simple-radio" name="type1" checked="true">
                                    <label for="r1">Обычный бокс</label>
                                </span>

                                <span class="my-radio">
                                    <input id="r2" type="radio" value="600" class="js-vip-radio" name="type1">
                                    <label for="r2">VIP бокс</label>
                                </span>
                            </div>
                            <div class="size-box">
                                <div id="js-simple-cells" class="js-simple-cells">
                                    <div class="d-flex">
                                        <span class="my-radio">
                                            <input id="c1" type="radio" data-name="1м²" data-type="Обычная ячейка" data-size="1" data-img="img/1m-1.png" data-sizes="1.4 x 0.7 x 1.1" data-price="450" data-price1="450" data-price3="437" data-price6="423" data-price12="396" data-dimension="м²" value="1" name="type" checked="true">
                                            <label class="style__size" for="c1">1м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c2" type="radio" data-name="2м²" data-type="Обычная ячейка" data-size="2" data-img="img/2m-1.png" data-sizes="1.1 x 1.8 x 2.7" data-price="900" data-price1="900" data-price3="856" data-price6="829" data-price12="776" data-dimension="м²" value="2" name="type">
                                            <label class="style__size" for="c2">2м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c3" type="radio" data-name="3м²" data-type="Обычная ячейка" data-size="3" data-img="img/3m-1.png" data-sizes="1.3 x 3 x 2.7" data-price="1350" data-price1="1350" data-price3="1270" data-price6="1231" data-price12="1152" data-dimension="м²" value="3" name="type">
                                            <label class="style__size" for="c3">3м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c4" type="radio" data-name="4м²" data-type="Обычная ячейка" data-size="4" data-img="img/4m.png" data-sizes="2.2 x 1.8 x 2.7" data-price="1800" data-price1="1800" data-price3="1676" data-price6="1624" data-price12="1521" data-dimension="м²" value="4" name="type">
                                            <label class="style__size" for="c4">4м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c5" type="radio" data-name="5м²" data-type="Обычная ячейка" data-size="5" data-img="img/5m.png" data-sizes="1.7 x 3 x 2.7" data-price="2250" data-price1="2250" data-price3="2073" data-price6="2009" data-price12="1881" data-dimension="м²" value="5" name="type">
                                            <label class="style__size" for="c5">5м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c6" type="radio" data-name="6м²" data-type="Обычная ячейка" data-size="6" data-img="img/6m.png" data-sizes="2 x 3 x 2.7" data-price="2700" data-price1="2700" data-price3="2462" data-price6="2386" data-price12="2233" data-dimension="м²" value="6" name="type">
                                            <label class="style__size" for="c6">6м²</label>
                                        </span>
                                    </div>

                                    <div class="d-flex j-c">
                                        <span class="my-radio">
                                            <input id="c7" type="radio" data-name="7м²" data-type="Обычная ячейка" data-size="7" data-img="img/7m.png" data-sizes="2 x 3.5 x 2.7" data-price="3150" data-price1="3150" data-price3="2842" data-price6="2754" data-price12="2578" data-dimension="м²" value="7" name="type">
                                            <label class="style__size" for="c7">7м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c8" type="radio" data-name="8м²" data-type="Обычная ячейка" data-size="8" data-img="img/8m.png" data-sizes="2 x 4 x 2.7" data-price="3600" data-price1="3600" data-price3="3213" data-price6="3113" data-price12="2915" data-dimension="м²" value="8" name="type">
                                            <label class="style__size" for="c8">8м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c9" type="radio" data-name="9м²" data-type="Обычная ячейка" data-size="9" data-img="img/9m.png" data-sizes="2 x 4.5 x 2.7" data-price="4050" data-price1="4050" data-price3="3575" data-price6="3464" data-price12="3243" data-dimension="м²" value="9" name="type">
                                            <label class="style__size" for="c9">9м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c10" type="radio" data-name="10м²" data-type="Обычная ячейка" data-size="10" data-img="img/10m.png" data-sizes="2 x 5 x 2.7" data-price="4500" data-price1="4500" data-price3="3929" data-price6="3807" data-price12="3564" data-dimension="м²" value="10" name="type">
                                            <label class="style__size" for="c10">10м²</label>
                                        </span>
                                        <span class="my-radio">
                                            <input id="c11" type="radio" data-name="24м²" data-type="Обычная ячейка" data-size="24" data-img="img/24m.png" data-sizes="4 x 6 x 2.7" data-price="10800" data-price1="10800" data-price3="8380" data-price6="8121" data-price12="7600" data-dimension="м²" value="24" name="type">
                                            <label class="style__size" for="c11">24м²</label>
                                        </span>
                                    </div>


                                </div>
                                <div id="js-vip-cells" class="js-vip-cells hidden">
                                    <span class="my-radio">
                                        <input id="cv1" type="radio" value="6" data-name="6м²" data-type="VIP ячейка" data-size="6" data-img="img/V_6m.png" data-sizes="2 x 3 x 2.9" data-price="3240" data-price1="3240" data-price3="2954" data-price6="2863" data-price12="2680" data-dimension="м²" name="type">
                                        <label class="style__size" for="cv1">6м²</label>
                                    </span>
                                    <span class="my-radio">
                                        <input id="cv2" type="radio" value="7" data-name="7м²" data-type="VIP ячейка" data-size="7" data-img="img/V_7m.png" data-sizes="2 x 3.5 x 2.9" data-price="3780" data-price1="3780" data-price3="3410" data-price6="3304" data-price12="3094" data-dimension="м²" name="type">
                                        <label class="style__size" for="cv2">7м²</label>
                                    </span>
                                    <span class="my-radio">
                                        <input id="cv3" type="radio" value="8" data-name="8м²" data-type="VIP ячейка" data-size="8" data-img="img/V_8m.png" data-sizes="2 x 4 x 2.9" data-price="4320" data-price1="4320" data-price3="3855" data-price6="3736" data-price12="3497" data-dimension="м²" name="type">
                                        <label class="style__size" for="cv3">8м²</label>
                                    </span>
                                    <span class="my-radio">
                                        <input id="cv4" type="radio" value="9" data-name="9м²" data-type="VIP ячейка" data-size="9" data-img="img/V_9m.png" data-sizes="2 x 4.5 x 2.9" data-price="4860" data-price1="4860" data-price3="4290" data-price6="4157" data-price12="3892" data-dimension="м²" name="type">
                                        <label class="style__size" for="cv4">9м²</label>
                                    </span>
                                    <span class="my-radio">
                                        <input id="cv5" class="style__size" type="radio" value="10" data-name="10" data-type="VIP ячейка" data-size="10" data-img="img/V_10m.png" data-sizes="2 x 5 x 2.9" data-price="5400" data-price1="5400" data-price3="4714" data-price6="4568" data-price12="4277" data-dimension="м²" name="type">
                                        <label class="style__size" for="cv5">10м²</label>
                                    </span>
                                </div>
                            </div>
                            <div class="time-box">
                                <div class="title__time_box">Время хранения: <span id="time__storage">30</span> <span class="style__title-day_time-box">дней</span> </div>
                                <input type="range" min="30" max="360" value="30" step="30" id="square-range">
                            </div>
                            <div class="month-price">
                                Цена за месяц: <span id="total-price">450</span> грн
                            </div>
                            <a class="button__reservation" href="#popup"><i class="fas fa-box-open"></i>Забронировать ячейку</a>
                        </div>
                        <div class="cell-img ">
                            <img id="cell-img" src="img/1m-1.png" data-src="img/1m-1.png" class="js-cell-img img-responsive center-block ls-is-cached lazyloaded" alt="">
                            <div class="cell-name">
                                <span>Ячейка:</span>
                                <span id="js-cell-size" class="js-cell-size">1м²</span>,
                                <span id="js-cell-sizes" class="js-cell-sizes">1.4 x 0.7 x 1.1</span>м
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blocks__info_mini">
                    <div class="block__info_mini">
                        <h1>Склад для дома</h1>
                        <a class="button__info_block button__info-block_mini" href="#"><i class="fas fa-angle-right"></i>Подробнее</a>
                    </div>
                    <div class="block__info_mini">
                        <h1>Склад для интернет магазина</h1>
                        <a class="button__info_block button__info-block_mini" href="#"><i class="fas fa-angle-right"></i>Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="storage-lists">
                <div class="wrapper__storage-lists">
                    <div class="accept__storage">
                        <div class="title__storage">Вещи, которые мы принимаем на хранение:</div>
                        <ul>
                            <li><i class="fas fa-check green"></i>Мебель и бытовую технику</li>
                            <li><i class="fas fa-check green"></i>Лодки, снегоходы, скутеры и др.</li>
                            <li><i class="fas fa-check green"></i>Съемочный инвентарь и декорации</li>
                            <li><i class="fas fa-check green"></i>Коляски, санки, лыжи, велосипеды</li>
                            <li><i class="fas fa-check green"></i>Товары интернет-магазинов</li>
                            <li><i class="fas fa-check green"></i>Летние павильоны (шатры, столы)</li>
                        </ul>
                    </div>
                    <div class="cannot__stored">
                        <div class="title__storage">Что нельзя хранить на складе:</div>
                        <ul>
                            <li><i class="fas fa-times"></i>Продукты, растения и животных</li>
                            <li><i class="fas fa-times"></i>Оружие и взрывоопасные предметы</li>
                            <li><i class="fas fa-times"></i>Радиоактивные и токсичные вещества</li>
                            <li><i class="fas fa-times"></i>Баллоны под давлением</li>
                            <li><i class="fas fa-times"></i>Вещества, которые выделяют запахи</li>
                            <li><i class="fas fa-times"></i>Топливо и ГСМ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup" id="popup">
            <a href="#calc" class="popup__area"></a>
            <div class="popup__body">
                <div class="popup__content">
                    <a href="#calc" class="popup__close">X</a>
                    <div class="popup__title">Бронь ячейки</div>
                    <div class="popup__customer_selection-info">
                        <form action="send.php" method="post">
                            <div class="wrapper__param">
                                <div class="param">Тип:</div>
                                <input type="text" class="border-none" id="send-regular-box" name="send-regular-box" value="Обычная ячейка" readonly>
                            </div>
                            <div class="wrapper__param">
                                <div class="param">Ячейка:</div>
                                <input type="text" class="border-none" id="unit" name="unit" value="1м²" readonly>
                            </div>
                            <div class="wrapper__param">
                                <div class="param">Размеры:</div>
                                <input type="text" class="border-none" id="send-size" name="send-size" value="1.4 x 0.7 x 1.1" readonly>
                            </div>
                            <div class="wrapper__param">
                                <div class="param">Цена за месяц:</div>
                                <input class="param__input_style" type="text" class="param__input_style" id="send-price" name="send-price" value="450 " readonly> <span class="style__span_param">грн</span>
                            </div>
                            <div class="wrapper__param">
                                <div class="param">Период хранения: </div>
                                <input type="text" class="param__input_styles" id="send-storage-period" name="send-storage-period" value="30 " readonly> <span class="style__span_param">дней</span>
                            </div>

                            <div class="formes">
                                <input type="text" name="name" placeholder="Имя*" required>
                            </div>
                            <div class="formes">
                                <input type="tel" name="number" placeholder="Телефон*" required>
                            </div>
                            <div class="formes">
                                <input type="email" name="email" placeholder="Email*">
                            </div>
                            <button class="button__forms-send_info" value="Отправить заявку" type="submit">Отправить заявку</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="free__transfer">
        <div class="container">
            <div class="title__free-transfer">Бесплатные услуги</div>
            
             
            <div class="wrapper__transfer_block">
            <div class="wrapp__block_transfer">
                    <div class="block__transfer">
                    <div class="krug">
                        <img src="img/s1.png" alt="">
                    </div>
                </div>
                <div class="title__krug">ТЕРМИНАЛ ОПЛАТЫ</div>
                </div>
                <div class="wrapp__block_transfer">
                    <div class="block__transfer">
                    <div class="krug">
                    <img src="img/s2.png" alt="">
                    </div>
                </div>
                <div class="title__krug">ПАРКОВКА</div>
                </div>
                <div class="wrapp__block_transfer">
                    <div class="block__transfer">
                    <div class="krug">
                    <img src="img/s3.png" alt="">
                    </div>
                </div>
                <div class="title__krug">РОЗЕТКИ</div>
                </div>
                <div class="wrapp__block_transfer">
                    <div class="block__transfer">
                    <div class="krug">
                    <img src="img/s4.png" alt="">
                    </div>
                </div>
                <div class="title__krug">ТЕЛЕЖКИ</div>
                </div>
                
           
                <div class="wrapp__block_transfer">
                    <div class="block__transfer">
                    <div class="krug">
                    <img src="img/s5.png" alt="">
                    </div>
                </div>
                <div class="title__krug">WI-FI
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
        <div class="contact__blocks_wrapper">
                <div class="contact__block">
                    <h1 class="contact__addres">Адрес:</h1>
                    <div><a  href="https://www.google.com/maps/place/%D0%9C%D0%B8%D1%80+%D1%81%D1%82%D1%80%D0%B0%D1%85%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F/@47.0980395,37.5333766,20.25z/data=!4m12!1m6!3m5!1s0x0:0x9babddcbd213bea1!2z0JzQuNGAINGB0YLRgNCw0YXQvtCy0LDQvdC40Y8!8m2!3d47.0980656!4d37.5334503!3m4!1s0x0:0x9babddcbd213bea1!8m2!3d47.0980656!4d37.5334503?authuser=7" target="_blank"
                            >проспект Мира, 93В</a> </div>
                </div>
                <div class="contact__block">
                    <h1 class="contact__addres">Время работы:</h1>
                    <div>Круглосуточно</div>
                    
                </div>
                <div class="contact__block">
                    <h1 class="contact__addres">Контакты:</h1>
                    <div><i class="fas fa-phone"> <a href="tel:+380972165232">+38 (097) 777 88 99</a></i> </div>
                    <div><i class="fas fa-phone"> <a href="tel:+380665430973">+38 (066) 666 88 00</a></i> </div>
                </div>
            </div>
            
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d160.25259263180075!2d36.24125879735321!3d50.010577700711934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dbd3432627%3A0x5050954abba7d85e!2z0YPQuy4g0KHRg9C80YHQutCw0Y8sINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1607023129278!5m2!1sru!2sua" 
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <?php require_once 'footer.php'; ?>
 
    <script src="js/main.js"></script>
</body>
</html>