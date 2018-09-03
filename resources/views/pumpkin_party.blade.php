<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('/css/frontend/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/pumpkin_party/css/style.css') }}?ver={{ $version }}">
        <link rel="stylesheet" href="{{ asset('/css/frontend/style.css') }}?ver={{ $version }}">
        <link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">

        <script defer src="{{ asset('/js/frontend/fontawesome-all.js') }}"></script>

        <title>Велика Ведмедиця</title>

        <meta name="description" content="description content">
        <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon.png') }}?1">
        @if(getSetting('ip'))
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MQCTRLS');</script>
            <!-- End Google Tag Manager -->
        @endif
    </head>
    
    <body>
        <nav class="navbar navbar-expand-xl navbar-light navbar-shadowed fixed-top navbar-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a id="mobile-logo" class="mx-auto" href="#"><img class="img-fluid" src="img/logo.png" width="100px"></a>
            <div class="navbar-side-mobile text-right dropdown">
                <a id="mobile-lang-toggler" class="font-weight-bold text-uppercase" href="#"><i class="fas fa-chevron-down mr-2"></i>УКР</a>
                <div class="dropdown-content left-6-px">
                    <a class="toggler-a font-weight-bold text-uppercase" href="#">РУС</a>
                    <div class="h-line-bold marginy-4-px"></div>
                    <a class="toggler-a font-weight-bold text-uppercase" href="#">ENG</a>
                </div>  
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto align-items-center text-center mt-2 mt-xl-0" id="custom-navbar">
                    <div class="navbar-side-container text-left">
                        <span class="nav-link navbar-phone" href="#">
                            <div class="dropdown">
                                +38 (067) 716 2385
                                <i class="fas fa-chevron-down ml-2"></i><br>
                                <div class="dropdown-content">
                                    <p>+38 (067) 716 2385</p>
                                    <p>+38 (067) 716 2385</p>
                                    <div class="h-line-bold"></div>
                                    <small class="text-muted">написати в месенджер</small><br>
                                    <div class="mb-2"></div>
                                    <a href="#" class="viber-icon"><i class="fab fa-viber fa-lg"></i></a>
                                    <a href="#" class="whatsapp-icon"><i class="fab fa-whatsapp fa-lg mx-3"></i></a>
                                    <a href="#" class="telegram-icon"><i class="fab fa-telegram-plane fa-lg"></i></a>
                                </div>
                            </div>
                            <a class="btn btn-yellow-custom-little py-1 mt-1" href="#">Забронювати</a>
                        </span>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link my-1 hover-underline" href="#aboutAnchor">Про вечірку</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my-1 hover-underline" href="#programAnchor">програма</a>
                    </li>
                    <li class="nav-item text-center my-xl-1">
                        <a id="desktop-logo" href="{{ route('article_index', [setLangToRedirect(App::getLocale())])}}"><img class="img-fluid mx-center" src="{{ asset('/img/frontend/logo.png') }}" width="140px"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my-1 hover-underline" href="#dishesAnchor">страви</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my-1 hover-underline" href="#orderAnchor">реєстрація</a>
                    </li>
                    <div class="navbar-side-container-2 text-right dropdown">
                        <a class="nav-link font-weight-bold text-uppercase" href="#">
                            <i class="fas fa-chevron-down mr-2"></i>
                            УКР
                        </a>
                        {{--<div class="dropdown-content">
                            <a class="nav-link font-weight-bold padding-4-px text-uppercase" href="#">РУС</a>
                            <div class="h-line-bold marginy-4-px"></div>
                            <a class="nav-link font-weight-bold padding-4-px text-uppercase" href="#">ENG</a>
                        </div>--}}   
                    </div>
                </ul>
            </div>  
        </nav>
        
        <div id="main-view">
            <div class="fullscreen-img justify-content-center pt-25" style="background-image: url('{{ asset ('pumpkin_party/img/pumpkit.jpg')}}');">
                <h1 class="text-uppercase">гарбузова вечірка<br class="mobile-invisible"> у карпатах</h1>
                <div class="dark-bg mt-5 py-md-4 py-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 text-md-right text-center align-self-center mb-md-0 mb-3">
                                <h3 class="text-white text-thin mb-0">Від п'ятниці 21.09.18</h3>
                            </div>
                            <div class="col-md-2">
                                <a href="#orderAnchor" class="btn btn-yellow">Долучитися <br class="mobile-invisible">до веселощів!</a>
                            </div>
                            <div class="col-md-5 text-md-left text-center align-self-center mt-md-0 mt-3">
                                <h3 class="text-white text-thin mb-0">До неділі 23.09.18</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <a class="btn btn-dark-bg" href="#aboutAnchor">Дізнатися більше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid px-sm-5 pb-3" id="aboutAnchor">
            <div class="row text-center">
                <div class="col">
                    <h2 class="section-header-huge text-uppercase">Що ми підготували для вас?</h2>
                    <p class="section-description">Включено у вартість: проживання +сніданки, СПА (теплий басейн, гаряча бочка, баня, джакузі на вулиці), вечірка (гарбузове меню, шоу-програма, розіграш призів, шведський стіл)</p>
                </div>
            </div>
        </div>
        
        <div class="container-fluid px-0 back-f4f4f4">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="chess-image" style="background-image: url('{{ asset ('pumpkin_party/img/bass.jpg')}}');"></div>
                </div>
                <div class="col-md-6 align-self-center text-md-left text-center p-md-5 p-4">
                    <h3 class="checker-title px-md-4">
                        ГОТЕЛЬ "ВЕДМЕЖИЙ ДВІР"
                    </h3>
                    <p class="section-description px-md-4 px-0 mb-0 pb-0">
                        Готель "Ведмежий Двір" дарує своїм гостям унікальну можливість провести незабутній вікенд у Карпатах. Ексклюзивне гарбузове меню від шеф-кухаря, запальна шоу-вечірка, танці, жива музика. 
                    </p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 order-md-2">
                    <div class="chess-image" style="background-image: url('{{ asset ('pumpkin_party/img/prty.jpg')}}');"></div>
                </div>
                <div class="col-md-6 order-md-1 align-self-center text-md-right text-center p-md-5 p-4">
                    <h3 class="checker-title px-md-4">
                        ВЕЧІРКА + ШОУ-ПРОГРАМА
                    </h3>
                    <p class="section-description px-md-4 px-0 mb-0 pb-0">
                         Жива музика, розіграш призів, шведський стіл «Скуштуй і засмакуй гарбузові страви». Гурт Жанна Романюк та Любомир Згурський. 
                    </p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="chess-image" style="background-image: url('{{ asset ('pumpkin_party/img/spa.jpg')}}');"></div>
                </div>
                <div class="col-md-6 align-self-center text-md-left text-center p-md-5 p-4">
                    <h3 class="checker-title px-md-4">
                        СПА по ГУЦУЛЬСЬКИ
                    </h3>
                    <p class="section-description px-md-4 px-0 mb-0 pb-0">
                        Теплий басейн, гаряча бочка "ОФУРО", баня на дровах, джакузі на свіжому повітрі
                    </p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 order-md-2">
                    <div class="chess-image" style="background-image: url('{{ asset ('pumpkin_party/img/food.jpg')}}');"></div>
                </div>
                <div class="col-md-6 order-md-1 align-self-center text-md-right text-center p-md-5 p-4" id="dishesAnchor">
                    <h3 class="checker-title px-md-4">
                        ГАРБУЗОВІ СМАКОЛИКИ
                    </h3>
                    <p class="section-description px-md-4 px-0 mb-0 pb-0">
                        Запіканка з гарбуза з горіхами та медом, овочеве різотто з гарбузом, запечена свинина з айвою та гарбузом, печеня з яловичини з гарбузом у пиві. Гарбузовий сирник
                    </p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row justify-content-center p-5">
                <div class="col-md-4">
                    <a class="btn btn-yellow" href="#orderAnchor">Долучитися до веселощів!</a>
                </div>
            </div>
        </div>
        
        <div class="container-fluid px-sm-5 pb-3 back-f4f4f4" id="programAnchor">
            <div class="row text-center">
                <div class="col">
                    <h2 class="section-header-huge text-uppercase">Графік вечірки</h2>
                    <p class="section-description">Включено у вартість: проживання +сніданки, СПА (теплий басейн, гаряча бочка, баня, джакузі на вулиці), вечірка (гарбузове меню, шоу-програма, розіграш призів, шведський стіл)</p>
                </div>
            </div>
        </div>
        
        <div class="container-fluid px-sm-5 px-0 pb-3 back-f4f4f4">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10">
                    <div class="pumpkin-date text-md-left text-center">
                        <h4 class="mb-0 ml-md-5">21.09.18 - п'ятниця</h4>
                    </div>
                </div>
            </div>



            <div class="row justify-content-center my-3">
                <div class="col-md-1 col-2 px-0 text-right">
                    <i class="fas fa-circle dot-shadow"></i>
                </div>
                <div class="col-md-9 col-10">
                    <h5 class="ml-md-3 text-brown"><span class="text-thin">12:00 - 14:00 – </span> поселення </h5>
                </div>
            </div>

            <div class="row justify-content-center my-3">
                <div class="col-md-1 col-2 px-0 text-right">
                    <i class="fas fa-circle dot-shadow"></i>
                </div>
                <div class="col-md-9 col-10">
                    <h5 class="ml-md-3 text-brown"><span class="text-thin">14:00 – 17:30 – </span> вільний час, відпочинок на території готелю "Ведмежий Двір" (купання в басейні, прогулянка лісом, збір грибів, відпочинок біля ставка) </h5>
                </div>
            </div>



            <div class="row justify-content-center my-3">
                <div class="col-md-1 col-2 px-0 text-right">
                    <i class="fas fa-circle dot-shadow"></i>
                </div>
                <div class="col-md-9 col-10">
                    <h5 class="ml-md-3 text-brown"><span class="text-thin">17:30 - 24:00 – </span> гарбузова вечірка: жива музика, розіграш призів, шведський стіл «Скуштуй і засмакуй гарбузові страви»
                    </h5>
                </div>
            </div>
            

            <div class="row justify-content-center my-5">
                <div class="col-md-10">
                    <div class="pumpkin-date text-md-left text-center">
                        <h4 class="mb-0 ml-md-5">22.09.18 - субота</h4>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center my-3">
                <div class="col-md-1 col-2 px-0 text-right">
                    <i class="fas fa-circle dot-shadow"></i>
                </div>
                <div class="col-md-9 col-10">
                    <h5 class="ml-md-3 text-brown"><span class="text-thin">9:00 - 12:00 – </span> сніданок </h5>
                </div>
            </div>

            <div class="row justify-content-center my-3">
                <div class="col-md-1 col-2 px-0 text-right">
                    <i class="fas fa-circle dot-shadow"></i>
                </div>
                <div class="col-md-9 col-10">
                    <h5 class="ml-md-3 text-brown"><span class="text-thin">13:00 - 17:00 – </span> спа-процедури: гаряча бочка, баня, джакузі на вулиці + теплий басейн</h5>
                </div>
            </div>
            
            <div class="row justify-content-center my-5">
                <div class="col-md-10">
                    <div class="pumpkin-date text-md-left text-center">
                        <h4 class="mb-0 ml-md-5">23.09.18 - неділя</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-md-1 col-2 px-0 text-right">
                    <i class="fas fa-circle dot-shadow"></i>
                </div>
                <div class="col-md-9 col-10">
                    <h5 class="ml-md-3 text-brown"><span class="text-thin">9:00 - 12:00 – </span> сніданок </h5>
                </div>
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-md-1 col-2 px-0 text-right">
                    <i class="fas fa-circle dot-shadow"></i>
                </div>
                <div class="col-md-9 col-10">
                    <h5 class="ml-md-3 text-brown"><span class="text-thin">12:00 – 16:00 – </span> відпочинок біля басейну, вільний час </h5>
                </div>
            </div>

            <div class="row justify-content-center my-3">
                <div class="col-md-1 col-2 px-0 text-right">
                    <i class="fas fa-circle dot-shadow"></i>
                </div>
                <div class="col-md-9 col-10">
                    <h5 class="ml-md-3 text-brown"><span class="text-thin">17:00 – </span> виїзд з готелю </h5>
                </div>
            </div>

            
            <div class="row justify-content-center p-5">
                <div class="col-md-4">
                    <a class="btn btn-yellow" href="#orderAnchor">Долучитися до веселощів!</a>
                </div>
            </div>
        </div>
        

