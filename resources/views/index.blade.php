<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <title>Commerc Real Home</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#3DD98E">
    <meta name="theme-color" content="#ffffff">
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- Preloading fonts -->
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <div class="container header__content">
        <a href="/" class="header__logo">
            <img src="img/base/logo.jpg" alt="">
        </a>
        <div class="header__socials socials">
            <a href="https://t.me/commercreal" target="_blank" class="social">
                <svg width="27" height="25">
                    <use xlink:href="#telegram"></use>
                </svg>
            </a>
            <a href="https://wa.me/+79210770330?text=Здравствуйте.%20Подскажите%20пожалуйста:" target="_blank" class="social">
                <svg width="25" height="24">
                    <use xlink:href="#whatsapp"></use>
                </svg>
            </a>
            <a href="https://www.instagram.com/commerc_real/" target="_blank" class="social">
                <svg width="24" height="24">
                    <use xlink:href="#instagram"></use>
                </svg>
                <span>*</span>
            </a>
            <a href="tel:+74958222202" class="social">
                <svg width="23" height="23">
                    <use xlink:href="#phone"></use>
                </svg>
            </a>
            <a href="mailto:commercreal@gmail.com" class="social">
                <svg width="31" height="23">
                    <use xlink:href="#email"></use>
                </svg>
            </a>
        </div>
        <nav class="header__nav nav wow fadeInUp">
            <ul class="nav__list">
                <li>
                    <a href="#hero">главная</a>
                </li>
                <li>
                    <a href="#about">о нас</a>
                </li>
                <li>
                    <a href="#advantages">преимущества</a>
                </li>
                <li>
                    <a href="#design">дизайн</a>
                </li>
                <li>
                    <a href="#management">управление</a>
                </li>
                <li>
                    <a href="#contacts">контакты</a>
                </li>
            </ul>
        </nav><!-- / .nav -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header><!-- / .header -->
