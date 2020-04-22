<!DOCTYPE html>
<html lang="en">
<head>
    <title>Грузоперевозки по России и странам СНГ. Транспортная компания ГлавДоставка</title>
    <meta charset="UTF-8">
    <meta name="keywords"
          content="транспортная компания, отправить груз, доставка грузов, перевозка грузов, доставка по Беларуси, грузоперевозки по Беларуси, транспортные услуги, услуги перевозки, транспортная логистика"/>
    <meta name="description"
          content="«ГлавДоставка» - динамически развивающаяся транспортная компания с высоким уровнем надёжности. Оказываем услуги по перевозке грузов по Беларуси и странам СНГ."/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
</head>
<body>

<header id="header" class="header">
    <div class="container">
        <button class="header__menu-mob" tabindex="1"><img src="assets/img/btn_mob-menu.svg" alt=""/></button>

        <div class="header__inner">
            <div class="header__content">
                <div class="header__logo header__logo--color"><a href="#"><img src="assets/img/logo_color.svg" alt="Главдоставка"></a></div>
                <div class="header__logo header__logo--white"><a href="#"><img src="assets/img/logo.svg" alt="Главдоставка"></a></div>
<!--                <div class="header__cities">
                    <p>Минск</p>
                    <a href="#">другой город</a>
                </div>-->
            </div>

            <div class="header__about">
                <div class="header__shedules">
                    <p>
                        Пн-Пт с 08.30-18.00</br>
                        <span class="little-content">Время работы</br> Контакт-центра</span>
                    </p>
                </div>

                <div class="header__contacts">
                    <p>+375 (17)<span>336-24-24</span></p>
                    <a class="btn-request" href="">Заказать звонок</a>
                </div>
            </div>
        </div>

        <nav>
            <ul class="header__menu">

                <li class="header__menu-drop"><a href="#services"><span>Услуги</span></a>
                    <ul class="header__menu-sub">
                        <!-- <li><a href="#">Вакансии</a></li>
                         <li><a href="#">Тарифы</a></li>
                         <li><a href="#">Вопрос и ответ</a></li>
                         <li><a href="#">Франшиза</a></li>
                         <li><a href="#">Виды транспорта</a></li>-->
                    </ul>
                </li>

                <li class="header__menu-drop"><a href="#tariffs"><span>Тарифы</span></a>
                    <ul class="header__menu-sub">
                        <!-- <li><a href="#">Перевозка грузов</a></li>
                         <li><a href="#">Паллетная доставка</a></li>
                         <li><a href="#">Полные машины</a></li>
                         <li><a href="#">Забор и доставка грузов</a></li>
                         <li><a href="#">По городу и области</a></li>
                         <li><a href="#">Авиаперевозка</a></li>
                         <li><a href="#">Южный экспресс</a></li>
                         <li><a href="#">Северный экспресс</a></li>-->
                    </ul>
                </li>

                <li class="header__menu-drop"><a href="#news"><span>Акции</span></a>
                    <ul class="header__menu-sub">
                        <!--<li class="first"><a href="#">Упаковка</a></li>
                        <li><a href="#">Хранение грузов</a></li>
                        <li><a href="#">Возврат документов</a></li>
                        <li><a href="#">Страхование</a></li>
                        <li><a href="#">Погрузо-разгрузочные работы</a></li>
                        <li><a href="#">Сверхнормативное хранение</a></li>-->
                    </ul>
                </li>

                <li><a href="#document">Документы</a></li>
                <li><a href="#payment">Способы оплаты</a></li>
                <li><a href="#footer">Контакты</a></li>
            </ul>
        </nav>
    </div>

</header>