<!--  
        <div class="container-fluid px-sm-5 pb-3">
            <div class="row text-center">
                <div class="col">
                    <h2 class="section-header-huge text-uppercase">Святкове меню</h2>
                    <p class="section-description">У ціну усіх номерів включені безкоштовні сніданок, чай, кава та проживання дітей віком до 5 років (для номерів з місткістю від двох людей)</p>
                </div>
            </div>
        </div>
        
        <div class="container-fluid px-0 back-f4f4f4">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="chess-image" style="background-image: url(img/impressions/karpathians.jpg)"></div>
                </div>
                <div class="col-md-6 align-self-center text-md-left text-center p-md-5 p-4">
                    <h3 class="checker-title px-md-4">
                        WEEK-END В КАРПАТАХ
                    </h3>
                    <p class="section-description px-md-4 px-0 mb-0 pb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 order-md-2">
                    <div class="chess-image" style="background-image: url(img/impressions/karpathians.jpg)"></div>
                </div>
                <div class="col-md-6 order-md-1 align-self-center text-md-right text-center p-md-5 p-4">
                    <h3 class="checker-title px-md-4">
                        WEEK-END В КАРПАТАХ
                    </h3>
                    <p class="section-description px-md-4 px-0 mb-0 pb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="chess-image" style="background-image: url(img/impressions/karpathians.jpg)"></div>
                </div>
                <div class="col-md-6 align-self-center text-md-left text-center p-md-5 p-4">
                    <h3 class="checker-title px-md-4">
                        WEEK-END В КАРПАТАХ
                    </h3>
                    <p class="section-description px-md-4 px-0 mb-0 pb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 order-md-2">
                    <div class="chess-image" style="background-image: url(img/impressions/karpathians.jpg)"></div>
                </div>
                <div class="col-md-6 order-md-1 align-self-center text-md-right text-center p-md-5 p-4">
                    <h3 class="checker-title px-md-4">
                        WEEK-END В КАРПАТАХ
                    </h3>
                    <p class="section-description px-md-4 px-0 mb-0 pb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                </div>
            </div>
        </div>
