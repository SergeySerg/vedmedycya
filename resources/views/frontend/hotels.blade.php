@extends('ws-app')

@section('content')
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
        <div id="n-arrow">
            <div class="arrow-right main-arrow-right">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- форма пошуку номеру -->
        <div id="selector-bar-id" class="selector-bar">
            <div class="container-fluid px-1 main-form bottom-1-vh">
                <form>
                    <div class="row justify-content-center no-gutters py-md-3 py-1">
                        <div class="col-lg-2 col-md-3 my-1">
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
                                                <i class="fas fa-minus fa-lg add-member-btn"></i>
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
        <!-- форма пошуку номеру -->
    </div>
   
    <div id="mobile-phones" class="text-center">
        <i class="fas fa-phone fa-2x my-2 color-ff8c00"></i>
        <h5 class="mt-2"><a href="tel:+380975144702" class="phone-clickable">+38 (097) 514 4702</a><br></h5>
        <h5 class="mb-3"><a href="tel:+380975144702" class="phone-clickable">+38 (097) 514 4702</a><br></h5>
        <h6 class="mb-3">або пишіть у месенджери:</h6>
        <a href="#"><i class="fab fa-viber fa-2x color-ff8c00"></i></a>
        <a href="#"><i class="fab fa-whatsapp fa-2x mx-4 color-whatsapp"></i></a>
        <a href="#"><i class="fab fa-telegram-plane fa-2x color-telegram"></i></a>
        <div class="h-line-bold"></div>
    </div>
    
    <div class="container-fluid px-sm-5 pb-5">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge">@foreach($children_rooms as $key => $test) !! {{ $test['id'] }} !!@endforeachМЕРЕЖА ГОТЕЛІВ "ВЕЛИКА ВЕДМЕДИЦЯ"</h2>
                <h4 class="section-header-small">в яремче та буковелі</h4>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
        </div>
        
        <div class="row justify-content-center no-gutters px-md-5 px-0">
            <!-- Типова мала карточка номеру -->
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/beardvir.jpg)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col-8">
                                <h5 class="small-card-header">напівлюкс із каміном</h5>
                            </div>
                            <div class="col-4 text-right">
                                <small class="alt-dates">з 05.10 по 08.10</small>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-8">
                                <small class="small-card-hotel">Eлітний котедж ВЕЛИКА ВЕДМЕДИЦЯ</small>
                            </div>
                            <div class="col-4 text-right">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center">100<br/><sup><sup>UAH за ніч</sup></sup></p>
                        </div>
                        <div class="apart-small-card-buy-hover"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                        <div class="apart-small-discount">
                            <p class="text-center py-1 text-uppercase">знижка 50%</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Типова мала карточка номеру -->
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/beardvir.jpg)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col-8">
                                <h5 class="small-card-header">напівлюкс із каміном</h5>
                            </div>
                            <div class="col-4 text-right">
                                <small class="alt-dates">з 05.10 по 08.10</small>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-8">
                                <small class="small-card-hotel">Eлітний котедж ВЕЛИКА ВЕДМЕДИЦЯ</small>
                            </div>
                            <div class="col-4 text-right">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center">100<br/><sup><sup>UAH за ніч</sup></sup></p>
                        </div>
                        <div class="apart-small-card-buy-hover"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/beardvir.jpg)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col-8">
                                <h5 class="small-card-header">напівлюкс із каміном</h5>
                            </div>
                            <div class="col-4 text-right">
                                <small class="alt-dates">з 05.10 по 08.10</small>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-8">
                                <small class="small-card-hotel">Eлітний котедж ВЕЛИКА ВЕДМЕДИЦЯ</small>
                            </div>
                            <div class="col-4 text-right">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center">100<br/><sup><sup>UAH за ніч</sup></sup></p>
                        </div>
                        <div class="apart-small-card-buy-hover"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                        <div class="apart-small-discount">
                            <p class="text-center py-1 text-uppercase">знижка 50%</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="align-self-center fake col-xl-2 fake-left"></div>
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/beardvir.jpg)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col-8">
                                <h5 class="small-card-header">напівлюкс із каміном</h5>
                            </div>
                            <div class="col-4 text-right">
                                <small class="alt-dates">з 05.10 по 08.10</small>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-8">
                                <small class="small-card-hotel">Eлітний котедж ВЕЛИКА ВЕДМЕДИЦЯ</small>
                            </div>
                            <div class="col-4 text-right">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center">100<br/><sup><sup>UAH за ніч</sup></sup></p>
                        </div>
                        <div class="apart-small-card-buy-hover"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                        <div class="apart-small-discount">
                            <p class="text-center py-1 text-uppercase">знижка 50%</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/beardvir.jpg)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col-8">
                                <h5 class="small-card-header">напівлюкс із каміном</h5>
                            </div>
                            <div class="col-4 text-right">
                                <small class="alt-dates">з 05.10 по 08.10</small>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-8">
                                <small class="small-card-hotel">Eлітний котедж ВЕЛИКА ВЕДМЕДИЦЯ</small>
                            </div>
                            <div class="col-4 text-right">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center">100<br/><sup><sup>UAH за ніч</sup></sup></p>
                        </div>
                        <div class="apart-small-card-buy-hover"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                        <div class="apart-small-discount">
                            <p class="text-center py-1 text-uppercase">знижка 50%</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="align-self-center fake col-xl-2 fake-right"></div>
        </div>
    </div>

    <!-- Розділ фіч -->
    <div class="container-fluid pb-5 back-f4f4f4">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge pb-5">ЧОМУ ОБИРАЮТЬ САМЕ НАС?</h2>
            </div>
        </div>
        
        <div class="row no-gutters text-center justify-content-center">
            <div class="col-md-3 col-6 py-2 my-2 mb-5">
                <i class="bb-few-minutes features-icon"></i>
                <h5 class="feature-text">8 хвилин<br>до центру</h5>
            </div>
            <div id="booking-id" class="col-md-3 col-6 py-2 my-2 mb-5">
                <!-- Оцінка з букінгу -->
                <p class="booking-icon">9.1<br><sup><small><sup><small>out of 10</small></sup></small></sup></p>
                <h5 class="feature-text">рейтинг на<br>booking.com</h5>
            </div>
            <div class="col-md-3 col-6 py-2 my-2 mb-5">
                <i class="bb-toy-thin features-icon"></i>
                <h5 class="feature-text">розваги<br>для дітей</h5>
            </div>
            <div class="w-100 text-divider"></div>
            <div class="col-md-3 col-6 py-2 my-2 mb-5">
                <i class="bb-pool features-icon"></i>
                <h5 class="feature-text">басейн<br>з підігрівом</h5>
            </div>
            <div class="col-md-3 col-6 py-2 my-2 mb-5">
                <i class="bb-chair features-icon"></i>
                <h5 class="feature-text">заишок<br>та комфорт</h5>
            </div>
            <div class="col-md-3 col-6 py-2 my-2 mb-5">
                <i class="bb-children features-icon"></i>
                <h5 class="feature-text">діти до 5<br>безкоштовно</h5>
            </div>
        </div>
    </div>
    
    <!-- Блок вражень -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col padding-0">
                <h2 class="section-header-huge">більше ніж просто відпочинок</h2>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                <div class="rest-slider">
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/familyrelax.jpg);">
                            <div class="left-click"></div>
                            <div class="right-click"></div>
                        </div>
                        <div class="rest-details">
                            <h4>ПОЇЗДКИ НА КВАДРОЦИКЛАХ</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/gutsuls.jpg);">
                            <div class="left-click"></div>
                            <div class="right-click"></div>
                        </div>
                        <div class="rest-details">
                            <h4>КВАДРОЦИКЛАХ ПОЇЗДКИ НА</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/horsewalk.jpg);">
                            <div class="left-click"></div>
                            <div class="right-click"></div>
                        </div>
                        <div class="rest-details">
                            <h4>ПОЇЗДКИ КВАДРОЦИКЛАХ НА</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/karpathians.jpg);">
                            <div class="left-click"></div>
                            <div class="right-click"></div>
                        </div>
                        <div class="rest-details">
                            <h4>НА ПОЇЗДКИ КВАДРОЦИКЛАХ</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/quadbikes.jpg);">
                            <div class="left-click"></div>
                            <div class="right-click"></div>
                        </div>
                        <div class="rest-details">
                            <h4>НА ПОЇЗДКИ КВАДРОЦИКЛАХ</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="rest-image" style="background: url(img/impressions/rafting.jpg);">
                            <div class="left-click"></div>
                            <div class="right-click"></div>
                        </div>
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
   
    <!-- Блок послуг -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge">ПОСЛУГИ МЕРЕЖІ "ВЕЛИКА ВЕДМЕДИЦЯ"</h2>
                <p class="section-description">Включено у вартість</p>
            </div>
        </div>
        <div class="row text-center align-items-center justify-content-center no-gutters px-md-5 px-0 pb-5">
            <div class="col-lg-3 col-md-6 p-5 back-f4f4f4">
                <div class="vert-aligner-container">
                   <div class="vert-aligner">
                        <h5>Проживання в готельних номерах</h5>
                   </div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-5">
                <div class="vert-aligner-container">
                   <div class="vert-aligner">
                        <h5 class="mb-4">Безкоштовні сніданки</h5>
                        <i class="bb-breakfast fa-5x"></i>
                   </div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-5 back-f4f4f4">
                <div class="vert-aligner-container">
                   <div class="vert-aligner">
                        <h5>Користування альтанкою та зеленою зоною відпочинку</h5>
                   </div> 
                </div>     
            </div>
            <div class="col-lg-3 col-md-6 p-5">
                <div class="vert-aligner-container">
                   <div class="vert-aligner">
                        <h5 class="mb-4">Зручна автостоянка</h5>
                        <i class="bb-parking fa-5x"></i>
                   </div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-5 order-lg-6 back-f4f4f4">
                <div class="vert-aligner-container">
                   <div class="vert-aligner">
                        <h5>Користування мангалом</h5>
                   </div> 
                </div> 
            </div>
            <div class="col-lg-3 col-md-6 p-5 order-lg-7 ">
                <div class="vert-aligner-container">
                   <div class="vert-aligner">
                       <h5 class="mb-4">Wi-Fi на всій території</h5>
                        <i class="bb-wifi-orange fa-5x p-1"></i>
                   </div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-5 order-lg-8 back-f4f4f4">
                <div class="vert-aligner-container">
                   <div class="vert-aligner">
                        <h5>Користування конференц-залом та дитячою кіматою</h5>
                   </div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-5 order-lg-5">
                <div class="vert-aligner-container">
                   <div class="vert-aligner">
                        <h5 class="mb-4">Користування басейном</h5>
                        <i class="bb-pool fa-5x"></i>
                   </div> 
                </div>
            </div>
        </div>
    </div>
   
    <!-- Блок відгуків -->
    <div class="container-fluid pb-5 back-f4f4f4">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge">Відгуки наших відвідувачів</h2>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                <div class="container-fluid position-relative">
                    <div class="feedback-slider">
                        <!-- Типова картка відгуку -->
                        <div class="d-flex justify-content-center">
                            <div id="test" class="card feedback-card">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn... 
                                    <a href="#" class="color-ff8c00">Читати повністю</a></p>
                                </div>
                                <div class="card-footer">
                                    <i class="fab fa-facebook-square" data-toggle="tooltip" data-placement="top" title="Відгук взято з Facebook"></i>
                                    <p class="name">Mark</p>
                                    <p class="date">20.02.2018</p>
                                </div>
                                <div id="profile-huge" class="profile-image" style="background: url(img/dpx_0259.jpg);"></div>
                            </div>
                        </div>
                        <!-- Типова картка відгуку -->
                        <div class="d-flex justify-content-center">
                            <div class="card feedback-card">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="card-footer">
                                    <i class="fab fa-facebook-square" data-toggle="tooltip" data-placement="top" title="Відгук взято з Facebook"></i>
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
                                    <i class="fab fa-facebook-square" data-toggle="tooltip" data-placement="top" title="Відгук взято з Facebook"></i>
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
                    <a href="#" data-toggle="modal" data-target="#exampleModal2">Залишити відгук</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Форма замовлення зворотнього дзвінка -->
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
                        <input type="tel" placeholder="Номер телефону"/>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 my-1">
                    <div class="input-pattern">
                        <a class="btn btn-yellow get-in-touch-btn" data-toggle="modal" data-target="#exampleModal">ЗВ'ЯЗАТИСЬ З НАМИ</a>
                    </div>
                </div>
            </div>
        </form>

@endsection