<main>
    <section class="module">
        <div class="container">

            <div id="calculate" class="module__item module__item--left">
                <div class="module__slider-control">
                    <span class="module__slider-row--Left"><i class="left"></i></span>
                    <span class="module__slider-row--right"><i class="right"></i></span>
                </div>

                <div class="module__info showing">
                    <h3><span>Без предоплат</span></h3>
                    <p>Для юридических лиц</p>
                </div>
                <div class="module__info">
                    <h3><span>Четкие графики!</span></h3>
                    <p>Гомель 5 рейсов в неделю <br>
                        Гродно, Витебск - 4 рейса в неделю <br>
                        Брест, Могилёв - 3 рейса в неделю
                    </p>
                </div>
                <!--
                <div class="module__info">
                    <h3><span>-20% для новых клиентов!</span></h3>
                    <p>Для новых юридических лиц. На услугу Перевозка по Беларуси <br>
                        *скидки не суммируются
                    </p>
                </div>
                !-->

                <figure class="module__slide showing">
                    <img src="assets/img/slide-1_glavdostavka.jpg" alt=""/>
                </figure>
                <figure class="module__slide">
                    <img src="assets/img/slide-2_glavdostavka.jpg" alt=""/>
                </figure>
                <!--
                <figure class="module__slide">
                    <img src="assets/img/slide-3_glavdostavka.jpg" alt=""/>
                </figure>
                !-->
            </div>

            <!--блок "Калькулятор перевозки!"-->

            <div class="module__item module__item--right">
                <form class="calculate" action="">
                    <h2 class="title-section">Рассчитать перевозку</h2>
                    <div class="module__cities">

                        <label for="cityFrom">Город отправления</label>
                        <input type="text" id="cityFrom" class="js-calculate" placeholder="Например, Минск" required>

                        <button class="module__btn"><img src="assets/img/rows.svg" alt=""/></button>

                        <label for="cityTo">Город доставки</label>
                        <input type="text" id="cityTo" class="js-calculate" placeholder="Например, Гродно" required>

                    </div>

                    <div class="module__content">

                        <label class="module__data module__data--weight">
                            Вес
                            <input class="module__input module__input--weight js-calculate" type="text" name="weight" placeholder="0.0" maxlength="5"><span>кг</span>

                        </label>

                        <div class="module__tabs">

                            <label class="module__tab-item">

                                <label class="module__switch">
                                    Габариты
                                    <input type="radio" name="switch">
                                </label>

                                <span>|</span>

                                <label class="module__switch">
                                    Объем
                                    <input type="radio" name="switch">
                                </label>

                                <label class="module__data module__data--switching">
                                  <span class="modul-suf modul-suf--d">Д</span>
                                    <input class="module__input js-calculate" type="text" placeholder="0.0" maxlength="4"
                                           name="dimensions"><span class="modul-suf modul-suf--sh">Ш</span><span>x</span>
                                    <input class="module__input js-calculate" type="text" placeholder="0.0" maxlength="4"
                                           name="dimensions"><span class="modul-suf modul-suf--v">В</span><span>x</span>
                                    <input class="module__input js-calculate" type="text" placeholder="0.0" maxlength="4"
                                           name="dimensions"><span>м</span>
                                </label>


                                <label class="module__data module__data--switching">
                                    <input class="module__input js-calculate" name="volume" type="text"
                                           placeholder="0.0"><span>м<sup>3</sup></span>
                                </label>



                            </label>
                        </div>

                    </div>

                    <div class="flex-box flex-box_module">
                        <label class="module__checks">
                            <input class="module__dimensions-one" type="checkbox">
                            <span></span>
                            Габарит одного места
                        </label>
                        <label class="module__quantity-box quantity-box">
                            <span class="quantity-box__btn-arrow btn-arrow btn-arrow_left"> - </span>
                            <input id="betNewBet" class="module__dimensions-quantity quantity-box__dimensions-quantity"
                                   type="number" name="lotNewBet" step="1" value="1" disabled>
                            <span class="quantity-box__btn-arrow btn-arrow btn-arrow_right"> + </span>
                        </label>
                        <label class="module__checks">
                            <input class="module__сustomer-delivery" type="checkbox">
                            <span></span>
                            Сам привезу либо заберу со склада в Минске
                        </label>
                    </div>


                    <div class="module__control">
                        <button class="btn btn-calculate btn--white"><span>рассчитать</span></button>
                        <button class="btn btn-request"><span>оформить заявку</span></button>
                    </div>

                    <div class="flex-box">
                        <p class="module__date"><b>00.00.2020</b> <span>— дата забора</span></p>
                        <p class="module__date"><b>00.00.2020</b> <span>— дата доставки</span></p>

                    </div>
                    <p class="module__sum"><b>0 BYN с НДС</b></p>
                    <p class="module__message hidden">Выбранная услуга рассчитывается индивидуально. Рекомендуем связаться с менеджером по телефону +375173362323, либо заполнить форму обратной связи</p>
                </form>


            </div>
            <!--конец блока "Калькулятор перевозки!"-->

        </div>


    </section>


    <div class="wrapper">
        <section id="services" class="services">
            <div class="container">
                <h2 class="title-section">Услуги</h2>
                <div class="flex-box">
                    <div class="services__item">
                        <a href="#" class="services__link services__link--group"></a>
                        <h4>Перевозка сборных грузов</h4>
                    </div>
                    <div class="services__item">
                        <a href="#" class="services__link services__link--palet"></a>
                        <h4>Паллетная доставка</h4>
                    </div>
                    <div class="services__item">
                        <a href="#" class="services__link services__link--car"></a>
                        <h4>Прямая машина</h4>
                    </div>
                    <div class="services__item">
                        <a href="#" class="services__link services__link--shop"></a>
                        <h4>интернет-магазинам</h4>
                    </div>
                    <div class="services__item">
                        <a href="#" class="services__link services__link--pack"></a>
                        <h4>Упаковка грузов</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Блок Тарифы !-->
        <section id="tariffs" class="tariffs">
            <div class="container">
                <h2 class="title-section">Тарифы</h2>

                <div class="tariffs__parameters">

                    <div class="tariffs__label">
                        <span class="tariffs__control"><span class="tariffs__select tariffs__departure">Минск</span> <i
                                class="arrow down"></i></span>
                        <div class="tariffs__content hidden tariffs--departure">
                            <span class="tariffs__option">Минск</span>
                            <span class="tariffs__option">Брест</span>
                            <span class="tariffs__option">Витебск</span>
                            <span class="tariffs__option">Гродно</span>
                            <span class="tariffs__option">Гомель</span>
                            <span class="tariffs__option">Могилев</span>
                            <span class="tariffs__option">Барановичи</span>
                            <span class="tariffs__option">Барань</span>
                            <span class="tariffs__option">Белоозерск</span>
                            <span class="tariffs__option">Береза</span>
                            <span class="tariffs__option">Березино</span>
                            <span class="tariffs__option">Березовка</span>
                            <span class="tariffs__option">Бобруйск</span>
                            <span class="tariffs__option">Борисов</span>
                            <span class="tariffs__option">Браслав</span>
                            <span class="tariffs__option">Буда-Кошелево</span>
                            <span class="tariffs__option">Быхов</span>
                            <span class="tariffs__option">Василевичи</span>
                            <span class="tariffs__option">Верхнедвинск</span>
                            <span class="tariffs__option">Ветка</span>
                            <span class="tariffs__option">Вилейка</span>
                            <span class="tariffs__option">Волковыск</span>
                            <span class="tariffs__option">Воложин</span>
                            <span class="tariffs__option">Высокое</span>
                            <span class="tariffs__option">Ганцевичи</span>
                            <span class="tariffs__option">Глубокое</span>
                            <span class="tariffs__option">Горки</span>
                            <span class="tariffs__option">Городок</span>
                            <span class="tariffs__option">Давид-городок</span>
                            <span class="tariffs__option">Дзержинск</span>
                            <span class="tariffs__option">Добруш</span>
                            <span class="tariffs__option">Докшицы</span>
                            <span class="tariffs__option">Дрогичин</span>
                            <span class="tariffs__option">Дубровно</span>
                            <span class="tariffs__option">Дятлово</span>
                            <span class="tariffs__option">Ельск</span>
                            <span class="tariffs__option">Жабинка</span>
                            <span class="tariffs__option">Житковичи</span>
                            <span class="tariffs__option">Жлобин</span>
                            <span class="tariffs__option">Жодино</span>
                            <span class="tariffs__option">Заславль</span>
                            <span class="tariffs__option">Иваново</span>
                            <span class="tariffs__option">Ивацевичи</span>
                            <span class="tariffs__option">Ивье</span>
                            <span class="tariffs__option">Калинковичи</span>
                            <span class="tariffs__option">Каменец</span>
                            <span class="tariffs__option">Кировск</span>
                            <span class="tariffs__option">Клецк</span>
                            <span class="tariffs__option">Климовичи</span>
                            <span class="tariffs__option">Кличев</span>
                            <span class="tariffs__option">Кобрин</span>
                            <span class="tariffs__option">Копыль</span>
                            <span class="tariffs__option">Коссово</span>
                            <span class="tariffs__option">Костюковичи</span>
                            <span class="tariffs__option">Кричев</span>
                            <span class="tariffs__option">Крупки</span>
                            <span class="tariffs__option">Лепель</span>
                            <span class="tariffs__option">Лида</span>
                            <span class="tariffs__option">Логойск</span>
                            <span class="tariffs__option">Лунинец</span>
                            <span class="tariffs__option">Любань</span>
                            <span class="tariffs__option">Ляховичи</span>
                            <span class="tariffs__option">Малорита</span>
                            <span class="tariffs__option">Марьина Горка</span>
                            <span class="tariffs__option">Микашевичи</span>
                            <span class="tariffs__option">Миоры</span>
                            <span class="tariffs__option">Мозырь</span>
                            <span class="tariffs__option">Молодечно</span>
                            <span class="tariffs__option">Мосты</span>
                            <span class="tariffs__option">Мстиславль</span>
                            <span class="tariffs__option">Мядель</span>
                            <span class="tariffs__option">Наровля</span>
                            <span class="tariffs__option">Несвиж</span>
                            <span class="tariffs__option">Новогрудок</span>
                            <span class="tariffs__option">Новолукомль</span>
                            <span class="tariffs__option">Новополоцк</span>
                            <span class="tariffs__option">Орша</span>
                            <span class="tariffs__option">Осиповичи</span>
                            <span class="tariffs__option">Островец</span>
                            <span class="tariffs__option">Ошмяны</span>
                            <span class="tariffs__option">Петриков</span>
                            <span class="tariffs__option">Пинск</span>
                            <span class="tariffs__option">Полоцк</span>
                            <span class="tariffs__option">Поставы</span>
                            <span class="tariffs__option">Пружаны</span>
                            <span class="tariffs__option">Речица</span>
                            <span class="tariffs__option">Рогачев</span>
                            <span class="tariffs__option">Светлогорск</span>
                            <span class="tariffs__option">Свислочь</span>
                            <span class="tariffs__option">Сенно</span>
                            <span class="tariffs__option">Скидель</span>
                            <span class="tariffs__option">Славгород</span>
                            <span class="tariffs__option">Слоним</span>
                            <span class="tariffs__option">Слуцк</span>
                            <span class="tariffs__option">Смолевичи</span>
                            <span class="tariffs__option">Сморгонь</span>
                            <span class="tariffs__option">Солигорск</span>
                            <span class="tariffs__option">Старые Дороги</span>
                            <span class="tariffs__option">Столбцы</span>
                            <span class="tariffs__option">Столин</span>
                            <span class="tariffs__option">Толочин</span>
                            <span class="tariffs__option">Туров</span>
                            <span class="tariffs__option">Узда</span>
                            <span class="tariffs__option">Фаниполь</span>
                            <span class="tariffs__option">Хойники</span>
                            <span class="tariffs__option">Чаусы</span>
                            <span class="tariffs__option">Чашники</span>
                            <span class="tariffs__option">Червень</span>
                            <span class="tariffs__option">Чериков</span>
                            <span class="tariffs__option">Чечерск</span>
                            <span class="tariffs__option">Шклов</span>
                            <span class="tariffs__option">Щучин</span>

                        </div>
                    </div>
                    <button class="btn__row-reverse"><img src="assets/img/row-reverse.svg" alt=""/></button>
                    <div class="tariffs__label">
                        <span class="tariffs__control"><span
                                class="tariffs__select tariffs__destination">Минск</span> <i
                                class="arrow down"></i></span>
                        <div class="tariffs__content hidden tariffs--destination">

                            <span class="tariffs__option">Минск</span>
                            <span class="tariffs__option">Брест</span>
                            <span class="tariffs__option">Витебск</span>
                            <span class="tariffs__option">Гродно</span>
                            <span class="tariffs__option">Гомель</span>
                            <span class="tariffs__option">Могилев</span>

                            <span class="tariffs__option">Барановичи</span>
                            <span class="tariffs__option">Барань</span>
                            <span class="tariffs__option">Белоозерск</span>
                            <span class="tariffs__option">Береза</span>
                            <span class="tariffs__option">Березино</span>
                            <span class="tariffs__option">Березовка</span>
                            <span class="tariffs__option">Бобруйск</span>
                            <span class="tariffs__option">Борисов</span>
                            <span class="tariffs__option">Браслав</span>
                            <span class="tariffs__option">Буда-Кошелево</span>
                            <span class="tariffs__option">Быхов</span>
                            <span class="tariffs__option">Василевичи</span>
                            <span class="tariffs__option">Верхнедвинск</span>
                            <span class="tariffs__option">Ветка</span>
                            <span class="tariffs__option">Вилейка</span>
                            <span class="tariffs__option">Волковыск</span>
                            <span class="tariffs__option">Воложин</span>
                            <span class="tariffs__option">Высокое</span>
                            <span class="tariffs__option">Ганцевичи</span>
                            <span class="tariffs__option">Глубокое</span>
                            <span class="tariffs__option">Горки</span>
                            <span class="tariffs__option">Городок</span>
                            <span class="tariffs__option">Давид-городок</span>
                            <span class="tariffs__option">Дзержинск</span>
                            <span class="tariffs__option">Добруш</span>
                            <span class="tariffs__option">Докшицы</span>
                            <span class="tariffs__option">Дрогичин</span>
                            <span class="tariffs__option">Дубровно</span>
                            <span class="tariffs__option">Дятлово</span>
                            <span class="tariffs__option">Ельск</span>
                            <span class="tariffs__option">Жабинка</span>
                            <span class="tariffs__option">Житковичи</span>
                            <span class="tariffs__option">Жлобин</span>
                            <span class="tariffs__option">Жодино</span>
                            <span class="tariffs__option">Заславль</span>
                            <span class="tariffs__option">Иваново</span>
                            <span class="tariffs__option">Ивацевичи</span>
                            <span class="tariffs__option">Ивье</span>
                            <span class="tariffs__option">Калинковичи</span>
                            <span class="tariffs__option">Каменец</span>
                            <span class="tariffs__option">Кировск</span>
                            <span class="tariffs__option">Клецк</span>
                            <span class="tariffs__option">Климовичи</span>
                            <span class="tariffs__option">Кличев</span>
                            <span class="tariffs__option">Кобрин</span>
                            <span class="tariffs__option">Копыль</span>
                            <span class="tariffs__option">Коссово</span>
                            <span class="tariffs__option">Костюковичи</span>
                            <span class="tariffs__option">Кричев</span>
                            <span class="tariffs__option">Крупки</span>
                            <span class="tariffs__option">Лепель</span>
                            <span class="tariffs__option">Лида</span>
                            <span class="tariffs__option">Логойск</span>
                            <span class="tariffs__option">Лунинец</span>
                            <span class="tariffs__option">Любань</span>
                            <span class="tariffs__option">Ляховичи</span>
                            <span class="tariffs__option">Малорита</span>
                            <span class="tariffs__option">Марьина Горка</span>
                            <span class="tariffs__option">Микашевичи</span>
                            <span class="tariffs__option">Миоры</span>
                            <span class="tariffs__option">Мозырь</span>
                            <span class="tariffs__option">Молодечно</span>
                            <span class="tariffs__option">Мосты</span>
                            <span class="tariffs__option">Мстиславль</span>
                            <span class="tariffs__option">Мядель</span>
                            <span class="tariffs__option">Наровля</span>
                            <span class="tariffs__option">Несвиж</span>
                            <span class="tariffs__option">Новогрудок</span>
                            <span class="tariffs__option">Новолукомль</span>
                            <span class="tariffs__option">Новополоцк</span>
                            <span class="tariffs__option">Орша</span>
                            <span class="tariffs__option">Осиповичи</span>
                            <span class="tariffs__option">Островец</span>
                            <span class="tariffs__option">Ошмяны</span>
                            <span class="tariffs__option">Петриков</span>
                            <span class="tariffs__option">Пинск</span>
                            <span class="tariffs__option">Полоцк</span>
                            <span class="tariffs__option">Поставы</span>
                            <span class="tariffs__option">Пружаны</span>
                            <span class="tariffs__option">Речица</span>
                            <span class="tariffs__option">Рогачев</span>
                            <span class="tariffs__option">Светлогорск</span>
                            <span class="tariffs__option">Свислочь</span>
                            <span class="tariffs__option">Сенно</span>
                            <span class="tariffs__option">Скидель</span>
                            <span class="tariffs__option">Славгород</span>
                            <span class="tariffs__option">Слоним</span>
                            <span class="tariffs__option">Слуцк</span>
                            <span class="tariffs__option">Смолевичи</span>
                            <span class="tariffs__option">Сморгонь</span>
                            <span class="tariffs__option">Солигорск</span>
                            <span class="tariffs__option">Старые Дороги</span>
                            <span class="tariffs__option">Столбцы</span>
                            <span class="tariffs__option">Столин</span>
                            <span class="tariffs__option">Толочин</span>
                            <span class="tariffs__option">Туров</span>
                            <span class="tariffs__option">Узда</span>
                            <span class="tariffs__option">Фаниполь</span>
                            <span class="tariffs__option">Хойники</span>
                            <span class="tariffs__option">Чаусы</span>
                            <span class="tariffs__option">Чашники</span>
                            <span class="tariffs__option">Червень</span>
                            <span class="tariffs__option">Чериков</span>
                            <span class="tariffs__option">Чечерск</span>
                            <span class="tariffs__option">Шклов</span>
                            <span class="tariffs__option">Щучин</span>


                        </div>
                    </div>

                    <div class="tariffs__label">
                        <span class="tariffs__control"><span
                                class="tariffs__select tariffs__service">Сборный груз</span> <i class="arrow down"></i></span>
                        <div class="tariffs__content hidden tariffs--service">

                            <span class="tariffs__option">Сборный груз</span>
                            <span class="tariffs__option">Палетная доставка</span>
                            <span class="tariffs__option">Упаковка</span>

                        </div>
                    </div>

                    <button class="btn tariffs__btn btn--white"><span>Узнать тариф</span></button>
                </div>
                <p>Цены указаны на услугу <b>«Перевозка сборных грузов»</b> <b>от подъезда — к подъезду.</b>.
                    Без действующих скидок.</p>
                <div class="tariffs__table">
                    <table class="tariffs__cargo visible" cellspacing="0">
                        <tbody>

                        <tr>
                            <td class="tariffs__table-head">объём до (м<sup>3</sup>)</td>
                            <td>0,02</td>
                            <td>0,04</td>
                            <td>0,08</td>
                            <td>0,13</td>
                            <td>0,17</td>
                            <td>0,21</td>
                            <td>0,32</td>
                            <td>0,43</td>
                            <td>0,53</td>
                            <td>0,64</td>
                            <td>0,75</td>
                            <td>0,86</td>
                            <td>0,99</td>
                            <td>1,30</td>
                            <td>1,73</td>
                            <td>2,17</td>
                            <td>2,60</td>
                            <td>3,04</td>
                            <td>3,90</td>
                            <td>4,77</td>
                            <td>5,60</td>
                            <td>6,52</td>
                        </tr>

                        <tr>
                            <td class="tariffs__table-head">масса до (кг)</td>
                            <td>5</td>
                            <td>10</td>
                            <td>20</td>
                            <td>30</td>
                            <td>40</td>
                            <td>50</td>
                            <td>75</td>
                            <td>99</td>
                            <td>124</td>
                            <td>149</td>
                            <td>174</td>
                            <td>199</td>
                            <td>229</td>
                            <td>299</td>
                            <td>399</td>
                            <td>499</td>
                            <td>599</td>
                            <td>699</td>
                            <td>889</td>
                            <td>1099</td>
                            <td>1299</td>
                            <td>1499</td>
                        </tr>
                        <tr>
                            <td class="tariffs__table-head">цена (бел. руб.)</td>
                            <td class="tariffs__price">7.20</td>
                            <td class="tariffs__price">8.40</td>
                            <td class="tariffs__price">10.80</td>
                            <td class="tariffs__price">13.20</td>
                            <td class="tariffs__price">15.00</td>
                            <td class="tariffs__price">18.00</td>
                            <td class="tariffs__price">16.80</td>
                            <td class="tariffs__price">18.00</td>
                            <td class="tariffs__price">22.90</td>
                            <td class="tariffs__price">23.80</td>
                            <td class="tariffs__price">25.60</td>
                            <td class="tariffs__price">28.50</td>
                            <td class="tariffs__price">29.70</td>
                            <td class="tariffs__price">33.60</td>
                            <td class="tariffs__price">39.60</td>
                            <td class="tariffs__price">47.00</td>
                            <td class="tariffs__price">54.15</td>
                            <td class="tariffs__price">63.65</td>
                            <td class="tariffs__price">76.50</td>
                            <td class="tariffs__price">94.50</td>
                            <td class="tariffs__price">100.00</td>
                            <td class="tariffs__price">105.00</td>
                        </tr>

                        </tbody>
                    </table>


                    <table class="tariffs__pallet" cellspacing="0">
                        <tbody>

                        <tr>
                            <td class="tariffs__table-head">количество паллет (шт.)</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>

                        <tr>
                            <td class="tariffs__table-head">цена (бел. руб.)</td>
                            <td class="tariffs__pallet-price"></td>
                            <td class="tariffs__pallet-price"></td>
                            <td class="tariffs__pallet-price"></td>
                            <td class="tariffs__pallet-price"></td>
                            <td class="tariffs__pallet-price"></td>
                        </tr>
                        </tbody>
                    </table>


                    <table class="tariffs__pack" cellspacing="0">
                        <tbody>

                        <tr>
                            <td class="tariffs__table-head">Услуга</td>
                            <td>Мин. стоимость услуги (бел. руб. с НДС)</td>
                            <td>Ед. измерения</td>
                            <td>Тариф за ед. измерения (бел. руб с НДС)</td>
                        </tr>

                        <tr>
                            <td class="tariffs__table-head">Упаковка в коробку</td>
                            <td>0.04</td>
                            <td>шт.</td>
                            <td>3.96</td>

                        </tr>

                        <tr>
                            <td class="tariffs__table-head">Скрепить стреппинг-лентой</td>
                            <td>0.40</td>
                            <td>м<sup>3</sup></td>
                            <td>1.00</td>

                        </tr>

                        <tr>
                            <td class="tariffs__table-head">Упаковка в мешок с пломбой, 95 х 55 см</td>
                            <td>0.04</td>
                            <td>шт.</td>
                            <td>3.96</td>

                        </tr>
                        <tr>
                            <td class="tariffs__table-head">Упаковка в стретч-пленку</td>
                            <td>3.96</td>
                            <td>м<sup>3</sup></td>
                            <td>5.94</td>

                        </tr>
                        <tr>
                            <td class="tariffs__table-head">Упаковка в сейф-пакет</td>
                            <td>0.04</td>
                            <td>шт.</td>
                            <td>7.13</td>

                        </tr>
                        <tr>
                            <td class="tariffs__table-head">Паллетизация, паллета до 1 м</td>
                            <td>0.04</td>
                            <td>шт.</td>
                            <td>15.05</td>

                        </tr>
                        <tr>
                            <td class="tariffs__table-head">Паллетизация, паллета до 2 м</td>
                            <td>0.04</td>
                            <td>шт.</td>
                            <td>19.01</td>

                        </tr>
                        <tr>
                            <td class="tariffs__table-head">Предоставление поддона</td>
                            <td>0.04</td>
                            <td>шт.</td>
                            <td>7.92</td>

                        </tr>
                        <tr>
                            <td class="tariffs__table-head">Обрешётка груза (жёсткая упаковка) *</td>
                            <td>21.78</td>
                            <td>м<sup>3</sup></td>
                            <td>35.64</td>

                        </tr>
                        <tr>
                            <td class="tariffs__table-head">Упаковка в паллетный борт</td>
                            <td>13.86</td>
                            <td>м<sup>3</sup></td>
                            <td>21.78</td>

                        </tr>
                        <tr>
                            <td class="tariffs__table-head">Упаковка в воздушно-пузырьковую плёнку</td>
                            <td>3.96</td>
                            <td>м<sup>3</sup></td>
                            <td>5.94</td>

                        </tr>

                        </tbody>
                    </table>

                </div>

                <div class="tariffs__links">
                    <a href="">Запросить индивидуальное предложение</a>
                    <a href="">Скачать полный прайс-лист по сборным грузам</a>
                </div>
            </div>

        </section>
        <!-- Конец Блок Тарифы !-->
        <section id="news" class="news">
            <div class="container">
                <h2 class="title-section title-section--group">Новости <!--<a>Все новости</a>!--></h2>
                <div id="news-slider">

                    <article class="news__article">
                        <h3 class="news__title"><a href="#">-10% на самовывоз, самоподвоз на склад</a></h3>
                        <div class="news__item">
                            <figure class="news__figure">
                                <img src="assets/img/slide-1_glavdostavka.jpg">
                            </figure>
                            <div class="news__inner">
                                <div class="news__content">
                                    <span class="news__date">03.03.2020 г.</span>
                                    <span class="news__description">
                                      <p>Скидки не суммируются.
                                            Не просчитывается на калькуляторе. Действует на период короновируса.
                                            Мы заботимся о вашем здоровье. </p>
                                    </span>
                                    <a class="btn news__btn" >
                                        <span>Подробнее</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
