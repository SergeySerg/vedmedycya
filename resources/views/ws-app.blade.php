<!DOCTYPE HTML>
<html lang="{{ App::getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
	@if($categories_data[$type]->getTranslate('meta_title'))
		{{ $categories_data[$type]->getTranslate('meta_title') }}
	@else
		Велика Ведмедиця
	@endif
</title>
<meta name="description" content="@if($categories_data[$type]->getTranslate('meta_description')){{ $categories_data[$type]->getTranslate('meta_description') }} @else МЕРЕЖА ГОТЕЛІВ 'ВЕЛИКА ВЕДМЕДИЦЯ' В ЯРЕМЧЕ ТА БУКОВЕЛІ@endif">
<meta name="keywords" content="@if($categories_data[$type]->getTranslate('meta_keywords')){{ $categories_data[$type]->getTranslate('meta_keywords') }} @else Велика Ведмедиця @endif"> -->
	
	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">


<link rel="stylesheet" href="{{ asset('/css/frontend/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend/slick-theme.css') }}">
    <link href="{{ asset('/css/frontend/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/frontend/style.css') }}">   
</head>
<body>
	<!-- .header -->
	@include('frontend.header')
    <!-- END .header -->
    <div id="main-slider">
        <div class="slider-class">
            <div class="fullscreen-img d-flex align-items-center justify-content-center" style="background-image: url(img/headers/idealrelax.jpg);">
                <h1>ВАШ ІДЕАЛЬНИЙ ВІДПОЧИНОК<br class="text-divider"> ЧЕКАЄ ВАС ТУТ</h1>
            </div>
            <div class="fullscreen-img d-flex align-items-center justify-content-center" style="background-image: url(img/headers/familyresort.jpg);">
                <h1>СІМЕЙНИЙ ВІДПОЧИНОК<br class="text-divider"> У КАРПАТАХ</h1>
            </div>
            <div class="fullscreen-img d-flex align-items-center justify-content-center" style="background-image: url(img/headers/ecohotel.jpg);">
                <h1>СПРАВЖНІЙ ЕКО-ГОТЕЛЬ<br class="text-divider"> У ЯРЕМЧЕ</h1>
            </div>
            <div class="fullscreen-img d-flex align-items-center justify-content-center" style="background-image: url(img/headers/pool.jpg);">
                <h1>БАСЕЙН<br class="text-divider"> З ПІДІГРІВОМ</h1>
            </div>
            <div class="fullscreen-img d-flex align-items-center justify-content-center" style="background-image: url(img/headers/owncotedge.jpg);">
                <h1>ВЛАСНИЙ КОТЕДЖ<br class="text-divider"> НА ЧАС ВІДПУСТКИ</h1>
            </div>
        </div>
        <nav class="main-dots"></nav>
        <div id="p-arrow">
            <div class="arrow-left main-arrow-left">
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="n-arrow" style="">
            <div class="arrow-right main-arrow-right">
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="selector-bar-id" class="selector-bar">
            <div class="container-fluid px-1 main-form bottom-1-vh">
                <form>
                    <div class="row justify-content-center no-gutters py-md-3 py-1">
                        <div class="col-lg-2 col-md-3 col-6 my-1">
                            <div class="input-pattern">
                                <input disabled id="location" type="text" name="location" placeholder="Готель/місто" readonly="readonly" class="cursor-pointer"/>
                                <i class="fas fa-map-marker-alt input-icon"></i>
                                <div class="input-dropdown px-2">
                                    <p class="input-location d-flex align-items-center"><span>Велика Ведмедиця<br/><sub> (Яремче)</sub></span></p>
                                    <p class="input-location d-flex align-items-center"><span>Ведмежий Двір<br/><sub> (Яремче)</sub></span></p>
                                    <p class="input-location d-flex align-items-center"><span>White House<br/><sub> (Яремче)</sub></span></p>
                                    <p class="input-location d-flex align-items-center"><span>Dream House<br/><sub> (Яремче)</sub></span></p>
                                    <p class="input-location d-flex align-items-center"><span>У Марка<br/><sub> (Яремче)</sub></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6 my-1">
                            <div id="div-datepicker" class="input-pattern">
                                <i class="fas fa-calendar-alt input-icon"></i>
                                <input type='text' data-language="en" data-multiple-dates-separator=" - " class="datepicker-here cursor-pointer" id="datepicker" placeholder="Дата" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 my-1">
                            <div class="input-pattern">
                                <p id="guests" class="input-text">Кількість гостей</p>
                                <i class="fas fa-male input-icon"></i>
                                <div class="input-dropdown">
                                    <div class="input-members d-flex justify-content-between">
                                        <p>Дорослі</p>
                                        <span>
                                            <span id="adults_minus">
                                                <i class="fas fa-minus fa-lg add-member-btn" style=""></i>
                                            </span>
                                            <input id="adults" type="number" name="adults" min="0" value="0" readonly="readonly" />
                                            <span id="adults_plus">
                                                <i class="fas fa-plus fa-lg add-member-btn"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="input-members d-flex justify-content-between">
                                        <p>Діти<br/><sup>5-12 років</sup></p>
                                        <span>
                                            <span id="children_minus">
                                                <i class="fas fa-minus fa-lg add-member-btn"></i>
                                            </span>
                                            <input id="children" type="number" name="children" min="0" value="0" readonly="readonly" />
                                            <span id="children_plus">
                                                <i class="fas fa-plus fa-lg add-member-btn"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <p class="children-up-to-5"><sub>діти до 5 років - безкоштовно</sub></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 my-1">
                            <div class="input-pattern">
                                <button type="submit" class="submit-button">ПЕРЕВІРИТИ ЦІНИ</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    <div id="mobile-phones" class="text-center">
        <i class="fas fa-phone fa-2x my-2 color-ff8c00"></i>
        <h5 class="mt-2"><a href="tel:+380975144702" class="phone-clickable">+38 (097) 514 4702</a><br></h5>
        <h5 class="mb-3"><a href="tel:+380975144702" class="phone-clickable">+38 (097) 514 4702</a><br></h5>
        <h6 class="mb-3">або пишіть у месенджери</h6>
        <a href="#"><i class="fab fa-viber fa-2x color-viber"></i></a>
        <a href="#"><i class="fab fa-whatsapp fa-2x mx-4 color-whatsapp"></i></a>
        <a href="#"><i class="fab fa-telegram-plane fa-2x color-telegram"></i></a>
        <div class="h-line-bold"></div>
    </div>
    
    <div class="container-fluid px-sm-5">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge">МЕРЕЖА ГОТЕЛІВ "ВЕЛИКА ВЕДМЕДИЦЯ"</h2>
                <h4 class="section-header-small">в яремче та буковелі</h4>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
        </div>
        <div class="row justify-content-center no-gutters px-md-5 px-0">
            <div class="col-xl-4 col-lg-6 p-2">
                <a href="#" class="a-card">
                    <div class="card hotel-card m-lg-1 mt-lg-3">
                    <div class="card-header" style="background: url(img/hotels/u_marka.JPG);"></div>
                    <div class="card-body hotel-card-body">
                        <div class="d-flex align-items-end">
                            <h4 class="card-title hotel-title">Котедж У МАРКА</h4>
                        </div>
                    </div>
                    <div class="card-footer hotel-card-footer">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i>
                                Яремче</p>
                            </div>
                            <p class="days-ends-end-text">Залишилось 3 номери</p>
                        </div>
                    </div>
                    <div class="hotel-card-price">
                        <p class="old-price">100</p>
                        <div class="price-p-div d-flex justify-content-center align-items-center">
                            <p class="price-p margin-right-6-px" style="">від</p>
                            <p class="price-p discount-price"><strong>200</strong></p>
                            <p class="price-p margin-right-6-px">грн</p>
                        </div>
                        <div class="hotel-card-price-hover">
                            <p>ЗАБРОНЮВАТИ</p>
                        </div>
                    </div>
                    <div class="hotel-card-discount">
                        <p>ЗНИЖКА 20%</p>
                    </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2">
                <a href="#" class="a-card">
                    <div class="card hotel-card m-lg-1 mt-lg-3">
                        <div class="card-header" style="background: url(img/hotels/bigbear.JPG);"></div>
                        <div class="card-body hotel-card-body">
                            <div class="d-flex align-items-end">
                                <h4 class="card-title hotel-title">Готель ВЕЛИКА ВЕДМЕДИЦЯ</h4>
                            </div>
                        </div>
                        <div class="card-footer hotel-card-footer">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i>
                                    Яремче</p>
                                </div>
                                <p class="days-ends-end-text">Залишилось 3 номери</p>
                            </div>
                        </div>
                        <div class="hotel-card-price">
                            <div class="price-p-div d-flex justify-content-center align-items-center">
                                <p class="price-p margin-right-6-px">від</p><p class="price-p"><strong>200</strong></p><p class="price-p margin-left-6-px">грн</p>
                            </div>
                            <div class="hotel-card-price-hover">
                                <p>ЗАБРОНЮВАТИ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2">
                <a href="#" class="a-card">
                    <div class="card hotel-card m-lg-1 mt-lg-3">
                        <div class="card-header" style="background: url(img/hotels/dreamhouse.jpg);"></div>
                        <div class="card-body hotel-card-body">
                            <div class="d-flex align-items-end">
                                <h4 class="card-title hotel-title">Елітний котедж DREAM HOUSE</h4>
                            </div>
                        </div>
                        <div class="card-footer hotel-card-footer">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i>
                                    Яремче</p>
                                </div>
                                <p class="days-ends-end-text">Залишилось 3 номери</p>
                            </div>
                        </div>
                        <div class="hotel-card-price">
                            <div class="price-p-div d-flex justify-content-center align-items-center">
                                <p class="price-p margin-right-6-px">від</p><p class="price-p"><strong>200</strong></p><p class="price-p margin-left-6-px">грн</p>
                            </div>
                            <div class="hotel-card-price-hover">
                                <p>ЗАБРОНЮВАТИ</p>
                            </div>
                        </div>
                    </div>
                </a>                    
            </div>
            <div class="align-self-center fake col-xl-2 fake-left"></div>
            <div class="col-xl-4 col-lg-6 p-2">
                <a href="#" class="a-card">
                    <div class="card hotel-card m-lg-1 mt-lg-3">
                        <div class="card-header" style="background: url(img/hotels/beardvir.jpg);"></div>
                        <div class="card-body hotel-card-body">
                            <div class="d-flex align-items-end">
                                <h4 class="card-title hotel-title">Готель ВЕДМЕЖИЙ ДВІР</h4>
                            </div>
                        </div>
                        <div class="card-footer hotel-card-footer">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i>
                                    Буковель</p>
                                </div>
                                <p class="days-ends-end-text">Залишилось 3 номери</p>
                            </div>
                        </div>
                        <div class="hotel-card-price">
                            <div class="price-p-div d-flex justify-content-center align-items-center">
                                <p class="price-p margin-right-6-px">від</p><p class="price-p"><strong>200</strong></p><p class="price-p margin-left-6-px">грн</p>
                            </div>
                            <div class="hotel-card-price-hover">
                                <p>ЗАБРОНЮВАТИ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2">
                <a href="#" class="a-card">
                    <div class="card hotel-card m-lg-1 mt-lg-3">
                        <div class="card-header" style="background: url(img/hotels/whitehouse.jpg);"></div>
                        <div class="card-body hotel-card-body">
                            <div class="d-flex align-items-end">
                                <h4 class="card-title hotel-title">Елітний котедж WHITE HOUSE</h4>
                            </div>
                        </div>
                        <div class="card-footer hotel-card-footer">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i>
                                    Буковель</p>
                                </div>
                                <p class="days-ends-end-text">Залишилось 3 номери</p>
                            </div>
                        </div>
                        <div class="hotel-card-price">
                            <div class="price-p-div d-flex justify-content-center align-items-center">
                                <p class="price-p margin-right-6-px">від</p><p class="price-p"><strong>200</strong></p><p class="price-p margin-left-6-px">грн</p>
                            </div>
                            <div class="hotel-card-price-hover">
                                <p>ЗАБРОНЮВАТИ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="align-self-center fake col-xl-2 fake-right"></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row justify-content-center px-md-5 px-0 text-center">
            <div class="col">
                <h2 class="section-header-huge section-number-include">понад <span id="giant-number">9721</span> гостей</h2>
                <p class="section-description">відвідали наш готельний комплекс за 6 років</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-sm-5 py-3 back-f4f4f4">
        <div class="row no-gutters text-center">
            <div class="col-md-3 col-6 py-2 my-2">
                <i class="bb-pool features-icon"></i>
                <h5 class="feature-text">басейн<br>з підігрівом</h5>
            </div>
            <div class="col-md-3 col-6 py-2 my-2">
                <i class="bb-feedback features-icon"></i>
                <h5 class="feature-text">більш ніж<br>999 відгуків</h5>
            </div>
            <div id="booking-id" class="col-md-3 col-6 py-2 my-2">
                <p class="booking-icon">9.1<br><sup><small><sup><small>out of 10</small></sup></small></sup></p>
                <h5 class="feature-text">рейтинг на<br>booking.com</h5>
            </div>
            <div class="col-md-3 col-6 py-2 my-2">
                <i class="bb-toy-thin features-icon"></i>
                <h5 class="feature-text">розваги<br>для дітей</h5>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col padding-0">
                <h2 class="section-header-huge">більше ніж просто відпочинок</h2>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                <div class="rest-slider">
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/familyrelax.jpg);"></div>
                        <div class="rest-details">
                            <h4>ПОЇЗДКИ НА КВАДРОЦИКЛАХ</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/gutsuls.jpg);"></div>
                        <div class="rest-details">
                            <h4>КВАДРОЦИКЛАХ ПОЇЗДКИ НА</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/horsewalk.jpg);"></div>
                        <div class="rest-details">
                            <h4>ПОЇЗДКИ КВАДРОЦИКЛАХ НА</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/karpathians.jpg);"></div>
                        <div class="rest-details">
                            <h4>НА ПОЇЗДКИ КВАДРОЦИКЛАХ</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/quadbikes.jpg);"></div>
                        <div class="rest-details">
                            <h4>НА ПОЇЗДКИ КВАДРОЦИКЛАХ</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/rafting.jpg);"></div>
                        <div class="rest-details">
                            <h4>НА ПОЇЗДКИ КВАДРОЦИКЛАХ</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
                <nav class="rest-dots"></nav>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-5 back-f4f4f4">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge">Відгуки наших відвідувачів</h2>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                <div class="container-fluid position-relative">
                    <div class="feedback-slider">
                        <div class="d-flex justify-content-center">
                            <div id="test" class="card feedback-card">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn... 
                                    <a href="#" class="color-ff8c00">Читати повністю</a></p>
                                </div>
                                <div class="card-footer">
                                    <i class="fab fa-facebook-square"></i>
                                    <p class="name">Mark</p>
                                    <p class="date">20.02.2018</p>
                                </div>
                                <div id="profile-huge" class="profile-image" style="background: url(img/dpx_0259.jpg);"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="card feedback-card">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="card-footer">
                                    <i class="fab fa-facebook-square"></i>
                                    <p class="name">Mark</p>
                                    <p class="date">20.02.2018</p>
                                </div>
                                <div class="profile-image" style="background: url(img/dpx_0259.jpg);"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="card feedback-card">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="card-footer">
                                    <i class="fab fa-facebook-square"></i>
                                    <p class="name">Mark</p>
                                    <p class="date">20.02.2018</p>
                                </div>
                                <div class="profile-image" style="background: url(img/dpx_0259.jpg);"></div>
                            </div>
                        </div>
                    </div>
                    <div id="feedback-arrow-left">
                        <div class="div-arrows div-a-f">
                            <div class="arrow-left f-arrow-left">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div id="feedback-arrow-right">
                        <div class="div-arrows div-a-f">
                            <div class="arrow-right f-arrow-right">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-button">
                    <a href="#">Всі відгуки</a>
                    <a href="#">Залишити відгук</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-1 back-747474">
        <form>
            <div class="row justify-content-center no-gutters py-md-4 py-1">
                <div class="col-lg-2 col-md-3 my-1">
                    <div class="input-pattern">
                        <input type="text" placeholder="Ім'я"/>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 my-1">
                    <div class="input-pattern">
                        <input type="text" placeholder="Номер телефону"/>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 my-1">
                    <div class="input-pattern">
                        <a class="btn btn-yellow get-in-touch-btn" data-toggle="modal" data-target="#exampleModal">ЗВ'ЯЗАТИСЬ З НАМИ</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer class="black-footer py-md-4 py-0">
        <div class="container-fluid">
            <div class="row justify-content-center pb-5">
                <div class="col-md-5 pt-md-5 pt-3">
                    <h6 class="footer-header mb-3">Контакти</h6>
                    <div class="row no-gutters">
                        <div class="col-md-3 col-4">
                            <p class="footer-text">
                                Тел.<br><br>
                                Написати<br>
                                e-mail<br>
                                Адреса
                            </p>
                        </div>
                        <div class="col-md-9 col-8">
                            <p class="text-white phones-included">
                                <a href="tel:+380975144702" class="text-white">+38 (097) 514 4702</a><br>
                                <a href="tel:+380975144702" class="text-white">+38 (097) 514 4702</a><br>
                                <a href="#"><i class="fab fa-viber text-white mr-1"></i></a>
                                 <a href="#"><i class="fab fa-whatsapp text-white mr-1"></i></a>
                                 <a href="#"><i class="fab fa-telegram-plane text-white"></i></a><br>
                                hotel.vedmedycya@gmail.com<br>
                                Україна, м. Яремче, вул. Вітовського 5А
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2 col-6 pt-5">
                    <h6 class="footer-header mb-3">про нас</h6>
                    <a href="#" class="text-white">Послуги</a><br>
                    <a href="#" class="text-white">Номери та ціни</a><br>
                    <a href="#" class="text-white">Акції</a><br>
                    <a href="#" class="text-white">Враження</a><br>
                    <a href="#" class="text-white">Посилання</a><br>
                    <a href="#" class="text-white">І так далі</a>
                </div>
                <div class="col-md-2 col-6 pt-5">
                    <h6 class="footer-header mb-3">готелі</h6>
                    <a href="#" class="text-white">Велика Ведмедиця</a><br>
                    <a href="#" class="text-white">Ведмежий двір</a><br>
                    <a href="#" class="text-white">White House</a><br>
                    <a href="#" class="text-white">Dream House</a><br>
                    <a href="#" class="text-white">У Марка</a><br>
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="col-md-3 order-md-2 text-md-right text-center">
                    <div class="footer-icon-container"><a href="#" class="text-white"><i class="fab fa-facebook-f fa-2x"></i></a></div>
                    <div class="footer-icon-container"><a href="#" class="text-white"><i class="fab fa-instagram fa-2x"></i></a></div>
                    <div class="footer-icon-container"><a href="#" class="text-white"><i class="fab fa-youtube fa-2x"></i></a></div>
                </div>
                <div class="col-md-7 order-md-1 mt-md-3 mt-5">
                    <p class="footer-text">
                        All right reserved © BigBear <?php echo date("Y");?><br>
                        <!-- Designed by <a href="http://www.crayfish.studio" class="text-white" target="_blank">Crayfish Studio</a> with <i class="fa fa-heart"></i> and <i class="fa fa-coffee"></i> -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

<!-- END .footer -->
{{--Файл переводов--}}
<script>
	var trans = {
		'base.success': '{{ trans('base.success_send_contact') }}',
		'base.error': '{{ trans('base.error_send_contact') }}',
	};
</script>
{{--/Файл переводов--}}
{{-- JS --}}
<script src="{{ asset('/js/frontend/main.js') }}"></script>
<script defer src="{{ asset('/js/frontend/fontawesome-all.js') }}"></script>
<script src="{{ asset('/js/frontend/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/js/frontend/popper.min.js') }}"></script>
<script src="{{ asset('/js/frontend/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/frontend/datepicker.min.js') }}"></script>
<script src="{{ asset('/js/frontend/datepicker.en.js') }}"></script>
<script src="{{ asset('/js/frontend/slick.min.js') }}"></script>
    
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>


{{-- /JS --}}

</body>
</html>


