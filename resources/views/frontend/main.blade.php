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
        <div class="row text-center" >
            <div class="col">
                <h2 class="section-header-huge">МЕРЕЖА ГОТЕЛІВ "ВЕЛИКА ВЕДМЕДИЦЯ"</h2>
                <h4 class="section-header-small">в яремче та буковелі</h4>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
        </div>
        <div class="row justify-content-center no-gutters px-md-5 px-0" id="section-hotels" >
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/u_marka.JPG)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col">
                                <h5 class="small-hotel-header">Котедж У МАРКА</h5>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-4">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                            <div class="col-8 text-right">
                                <small class="small-card-hotel">Залишилось 3 номери</small>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center apart-small-card-buy-hotel-p">від <strong>100</strong> грн</p>
                        </div>
                        <div class="apart-small-card-buy-hover apart-small-hover-hotel"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/bigbear.JPG)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col">
                                <h5 class="small-hotel-header">Готель ВЕЛИКА ВЕДМЕДИЦЯ</h5>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-4">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                            <div class="col-8 text-right">
                                <small class="small-card-hotel">Залишилось 3 номери</small>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center apart-small-card-buy-hotel-p">від <strong>100</strong> грн</p>
                        </div>
                        <div class="apart-small-card-buy-hover apart-small-hover-hotel"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/dreamhouse.jpg)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col">
                                <h5 class="small-hotel-header">Елітний котедж DREAM HOUSE</h5>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-4">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                            <div class="col-8 text-right">
                                <small class="small-card-hotel">Залишилось 3 номери</small>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center apart-small-card-buy-hotel-p">від <strong>100</strong> грн</p>
                        </div>
                        <div class="apart-small-card-buy-hover apart-small-hover-hotel"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
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
                                <h5 class="small-hotel-header">Готель ВЕДМЕЖИЙ ДВІР</h5>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-4">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Буковель</p>
                            </div>
                            <div class="col-8 text-right">
                                <small class="small-card-hotel">Залишилось 3 номери</small>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center apart-small-card-buy-hotel-p d-flex align-items-center justify-content-between">від <strong>100</strong> грн</p>
                        </div>
                        <div class="apart-small-card-buy-hover apart-small-hover-hotel"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card">
                        <div class="small-card-image" style="background-image: url(img/hotels/whitehouse.jpg)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col-8">
                                <h5 class="small-hotel-header">Елітний котедж WHITE HOUSE</h5>
                            </div>
                        </div>
                        <div class="row pb-1  px-md-4 px-3">
                            <div class="col-4">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Буковель</p>
                            </div>
                            <div class="col-8 text-right">
                                <small class="small-card-hotel">Залишилось 3 номери</small>
                            </div>
                        </div>
                        <div class="apart-small-card-buy">
                            <p class="text-center apart-small-card-buy-hotel-p d-flex align-items-center justify-content-between discount">від <span class="d-flex flex-column"><span class="old-price-hotel-card">200</span><strong>100</strong></span> грн</p>
                        </div>
                        <div class="apart-small-card-buy-hover apart-small-hover-hotel"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                        <div class="apart-small-discount-hotel">
                            <p class="text-center py-1 text-uppercase">знижка 50%</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="align-self-center fake col-xl-2 fake-right"></div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row justify-content-center px-md-5 px-0 text-center">
            <div class="col">
                <h2 class="section-header-huge section-number-include">понад <span id="giant-number">9821</span> гостей</h2>
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

    <div class="container-fluid pb-5 back-f4f4f4" id="section-reviews">
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
                                    <i class="fab fa-facebook-square" data-toggle="tooltip" data-placement="top" title="Відгук взято з Facebook"></i>
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
    </div>

@endsection