<!--
                    <article class="news__article">
                        <h3 class="news__title"><a href="#">-20% для новых клиентов</a></h3>
                        <div class="news__item">
                            <figure class="news__figure">
                                <img src="assets/img/slide-3_glavdostavka.jpg">
                            </figure>
                            <div class="news__inner">
                                <div class="news__content">
                                    <span class="news__date">07.03.2020 г.</span>
                                    <span class="news__description">
                                      <p>-20% для новых юридических лиц.
                                            <br><br>На услугу “Перевозка по Беларуси”</p>
                                    </span>
                                    <a class="btn news__btn" >
                                        <span>Подробнее</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
!-->
                    <article class="news__article">
                        <h3 class="news__title"><a href="#">Больше – дешевле!</a></h3>
                        <div class="news__item">
                            <figure class="news__figure">
                                <img src="assets/img/slide-5_glavdostavka.jpg">
                            </figure>
                            <div class="news__inner">
                                <div class="news__content">
                                    <span class="news__date">07.03.2020 г.</span>
                                    <span class="news__description">
                                      <p>Свыше 5 точек выгрузки скидка -10%</p>
                                    </span>
                                    <a class="btn news__btn" >
                                        <span>Подробнее</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
                <!--
                                    <span class="news__slider news__slider_left"></span>
                                    <span class="news__slider news__slider_right"></span>
                                    !-->
            </div>

        </section>

        <section id="document" class="document">
            <div class="container">
                <h2 class="title-section">документы</h2>
                <div class="flex-box">

                    <div class="document__item">
                        <h3>Общие документы:</h3>
                        <div class="document__item-links">
                            <span><img src="assets/img/icon_pdf.svg" alt=""><a href="#">График доставок</a></span>
                            <span><img src="assets/img/icon_pdf.svg" alt=""><a href="#">Правила перевозок</a></span>
                        </div>
                    </div>

                    <div class="document__item">
                        <h3>Для юридических лиц:</h3>
                        <p>Перевозка осуществляется с предоставлением ТТН заказчиком (4 экземпляра)</p>
                        <div class="document__item-links">
                            <span><img src="assets/img/icon_pdf.svg" alt=""><a href="#">Список документов ЮЛ</a></span>
                            <span><img src="assets/img/icon_doc.svg" alt=""><a href="#">Заявка ЮЛ</a></span>
                            <span><img src="assets/img/icon_pdf.svg" alt=""><a href="#">Договор</a></span>
                            <span><img src="assets/img/icon_doc.svg" alt=""><a href="#">Реестр-заявка</a></span>
                            <span><img src="assets/img/icon_doc.svg" alt=""><a
                                    href="#">Экспедиторская расписка</a></span>
                        </div>
                    </div>
                    <div class="document__item">
                        <h3>Для физических лиц (ФЛ):</h3>
                        <div class="document__item-links">
                            <span><img src="assets/img/icon_pdf.svg" alt=""><a href="#">Список документов ФЛ</a></span>
                            <span><img src="assets/img/icon_pdf.svg" alt=""><a href="#">Заказ-поручение ФЛ</a></span>
                            <span><img src="assets/img/icon_doc.svg" alt=""><a href="#">Заявка ФЛ</a></span>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="shipping" class="shipping">
            <div class="container">
                <h2 class="title-section">процесс отправки</h2>
                <div class="shipping__inner">
                    <div class="shipping__item"><span class="shipping__text">обращение</span></div>
                    <div class="shipping__item"><span class="shipping__text">заявка</span></div>
                    <div class="shipping__item"><span class="shipping__text">согласование с личным менеджером</span>
                    </div>
                    <div class="shipping__item"><span class="shipping__text">подготовка документов</span></div>
                    <div class="shipping__item"><span class="shipping__text">отправка</span></div>
                    <div class="shipping__item"><span class="shipping__text">обмер груза на складе</span></div>
                    <div class="shipping__item"><span class="shipping__text">доставка</span></div>
                    <div class="shipping__item"><span class="shipping__text">оплата</span></div>
                </div>
            </div>
        </section>

        <section id="payment" class="payment">
            <div class="container">
                <h2 class="title-section">Способы оплаты</h2>
                <div class="flex-box">
                    <div class="payment__item">
                        <div class="payment__content">
                            <h3>1. ерип</h3>
                            <p>Транспортные, экспедиционные услуги / Минск / ТМФ-Транс (номер услуги - 4673671, для физических лиц, в бел. руб)</p>
                        </div>
                    </div>
                    <div class="payment__item">
                        <div class="payment__content">
                            <h3>2. наличные</h3>
                            <p>При доставке водителю <br>
                                (для физических лиц, в бел. руб)
                            </p>
                        </div>
                    </div>
                    <div class="payment__item">
                        <div class="payment__content">
                            <h3>3. карта</h3>
                            <p>При доставке водителю<br>
                                (для физических лиц, в бел. руб)
                            </p>
                        </div>
                    </div>
                    <div class="payment__item">
                        <div class="payment__content">
                            <h3>4. безналичный расчёт</h3>
                            <p>Для юридических лиц, в бел. руб.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>