<main class="main">
    <section class="hero section" id="hero">
        <div class="container">
            <div class="hero__content">
                <div class="wow fadeInUp" data-wow-delay="500">
                    <h1 class="hero__title">
                        {!!$data['h1']!!}
                    </h1>
                    <div class="hero__text">
                        {!!$data['h1_subtitle']!!}
                    </div>
                </div>
                <form action="#" class="hero__form wow fadeInUp" data-wow-delay="800">
                    <input
                            type="text"
                            name="phone"
                            placeholder="Ваш номер телефона"
                            minlength="16"
                            maxlength="16"
                            required>
                    <button type="submit" class="btn">Заказать звонок</button>
                </form>
            </div>
        </div>
        <div class="hero__img wow">
            <img src="img/base/hero.jpg" alt="" loading="lazy">
        </div>
    </section>
    <section class="about section" id="about">
        <div class="container">
            <div class="features-list">
                @foreach($data['advantages_1'] as $advantage)
                    <div class="feature">
                        <div class="feature__icon">
                            <img src="{{$advantage['icon']}}" alt="icon">
                        </div>
                        <h3 class="feature__title">{{$advantage['headline']}}</h3>
                        <div class="feature__text">{{$advantage['text']}}</div>
                    </div>
                @endforeach
            </div>
            <div class="about__img">
                <img src="img/base/plan.jpg" alt="">
            </div>
            @if($data['pdf_file'])
                <a href="{{Orchid\Attachment\Models\Attachment::where('id', $data['pdf_file'])->first()->url()}}" download class="about__pdf wow fadeInUp">
                    <svg width="174" height="174">
                        <use xlink:href="#pdf"></use>
                    </svg>
                    <span>скачай презентацию</span>
                    <img src="img/base/magazines-1.png" alt="" loading="lazy">
                </a>
            @endif
        </div>
    </section>
    <section class="advantages section" id="advantages">
        <div class="container">
            <div class="advantages__header">
                <h2><span>Этапы</span> работ</h2>
                <p>Мы делаем стильный и современный модульный ремонт.<br>
                    С последующим доверительным управлением и её эксплуатацией.<br>
                    Мы замыкаем на себе все процессы ремонта и аренды.</p>
            </div>
            <div class="advantages-grid">
                @foreach($data['advantages_2'] as $advantage)
                    <div class="advantage">
                        <div class="advantage__icon">
                            <img src="{{$advantage['icon']}}" alt="">
                        </div>
                        <div class="advantage__title">{{$advantage['headline']}}</div>
                        <div class="advantage__text">{!! $advantage['text'] !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="design section" id="design">
        <div class="design__header">
            <div class="container">
                <h2>Адаптивный <span>модульный дизайн</span></h2>
                <div class="design__text">
                    <h3>выберите свой стиль интерьера</h3>
                    <p>Наши дизайнеры разработали дизайн-проекты в разных интерьерных стилях, которые мы адаптируем под ваши планировки квартир.</p>
                </div>
            </div>
        </div>

        <div class="design-slider design-slider-1">
            <div class="swiper-wrapper">
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/styles/scand-1-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-1-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-1-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-1-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-1-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-1-6.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    СКАНДИНАВСКИЙ <span>стиль</span>
                                </div>
                                <div class="design-slide__text">
                                    Уют и функционализм - вот основные составляющие этого дизайна, удобная мебель и&nbsp;лаконичные формы. В отделке преобладает серая цветовая гамма с использованием белого, голубого и древесного цветов.
                                </div>
                            </div>
                            <div class="design-slide__plan">
                                <div class="design-slide__info">
                                    <span class="number">1</span>
                                    <span class="text">комнатная</span>
                                </div>
                                <img src="img/slider/styles/scand-1-plan.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/styles/modern-1-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-1-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-1-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-1-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-1-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-1-6.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    <span>стиль</span> МОДЕРНИЗМ
                                </div>
                                <div class="design-slide__text">
                                    Сочетание всевозможных цветов и фактур, характерных для стиля поп-арт, делает интерьер радужно яркими и неординарным. Интерьер этой однокомнатной квартиры представляет собой настоящую цветовую феерию. Его живой и неординарный дизайн заряжает энергией и позитивом.
                                </div>
                            </div>
                            <div class="design-slide__plan">
                                <div class="design-slide__info">
                                    <span class="number">1</span>
                                    <span class="text">комнатная</span>
                                </div>
                                <img src="img/slider/styles/modern-1-plan.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-1-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-1-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-1-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-1-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-1-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-1-6.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    КОНТЕМПОРАРИ <span>стиль</span>
                                </div>
                                <div class="design-slide__text">
                                    Идеально подойдет тем, кто предпочитает простоту, комфорт и современный подход к оформ-лению интерьера. С эффектом «живого» пространства. Дизайн выполнен в сдержанной цветовой гамме с различными оттенкамикоричневого и молочного цвета.
                                </div>
                            </div>
                            <div class="design-slide__plan">
                                <div class="design-slide__info">
                                    <span class="number">1</span>
                                    <span class="text">комнатная</span>
                                </div>
                                <img src="img/slider/styles/contemporary-1-plan.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-6.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-7.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-8.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-9.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/scand-2-10.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    СКАНДИНАВСКИЙ <span>стиль</span>
                                </div>
                                <div class="design-slide__text">
                                    Это просторный, уютный и функциональный интерьер. Для всех помещений мы подобрали удобную мебель лаконичных форм. Использование деревянных текстур привнесло в интерьер природные нотки и сделало его более теплым и уютным.
                                </div>
                            </div>
                            <div class="design-slide__plan">
                                <div class="design-slide__info">
                                    <span class="number">2</span>
                                    <span class="text">комнатная</span>
                                </div>
                                <img src="img/slider/styles/scand-2-plan.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/styles/modern-2-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-2-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-2-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-2-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-2-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/modern-2-6.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    <span>стиль</span> МОДЕРНИЗМ
                                </div>
                                <div class="design-slide__text">
                                    Интерьер, оформленный в этом стиле, отличается ультрасовременным видом. Интересные архитектурные конструкции, цветовая гамма,построенная на контрастах. Удобная и функциональная мебель - все это придает пространству современный вид.
                                </div>
                            </div>
                            <div class="design-slide__plan">
                                <div class="design-slide__info">
                                    <span class="number">2</span>
                                    <span class="text">комнатная</span>
                                </div>
                                <img src="img/slider/styles/modern-2-plan.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-2-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-2-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-2-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-2-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-2-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/styles/contemporary-2-6.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    КОНТЕМПОРАРИ <span>стиль</span>
                                </div>
                                <div class="design-slide__text">
                                    Отлично подходит для городских квартир, так как он весьма удобен и многофункционален. Тона,визуально расширяют пространство, создавая в нем ощущение глубины и простора. Яркие цветовые акценты и обилие разных текстур придают квартире неповторимый уют.
                                </div>
                            </div>
                            <div class="design-slide__plan">
                                <div class="design-slide__info">
                                    <span class="number">2</span>
                                    <span class="text">комнатная</span>
                                </div>
                                <img src="img/slider/styles/contemporary-2-plan.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-navigation">
                <button class="swiper-btn design-btn-prev">
                    <svg width="22" height="27">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </button>
                <button class="swiper-btn design-btn-next">
                    <svg width="22" height="27">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </button>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="design__pdf">
            <div class="container">
                @if($data['pdf_file'])
                    <a href="{{Orchid\Attachment\Models\Attachment::where('id', $data['pdf_file'])->first()->url()}}" download class="design__pdf-link wow fadeInUp">
                        <svg width="174" height="174">
                            <use xlink:href="#pdf"></use>
                        </svg>
                        <span>
                            <span>скачайте презентацию</span> все о дизайне и ремонте
                        </span>
                    </a>
                    <img src="img/base/magazines-2.png" alt="" loading="lazy">
                @endif
            </div>
        </div>

        <div class="design__header">
            <div class="container">
                <h2>реализованные <span>проекты</span></h2>
                <div class="design__text">
                    <h3>проекты в москве и МО.</h3>
                    <p>Мы занимаемся модульным ремонтом с 2018г. Сотрудничаем с застройщиками  жилой недвижимости, агентствами недвижимости так и реализуем проекты для частных заказчиков.</p>
                </div>
            </div>
        </div>

        <div class="design-slider design-slider-2">
            <div class="swiper-wrapper">
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-6.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-7.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-8.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-9.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-10.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-11.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-12.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-13.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-14.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-15.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-16.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-17.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/dadaevo-18.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    <span>ЖК ДАДАЕВСКИЙ</span>
                                </div>
                                <div class="design-slide__text">
                                    Дизайн интерьера выполнен преимущественно в светлых оттенках.<br>
                                    Мы уделили особое внимание эргономике кухни. Спальная комната в серо-розовых оттенках соединена с балконом, оборудованным под рабочую зону.<br>
                                    Элементы декора выдержаны в едином стиле, что привносит в общий интерьер уют и гармонию.
                                </div>
                            </div>
                            <div class="design-slide__video">
                                <iframe src="https://www.youtube.com/embed/GigOOU1f_AA" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="design-slide__info">
                        <div class="design-slide__address">
                            <img src="img/base/map.png" alt="">
                            <span class="text">г.Москва ул. Татарена, дом 9в </span>
                        </div>
                        <div class="design-slide__rooms">
                            <span class="number">2</span>
                            <span class="text">комнатная</span>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-6.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-7.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-8.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-9.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-10.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-11.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-12.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-13.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-14.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-15.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/novocher-16.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    <span>ЖК Новочеремушкинская</span>
                                </div>
                                <div class="design-slide__text">
                                    Дизайн интерьера выполнен преимущественно в светлых оттенках.<br>
                                    Мы уделилиособое внимание эргономике кухни. Спальная комната в серо-розовых оттенках соединена с балконом, оборудованным под рабочую зону.<br>
                                    Элементы декора выдержаны в едином стиле, что привносит в общий интерьер уют и гармонию.
                                </div>
                            </div>
                            <div class="design-slide__video">
                                <iframe src="https://www.youtube.com/embed/wEBpDcFxpTM" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="design-slide__info">
                        <div class="design-slide__address">
                            <img src="img/base/map.png" alt="">
                            <span class="text">г.Москва ЖК Новочеремушкинская,17</span>
                        </div>
                        <div class="design-slide__rooms">
                            <span class="number">2</span>
                            <span class="text">комнатная</span>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-6.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-7.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-8.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-9.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-10.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-11.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-12.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-13.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-14.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-15.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-16.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-17.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-18.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-19.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-20.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-21.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-22.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/acrhitect-23.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    <span>ЖК Резиденции Архитекторов</span>
                                </div>
                                <div class="design-slide__text">
                                    Просторная и светлая квартира с большими окнами, выходящими на набережную, двумя санузлами с необычной отделкой и отдельной гардеробной.
                                </div>
                            </div>
                            <div class="design-slide__video">
                                <iframe src="https://www.youtube.com/embed/_-1AATjErM8" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="design-slide__info">
                        <div class="design-slide__address">
                            <img src="img/base/map.png" alt="">
                            <span class="text">г.Москва. ЖК Резиденции Архитекторов</span>
                        </div>
                        <div class="design-slide__rooms">
                            <span class="number">2</span>
                            <span class="text">комнатная</span>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-6.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-7.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-8.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-9.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-10.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-11.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-12.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-13.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-14.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-15.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-16.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-17.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/leninsky-18.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    <span>Ленинский проспект</span>
                                </div>
                                <div class="design-slide__text">
                                    Дизайн интерьера выполнен преимущественно в светлых оттенках.<br>
                                    Мы уделил особое внимание эргономике кухни.
                                    Спальная комната в серых оттенках соединена с балконом.
                                    Все элементы декора выдержаны в едином стиле.
                                </div>
                            </div>
                            <div class="design-slide__video">
                                <iframe src="https://www.youtube.com/embed/AHyrq541O5Y" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="design-slide__info">
                        <div class="design-slide__address">
                            <img src="img/base/map.png" alt="">
                            <span class="text">г.Москва, Ленинский проспект, д.109</span>
                        </div>
                        <div class="design-slide__rooms">
                            <span class="number">2</span>
                            <span class="text">комнатная</span>
                        </div>
                    </div>
                </div>
                <div class="design-slide swiper-slide">
                    <div class="design-slide__gallery gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-1.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-2.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-3.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-4.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-5.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-6.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-7.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-8.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-9.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-10.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-11.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-12.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-13.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-14.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-15.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="img/slider/projects/ozerovskaya-16.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-btn gallery-btn-prev">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-btn gallery-btn-next">
                                <svg width="22" height="27">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="design-slide__wrapper">
                        <div class="container">
                            <div class="design-slide__content">
                                <div class="design-slide__title h3">
                                    <span>Озерковская набережная</span>
                                </div>
                                <div class="design-slide__text">
                                    Проект этой квартиры мы выполнили в современном стиле, добавив некоторые элементы из лофта.
                                    Наши дизайнеры выдержали обстановку в светлых тонах, но часть мебели мы решили поставить из тонких металлических оснований – так они не перегружают пространство.
                                    А за освещение отвечают потолочные рампы – такие светильники отлично перекликаются с другими элементами вроде имитации кирпичной кладки и хромированных поверхностей.
                                </div>
                            </div>
                            <div class="design-slide__video">
                                <iframe src="https://www.youtube.com/embed/CQKMvoqOLoY" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="design-slide__info">
                        <div class="design-slide__address">
                            <img src="img/base/map.png" alt="">
                            <span class="text">г. Москва, Озерковская набережная </span>
                        </div>
                        <div class="design-slide__rooms">
                            <span class="number">2</span>
                            <span class="text">комнатная</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-navigation">
                <button class="swiper-btn design-btn-prev">
                    <svg width="22" height="27">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </button>
                <button class="swiper-btn design-btn-next">
                    <svg width="22" height="27">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </button>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="request section">
        <div class="container section-container">
            <h2 class="big-title">Оставьте заявку</h2>
            <img src="img/base/logo-white.png" alt="" class="section-logo">
            <form action="#" class="form request-form">
                <div class="form-wrapper">
                    <div class="form-field">
                        <input type="text" name="name" placeholder="Имя*" required>
                    </div>
                    <div class="form-field">
                        <input
                                type="text"
                                name="phone"
                                placeholder="Номер телефона*"
                                minlength="16"
                                maxlength="16"
                                required>
                    </div>
                    <div class="form-field">
                        <select name="city">
                            <option disabled selected>Город</option>
                            <option value="Багратионовск">Багратионовск</option>
                            <option value="Балтийск">Балтийск</option>
                            <option value="Гвардейск">Гвардейск</option>
                            <option value="Гурьевск">Гурьевск</option>
                            <option value="Гусев">Гусев</option>
                            <option value="Зеленоградск">Зеленоградск</option>
                            <option value="Калининград">Калининград</option>
                            <option value="Краснознаменск">Краснознаменск</option>
                            <option value="Ладушкин">Ладушкин</option>
                            <option value="Мамоново">Мамоново</option>
                            <option value="Неман">Неман</option>
                            <option value="Нестеров">Нестеров</option>
                            <option value="Озёрск">Озёрск</option>
                            <option value="Пионерский">Пионерский</option>
                            <option value="Полесск">Полесск</option>
                            <option value="Правдинск">Правдинск</option>
                            <option value="Приморск">Приморск</option>
                            <option value="Светлогорск">Светлогорск</option>
                            <option value="Светлый">Светлый</option>
                            <option value="Советск">Советск</option>
                            <option value="Черняховск">Черняховск</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <select name="rooms">
                            <option disabled selected>Комнат в квартире</option>
                            <option value="Студия">Студия</option>
                            <option value="1-комнатная">1-комнатная</option>
                            <option value="2-комнатная">2-комнатная</option>
                            <option value="3-комнатная">3-комнатная</option>
                            <option value="4-комнатная">4-комнатная</option>
                            <option value="5-комнатная">5-комнатная</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <select name="design">
                            <option disabled selected>Стиль дизайна</option>
                            <option value="Скандинавский">Скандинавский</option>
                            <option value="Контемпорари">Контемпорари</option>
                            <option value="Модернизм">Модернизм</option>
                            <option value="Не знаю">Не знаю</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <select name="management">
                            <option disabled selected>Доверительное управление</option>
                            <option value="Да">Да</option>
                            <option value="Нет">Нет</option>
                            <option value="Не знаю">Не знаю</option>
                        </select>
                    </div>
                    <div class="form-field form-field--w100">
                        <div class="textarea-autosize">
                            <textarea name="message" placeholder="Ваше сообщение"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </div>
    </section>
    <section class="management section" id="management">
        <div class="management__banner">
            <div class="container">
                <img src="img/base/logo-white.png" alt="">
                Дополнительные<br> услуги компании
            </div>
        </div>
        <div class="management__content">
            <div class="container">
                <div class="wow fadeInUp" data-wow-delay="500">
                    <h1 class="management__title">
                        Доверительное управление <span>и аренда</span>
                    </h1>
                    <div class="management__text">
                        Вашей жилой недвижимости
                    </div>
                </div>
                <form action="#" class="management__form wow fadeInUp" data-wow-delay="800">
                    <input
                            type="text"
                            name="phone"
                            placeholder="Ваш номер телефона"
                            minlength="16"
                            maxlength="16"
                            required>
                    <button type="submit" class="btn">КОНСУЛЬТАЦИЯ</button>
                </form>
            </div>
        </div>
        <div class="management__img wow">
            <img src="img/base/family-1.jpg" alt="">
        </div>
    </section>
    <section class="features section">
        <div class="container">
            <div class="features-list">
                @foreach($data['advantages_3'] as $advantage)
                    <div class="feature">
                        <div class="feature__icon">
                            <img src="{{$advantage['icon']}}" alt="icon">
                        </div>
                        <h3 class="feature__title">{{$advantage['headline']}}</h3>
                        <div class="feature__text">{{$advantage['text']}}</div>
                    </div>
                @endforeach
            </div>
            <div class="features__img">
                <img src="img/base/family-2.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="contacts section" id="contacts">
        <div class="container section-container">
            <h2 class="big-title">Контакты</h2>
            <img src="img/base/logo-white.png" alt="" class="section-logo">
            <div class="contacts-list">
                <div class="contacts-item">
                    <a href="tel:+74958222202" class="contacts-item__link">
                        <svg width="23" height="23">
                            <use xlink:href="#phone"></use>
                        </svg>
                        +7 (495) 8 2222 02
                    </a>
                    <a href="tel:+74958222202" class="contacts-item__btn btn">
                        Звонок
                    </a>
                </div>
                <div class="contacts-item">
                    <a href="https://wa.me/+79210770330?text=Здравствуйте.%20Подскажите%20пожалуйста:" target="_blank" class="contacts-item__link">
                        <svg width="25" height="24">
                            <use xlink:href="#whatsapp"></use>
                        </svg>
                        +7 (921) 077 03 30
                    </a>
                    <a href="https://wa.me/+79210770330?text=Здравствуйте.%20Подскажите%20пожалуйста:" target="_blank" class="contacts-item__btn btn">
                        WhatsApp
                    </a>
                </div>
                <div class="contacts-item">
                    <a href="https://www.instagram.com/commerc_real/" target="_blank" class="contacts-item__link">
                        <svg width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg>
                        <span>*</span>
                        commerc_real
                    </a>
                    <a href="https://www.instagram.com/commerc_real/" target="_blank" class="contacts-item__btn btn">
                        Instagram
                        <span>*</span>
                    </a>
                </div>
                <div class="contacts-item">
                    <a href="mailto:commercreal@gmail.com" class="contacts-item__link">
                        <svg width="31" height="23">
                            <use xlink:href="#email"></use>
                        </svg>
                        commercreal@gmail.com
                    </a>
                    <a href="mailto:commercreal@gmail.com" class="contacts-item__btn btn">
                        Почта
                    </a>
                </div>
                <div class="contacts-item">
                    <a href="https://t.me/commercreal" target="_blank" class="contacts-item__link">
                        <svg width="27" height="25">
                            <use xlink:href="#telegram"></use>
                        </svg>
                        commercreal
                    </a>
                    <a href="https://t.me/commercreal" target="_blank" class="contacts-item__btn btn">
                        Telegram
                    </a>
                </div>
                <div class="contacts-item">
                    <a href="https://commercreal.com/" target="_blank" class="contacts-item__link">
                        <svg width="25" height="26">
                            <use xlink:href="#globus"></use>
                        </svg>
                        commercreal.com
                    </a>
                    <a href="https://commercreal.com/" target="_blank" class="contacts-item__btn btn">
                        Commerc Real
                    </a>
                </div>
            </div>
            <div class="contacts-text">
                Сommerc real HOME является подразделением компании Сommerc&nbsp;real, специализирующейся на управлении коммерческой недвижимостью.
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="footer__content container">
        <div class="footer__copy">© Commerc real Home</div>
        <div class="footer__socials socials">
            <a href="https://t.me/commercreal" target="_blank" class="social">
                <svg width="27" height="25">
                    <use xlink:href="#telegram"></use>
                </svg>
            </a>
            <a href="https://wa.me/+79210770330?text=Здравствуйте.%20Подскажите%20пожалуйста:" target="_blank" class="social">
                <svg width="25" height="24">
                    <use xlink:href="#whatsapp"></use>
                </svg>
            </a>
            <a href="https://www.instagram.com/commerc_real/" target="_blank" class="social">
                <svg width="24" height="24">
                    <use xlink:href="#instagram"></use>
                </svg>
                <span>*</span>
            </a>
            <a href="tel:+74958222202" class="social">
                <svg width="23" height="23">
                    <use xlink:href="#phone"></use>
                </svg>
            </a>
            <a href="mailto:commercreal@gmail.com" class="social">
                <svg width="31" height="23">
                    <use xlink:href="#email"></use>
                </svg>
            </a>
        </div>
        <div class="footer__danger">
            * - организация, запрещённая на территории РФ
        </div>
    </div>
</footer><!-- / .footer -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(88122684, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/88122684" style="position:absolute; left:-9999px;" alt=""/>
    </div>
</noscript>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
