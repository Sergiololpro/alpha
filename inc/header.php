<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="js/libs/slick/slick.css">
  <link rel="stylesheet" href="js/libs/select2/select2.min.css">
  <link rel="stylesheet" href="css/styles.css?v=7">
  <title><?=$title?></title>
</head>

<body>
  <header class="l_header">
    <div class="wrapper wrapper-l_header">
        <a href="#" class="l_logo l_logo-l_header">
            <img src="img/l_logo.png" alt="">
        </a>
        <div class="l_header__right">
            <div class="l_currency">
                <div class="l_currency__text">Currency:</div>
                <div data-id="1" class="l_currency__choose active">
                    <div class="l_currency__symbol">£</div>
                    <div class="l_currency__title">GBP</div>
                </div>
                <div data-id="2" class="l_currency__choose">
                    <div class="l_currency__symbol">$</div>
                    <div class="l_currency__title">USD</div>
                </div>
                <div data-id="3" class="l_currency__choose">
                    <div class="l_currency__symbol">€</div>
                    <div class="l_currency__title">EUR</div>
                </div>
                <div class="l_currency__drop">
                    <div class="l_currency__content">
                        <div data-id="1" class="l_currency__row active">
                            <div class="l_currency__symbol">£</div>
                            <div class="l_currency__title">GBP</div>
                        </div>
                        <div data-id="2" class="l_currency__row">
                            <div class="l_currency__symbol">$</div>
                            <div class="l_currency__title">USD</div>
                        </div>
                        <div data-id="3" class="l_currency__row">
                            <div class="l_currency__symbol">€</div>
                            <div class="l_currency__title">EUR</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l_lang">
                <div class="l_lang__el">
                    <div data-id="1" class="l_lang__choose active">
                        <div style="background-image: url(img/l_lang__flag-1.png);" class="l_lang__flag"></div>
                        <div class="l_lang__text">Eng</div>
                    </div>
                    <div data-id="2" class="l_lang__choose">
                        <div style="background-image: url(img/l_lang__flag-2.png);" class="l_lang__flag"></div>
                        <div class="l_lang__text">Esp</div>
                    </div>
                    <div data-id="3" class="l_lang__choose">
                        <div style="background-image: url(img/l_lang__flag-3.png);" class="l_lang__flag"></div>
                        <div class="l_lang__text">Ita</div>
                    </div>
                    <div data-id="4" class="l_lang__choose">
                        <div style="background-image: url(img/l_lang__flag-4.png);" class="l_lang__flag"></div>
                        <div class="l_lang__text">Ger</div>
                    </div>
                    <div data-id="5" class="l_lang__choose">
                        <div style="background-image: url(img/l_lang__flag-5.png);" class="l_lang__flag"></div>
                        <div class="l_lang__text">Fr</div>
                    </div>
                    <div class="l_lang__arrow"></div>
                    <div class="l_lang__drop">
                        <div class="l_lang__content">
                            <div data-id="1" class="l_lang__row active">
                                <div style="background-image: url(img/l_lang__flag-1.png);" class="l_lang__flag"></div>
                                <div class="l_lang__text">Eng</div>
                            </div>
                            <div data-id="2" class="l_lang__row">
                                <div style="background-image: url(img/l_lang__flag-2.png);" class="l_lang__flag"></div>
                                <div class="l_lang__text">Esp</div>
                            </div>
                            <div data-id="3" class="l_lang__row">
                                <div style="background-image: url(img/l_lang__flag-3.png);" class="l_lang__flag"></div>
                                <div class="l_lang__text">Ita</div>
                            </div>
                            <div data-id="4" class="l_lang__row">
                                <div style="background-image: url(img/l_lang__flag-4.png);" class="l_lang__flag"></div>
                                <div class="l_lang__text">Ger</div>
                            </div>
                            <div data-id="5" class="l_lang__row">
                                <div style="background-image: url(img/l_lang__flag-5.png);" class="l_lang__flag"></div>
                                <div class="l_lang__text">Fr</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l_header__menu">
            <div class="l_header__lines">
                <div></div><div></div><div></div>
            </div>
        </div>
    </div>
  </header>