</main>



<footer id="footer" class="footer">
    <div class="footer__inner">
        <div class="container">
            <form class="footer-form form">
                <p class="footer__title">Нет времени разбираться?<br><span>Подскажем!</span></p>
                <div class="form__container">
                    <label>
                        Я хочу перевезти:
                        <input type="text" name="message-client">
                    </label>
                    <div class="flex-box">
                        <a><span>Телевизор в Гродно</span></a>
                        <a><span>Холодильник в Брест</span></a>
                    </div>
                    <button class="btn btn-request"><span>Отправить заявку</span></button>
                </div>
            </form>
            <div class="footer__copyright">
                <p>2008-2020 ООО «ТМФ-Транс»</p>
                <p>партнер компании ГлавДоставка на территории Беларуси</p>
            </div>
        </div>
        <div class="footer__contacts contacts">
            <ul class="contacts__list">
                <h4>склад</h4>
                <li class="contacts__icon geo">
                    <p>220075, г. Минск, ул. Промышленная, 1</p>
                </li>
                <li class="contacts__icon clock">
                    <p>
                        <strong>Пн - Пт </strong>9:00-20:00 (сдача груза до 18.00)
                        <strong>Сб </strong>9:00 - 14:00
                        <strong>Вс </strong>выходной
                    </p>
                </li>
                <li class="contacts__icon phone">
                    <p>
                        <a href="#">+375 (17) 336-24-24</a>; <a href="#">+375 (33) 329-26-26</a>
                    </p>
                </li>
                <li class="contacts__icon mail">
                    <p>
                        <a href="#">info.minsk@glavdostavka.ru</a>
                    </p>
                </li>
            </ul>
            <ul class="contacts__list">
                <h4>офис</h4>
                <li class="contacts__icon geo">
                    <p>220021, г. Минск, пер. Бехтерева 10, офис 1408</p>
                </li>
                <li class="contacts__icon clock">
                    <p>
                        <strong>Пн - Пт </strong>9:00-17:30
                        <strong>Сб </strong>9:30 - 14:00
                        <strong>Вс </strong>выходной
                    </p>
                </li>
                <li class="contacts__icon phone">
                    <p>
                        <a href="#">+375 (17) 336-26-26</a>; <a href="#">+375 (33) 620-26-26</a>
                    </p>
                </li>
                <li class="contacts__icon mail">
                    <p>
                        <a href="#">info.minsk@glavdostavka.ru</a>
                    </p>
                </li>
            </ul>
            <ul class="contacts__social social">
                <li class="social__icon ins"><a href="#" target="_blank" rel="nofollow" title="Перейти в наш Instagram-аккаунт">Инстаграмм</a></li>
                <li class="social__icon fb"><a href="#" target="_blank" rel="nofollow" title="Перейти на нашу Facebook-страницу">фейсбук</a></li>
                <li class="social__icon vk"><a href="#" target="_blank" rel="nofollow" title="Перейти в нашу группу Vk">Вконтакте</a></li>
                <li class="social__icon viber"><a href="#" target="_blank" rel="nofollow" title="Перейти в Вайбер">Вайбер</a></li>
                <li class="social__icon telegram"><a href="#" target="_blank" rel="nofollow" title="Перейти в Телеграм">Телеграм</a></li>
            </ul>

        </div>
    </div>