!-->


        
        <div class="container-fluid px-sm-5 pb-3" id="orderAnchor">
            <div class="row text-center">
                <div class="col">
                    <h2 class="section-header-huge text-uppercase">Приєднуйся прямо зараз!</h2>
                    <p class="section-description">Включено у вартість: проживання +сніданки, СПА (теплий басейн, гаряча бочка, баня, джакузі на вулиці), вечірка (гарбузове меню, шоу-програма, розіграш призів, шведський стіл)</p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="pumpkin-price-card bg-white text-center px-5 m-0">
                        <p class="footer-text text-uppercase mt-3 mb-2">Актуальна ціна</p>
                        <div class="full-width-line"></div>
                        <h2 class="section-header-huge pt-3 mb-0"><b>2800 UAH</b></h2>
                        <small class="footer-text">для однієї особи</small>
                        <div class="full-width-line mt-3"></div>
                        <p class="footer-text text-uppercase mt-3 mb-2">ДІЙСНА ТІЛЬКИ ДО 7 ВЕРЕСНЯ!</p>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center mb-3">
                    <div class="pumpkin-price-card text-center px-5 m-0">
                        <p class="footer-text text-uppercase mt-3 mb-2">"ДІЙСНА З 8 ВЕРЕСНЯ"</p>
                        <h2 class="section-header-huge pt-0 mb-0"><b>3200 UAH</b></h2>
                        <div class="full-width-line mt-3"></div>
                        <p class="footer-text text-uppercase mt-3 mb-2">ДО 15 ВЕРЕСНЯ!</p>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center mb-3">
                    <div class="pumpkin-price-card text-center px-5 m-0">
                        <p class="footer-text text-uppercase mt-3 mb-2">"ДІЙСНА З 16 ВЕРЕСНЯ"</p>
                        <h2 class="section-header-huge pt-0 mb-0"><b>3500 UAH</b></h2>
                        <div class="full-width-line mt-3"></div>
                        <p class="footer-text text-uppercase mt-3 mb-2">+ У ДЕНЬ ВЕЧІРКИ!</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid back-f4f4f4 mt-5 py-5">
            <form id="callback" method="POST">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <form>
                            <div class="input-pattern mt-3">
                                <input type="text" required name="callback_name" placeholder="Ім'я"/>
                            </div>
                            <div class="input-pattern mt-2">
                                <input type="number" required name="callback_phone" placeholder="Номер телефону"/>
                            </div>
                            <div class="apart-left mt-3">
                                <p class="text-uppercase">ЗАЛИШИЛОСЬ ВСЬОГО 3 НОМЕРИ</p>
                            </div>
                            <input type="hidden" name='lang' value="{{ App::getLocale() }}"/>
                            <input type="hidden" name='csrf-token' value="{{csrf_token()}}"/>

                            <div class="apart-buy mt-3">
                                <button class="btn btn-yellow text-uppercase" id="submit-callback-2" type="submit">ЗАБРОНЮВАТИ</button>
                            </div>
                        </form>  
                    </div>
                </div>  
            </form>
        </div>
        
        <footer class="black-footer py-md-4 py-0" id='contactAnchor'>
        <div class="container-fluid">
            <div class="row justify-content-center pb-5">
                <div class="col-md-5 pt-md-5 pt-3">
                    <h6 class="footer-header mb-3">{{ $categories_data['contacts']->getTranslate('title') ? $categories_data['contacts']->getTranslate('title') : 'Контакти' }}</h6>
                    <div class="row no-gutters">
                        <div class="col-md-3 col-4">
                            <p class="footer-text">
                            {{trans('base.tel')}}.<br><br>
                            @if(isset($messengers) AND count($messengers) !== 0 AND $categories_data['messengers']->active == 1)
                                {{trans('base.write')}}<br>
                            @endif
                                e-mail<br>
                                {{trans('base.address')}}
                            </p>
                        </div>
                        <div class="col-md-9 col-8">
                            <p class="text-white phones-included">
                                <a href="tel:{{ str_replace([' ', '(', ')'], '', $texts->get('tel_1'))}}"  class="text-white">{{ $texts->get('tel_1') }}</a><br>
                                <a href="tel:{{ str_replace([' ', '(', ')'], '', $texts->get('tel_2'))}}" class="text-white">{{ $texts->get('tel_2') }}</a><br>
                                @if(isset($messengers) AND count($messengers) !== 0 AND $categories_data['messengers']->active == 1)
                                    @foreach($messengers as $messenger)    
                                        <a href="{{ $messenger->getAttributeTranslate('messenger_link') ? $messenger->getAttributeTranslate('messenger_link') : "#"}}">
                                            {!! $messenger->getAttributeTranslate('icon_footer') ? $messenger->getAttributeTranslate('icon_footer') : " " !!}
                                        </a>
                                        
                                    @endforeach
                                @endif
                                <br>
                                {{ $texts->get('email') }}<br>
                                {{ $texts->get('address') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2 col-6 pt-5">
                    <h6 class="footer-header mb-3">{{trans('base.about_us')}}</h6>
                    @if(isset($hotels) AND count($hotels) !== 0 AND $categories_data['hotels']->active == 1)
                        <a href="#section-hotels" class="text-white">{{ $categories_data['hotels']->getTranslate('title') ? $categories_data['hotels']->getTranslate('title') : 'готелі' }}</a><br>
                    @endif
                    @if(isset($reviews) AND count($reviews) !== 0 AND $categories_data['reviews']->active == 1)
                        <a href="#section-reviews" class="text-white">{{ strstr( $categories_data['reviews']->getTranslate('title') ? $categories_data['reviews']->getTranslate('title') : 'відгуки' . ' ', ' ', true ) }}</a><br>
                    @endif
                    @if(isset($contacts) AND count($contacts) !== 0 AND $categories_data['contacts']->active == 1)
                        <a class="text-white"  href="#section-footer">{{ $categories_data['contacts']->getTranslate('title') ? $categories_data['contacts']->getTranslate('title') : 'контакты' }}</a><br>
                    @endif
                    {{--<a href="#" class="text-white">Номери та ціни</a><br>
                    <a href="#" class="text-white">Акції</a><br>
                    <a href="#" class="text-white">Враження</a><br>
                    <a href="#" class="text-white">Посилання</a><br>
                    <a href="#" class="text-white">І так далі</a>--}}
                </div>
                @if(isset($hotels) AND count($hotels) !== 0 AND $categories_data['hotels']->active == 1)
                    <div class="col-md-2 col-6 pt-5">
                        <h6 class="footer-header mb-3">
                            {{ $categories_data['hotels']->getTranslate('title') ? $categories_data['hotels']->getTranslate('title') : 'готелі' }}
                        </h6>
                        @foreach($hotels as $hotel)
                            <a target="_blank"  href="{{ $hotel->getAttributeTranslate('is_base_hotel') ? route('article_index_subdomain', [setLangToRedirect(App::getLocale()), $categories_data['hotels']->getTranslate('url'), $hotel->getAttributeTranslate('url')]) : route('article_show', [setLangToRedirect(App::getLocale()), $categories_data['hotels']->getTranslate('url'), $hotel->getAttributeTranslate('url'), $categories_data['rooms']->getTranslate('url'), $hotel->article_children->where('article_id', $hotel->id)->where('category_id', $categories_data['rooms']->id)->pluck('id')->first()])}}" class="text-white">{{ $hotel->getTranslate('title')}}</a><br>                          
                        
                        @endforeach
                    </div>
                @endif
                
            </div>
            <div class="row justify-content-center pb-3">
            <div class="col-md-3 order-md-2 text-md-right text-center">
                @if(isset($social) AND count($social) !== 0 AND $categories_data['social']->active == 1)
                    @foreach($social as $social_item)
                        <div class="footer-icon-container"><a href="{{ $social_item->getAttributeTranslate('social_link') ? $social_item->getAttributeTranslate('social_link') : "#"}}" target="_blank" class="text-white">{!! $social_item->getAttributeTranslate('icon') ? $social_item->getAttributeTranslate('icon') : " " !!}</a></div>                        
                    @endforeach                    
                @endif
                {{--@if(isset($seoarticles) AND count($seoarticles)!== 0)
                    @foreach($seoarticles as $seoarticle)
                        <div class="footer-icon-container"><a href="{{ route('article_show_seo', [setLangToRedirect(App::getLocale()), $seoarticle->article_parent->getAttributeTranslate('url'), $seoarticle->getAttributeTranslate('url')]) }}">{{ $seoarticle->getTranslate('title')}}</a></div>
                    @endforeach

                @endif--}}
            </div>
            <input type="hidden" name='lang' value="ua"/>
            <input type="hidden" name='csrf-token' value="{{csrf_token()}}"/>
            <div class="col-md-7 order-md-1 mt-md-3 mt-5">
                <p class="footer-text">
                    All right reserved © BigBear <?php echo date("Y");?><br>
                    <!-- Designed by <a href="http://www.crayfish.studio" class="text-white" target="_blank">Crayfish Studio</a> with <i class="fa fa-heart"></i> and <i class="fa fa-coffee"></i> -->
                </p>
            </div>
            </div>
        </div>
    </footer> 
    @if(getSetting('ip'))
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQCTRLS"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @endif
        <!-- END .footer -->
    <!-- file_translate -->
    @include('frontend.sections.i18n')
    <!--  END file_translate-->
        <script src="{{ asset('/js/frontend/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('/js/frontend/popper.min.js') }}"></script>
        <script src="{{ asset('/js/frontend/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/frontend/main.js') }}?ver={{ $version }}"></script>
        <script src="{{ asset('pumpkin_party/js/main.js') }}?ver={{ $version }}"></script>
        <script src="{{ asset('/js/frontend/custom.js') }}?ver={{ $version }}"></script>
        <script src="{{ asset('/js/frontend/scroll.js') }}"></script>
        <script defer src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
    </body>
</html>