</footer>


<div class="preloader hid"></div>

<div class="modal">
    <form class="form-call">
        <h3>офорить заявку</h3>
        <input type="hidden" name="title">
        <label>
            Ваше имя
            <input type="text" name="name" minlength="2" required>
        </label>
        <label>
            Номер телефона
            <input type="tel" name="phone" value="+375" required>
        </label>
        <label>
            Комментарий
            <input type="text" name="comment">
        </label>
        <button class="btn">оформить заявку</button>
        <button class="btn-close">&#215;</button>
    </form>
</div>

<div class="popup">
    <div class="popup-thanks">
        <div class="popup__tittle">Спасибо,</div>
        <p>Мы с вами свяжемся</p>
    </div>
</div>

<ul class="widgets-btn">
    <!--<li class="widgets-btn__icon viber"><a href="#" target="_blank" rel="nofollow">перейти в вайбер</a></li>-->
    <li class="widgets-btn__icon phone btn-request"><a href="#" target="_blank" rel="nofollow" >заказать звонок</a></li>
    <li class="widgets-btn__icon calculator"><a href="#calculate">рассчитать</a></li>
    <li class="widgets-btn__icon top"><a href="#" rel="nofollow"></a></li>
</ul>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/xlsx.full.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=368e4890-6c0c-4a05-a5c1-2b03faf3f0df"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/provider.js"></script>
<script src="assets/js/s-main.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
