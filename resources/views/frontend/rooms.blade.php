@extends('ws-app')

@section('content') 
<div class="main-slider-apart">
        <div class="slider-class-2">
            @foreach($article->getImages() as $room_img)

                <div class="fullscreen-img-2 d-flex justify-content-center" style="background-image:url('{{ asset( $room_img['full']) }}')">
                    <h5 class="apart-photo-title text-center">{{ $article->getAttributeTranslate('title_img')}}</h5>
                </div>
            @endforeach
        </div>
        <nav class="main-dots-2"></nav>
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
    </div>
   
    <div class="container-fluid px-sm-5 pb-3">
        <div class="row py-4">
            <div class="col text-center">
                <h3 class="section-header-huge pt-0">{{ $article->getTranslate('title') }}</h3>
                <small class="section-description">{{ $parent_hotel->getAttributeTranslate('type_build')}} {{ $parent_hotel->getTranslate('title')}}, {{ $parent_hotel->getAttributeTranslate('location')}}</small>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row pb-3 justify-content-center apart-features-row">
            @if($article->getAttributeTranslate('hair_dryer') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-hair-dryer"></i><br>
                    <small>{{ trans('base.hair_dryer')}}</small>
                </div>
            @endif
            @if($article->getAttributeTranslate('wifi') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-wifi-gray"></i><br>
                    <small>WIFI</small>
                </div>
            @endif
            @if($article->getAttributeTranslate('fireplace') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-fireplace"></i><br>
                    <small>{{ trans('base.fireplace')}}</small>
                </div>
            @endif
            @if($article->getAttributeTranslate('kitchen') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-kitchen"></i><br>
                    <small>{{ trans('base.kitchen')}}</small>
                </div>
            @endif
            @if($article->getAttributeTranslate('bathroom') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-shower"></i><br>
                    <small>{{ trans('base.bathroom')}}</small>
                </div>
            @endif
            @if($article->getAttributeTranslate('fridge') == 1)        
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-refrigerator"></i><br>
                    <small>{{ trans('base.fridge')}}</small>
                </div>
            @endif
            @if($article->getAttributeTranslate('safe') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-safe-box"></i><br>
                    <small>{{ trans('base.safe')}}</small>
                </div>
            @endif
            @if($article->getAttributeTranslate('kettle') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-electric-kettle"></i><br>
                    <small>{{ trans('base.kettle')}}</small>
                </div>
            @endif
            
            @if($article->getAttributeTranslate('tv') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-tv"></i><br>
                    <small>TV</small>
                </div>
            @endif
            @if($article->getAttributeTranslate('Jacuzzi') == 1)
                <div class="col-md-1 col-4 pb-4">
                    <i class="bb-jacuzzi"></i><br>
                    <small>{{ trans('base.Jacuzzi')}}</small>
                </div>
            @endif
        </div>
    </div>
    
    <div class="container-fluid px-md-5 px-3">
        <div class="full-width-line"></div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h4 class="apart-page-section-header mb-3 mobile-text-center">{{ trans('base.free_services') }}</h4>
                <div id="justify" class="row text-orange text-center no-gutters d-flex">
                    @if($article->getAttributeTranslate('breakfast') == 1)
                        <div class="col-md-2 col-4">
                            <i class="bb-breakfast fa-3x mobile-text-center"></i><br>
                            <small class="mobile-text-center">{{ trans('base.breakfast')}}</small>
                        </div>
                    @endif
                    @if($article->getAttributeTranslate('parking') == 1)
                        <i class="fa fa-plus mt-3"></i>
                        <div class="col-md-2 col-4">
                            <i class="bb-parking fa-3x mobile-text-center"></i><br>
                            <small class="mobile-text-center">{{ trans('base.parking')}}</small>
                        </div>
                    @endif 
                    @if($article->getAttributeTranslate('coffe') == 1)
                        <i class="fa fa-plus mt-3"></i>
                        <div class="col-md-2 col-4">
                            <i class="bb-teapot fa-3x mobile-text-center"></i><br>
                            <small class="mobile-text-center">{{ trans('base.coffe')}}</small>
                        </div>
                    @endif 
                    @if($article->getAttributeTranslate('сhildren_room') == 1)
                        <i class="fa fa-plus mt-3"></i>
                        <div class="col-md-2 col-4">
                            <i class="bb-toy-bold fa-3x mobile-text-center"></i><br>
                            <small class="mobile-text-center">{{ trans('base.сhildren_room')}}</small>
                        </div>
                    @endif 
                    @if($article->getAttributeTranslate('ski_storage_room') == 1)
                        <i class="fa fa-plus mt-3"></i>
                        <div class="col-md-2 col-4">
                            <i class="bb-ski-staff fa-3x mobile-text-center"></i><br>
                            <small class="mobile-text-center">{{ trans('base.ski_storage_room')}}</small>
                        </div>
                    @endif 
                    @if($article->getAttributeTranslate('bowl_ski_equipment') == 1)
                        <i class="fa fa-plus mt-3"></i>
                        <div class="col-md-2 col-4">
                            <i class="bb-ski-dryer fa-3x mobile-text-center"></i><br>
                            <small class="mobile-text-center">{{ trans('base.bowl_ski_equipment')}}</small>
                        </div>
                    @endif 
                    @if($article->getAttributeTranslate('wifi') == 1)
                        <i class="fa fa-plus mt-3"></i>
                        <div class="col-md-2 col-4">
                            <i class="bb-wifi-orange fa-3x mobile-text-center"></i><br>
                            <small class="mobile-text-center">WIFI</small>
                        </div>
                    @endif    
                </div>
                <h4 class="apart-page-section-header mt-4 mobile-text-center">Опис</h4>
                <p class="apart-page-sect-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                <h4 class="apart-page-section-header mt-4 mobile-text-center">Комплектація номеру</h4>
                <div class="row small-features mb-5">
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                    <div class="col-md-4 col-6"><p><i class="fas fa-check text-orange"></i> Lorem ipsum</p></div>
                </div>
            </div>
            <div class="col-md-4 text-md-right text-center">
                <small id="people_max">Вартість вказана для <i class="fa fa-male align-text-top text-orange"></i> х8, максимум вміщає <i class="fa fa-male align-text-top text-orange"></i> х12</small>
                <div class="order-card mt-4">
                    <div class="d-flex justify-content-center margin-left-15">
                        <div class="apart-price-discount back-707070">
                            <p class="d-flex align-items-center justify-content-around flex-xl-row flex-md-column color-white py-xl-0 py-md-3 px-xl-3"><span class="new-price-apart"><span class="custom-line-throught">6000</span><br><sup>UAH за ніч</sup></span>4500</p>
                        </div>
                        <div class="apart-price back-white d-flex flex-column">
                            <p class="color-black pt-2 mt-auto">9000</p>
                            <p class="pt-0 mb-auto"><span class=".color-opacity-5 align-text-top"><sup>UAH за 4 ночі</sup></span></p>
                        </div>
                    </div>
                    <div id="div-datepicker" class="input-pattern mt-1">
                        <i class="fas fa-calendar-alt order-form-icon"></i>
                        <input type='text' data-language="ua" data-multiple-dates-separator=" - " class="datepicker-here cursor-pointer pl-2" id="datepicker" placeholder="Дати" readonly="readonly"/>
                    </div>
                    <div class="input-pattern d-flex justify-content-between mt-3">
                        <p id="guests" class="input-text float-left">Кількість гостей</p>
                        <i class="fas fa-male order-form-icon"></i>
                        <div class="input-dropdown">
                            <div class="input-members d-flex justify-content-between">
                                <p>Дорослі</p>
                                <span>
                                    <button id="adults_minus" type="button">
                                        <i class="fas fa-minus fa-lg add-member-btn"></i>
                                    </button>
                                    <input id="adults" type="number" name="adults" min="0" value="0" readonly="readonly" />
                                    <button id="adults_plus" type="button">
                                        <i class="fas fa-plus fa-lg add-member-btn"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="input-members d-flex justify-content-between">
                                <p>Діти<br/><sup>5-12 років</sup></p>
                                <span>
                                    <button id="children_minus"type="button">
                                        <i class="fas fa-minus fa-lg add-member-btn"></i>
                                    </button>
                                    <input id="children" type="number" name="children" min="0" value="0" readonly="readonly" />
                                    <button id="children_plus" type="button">
                                        <i class="fas fa-plus fa-lg add-member-btn"></i>
                                    </button>
                                </span>
                            </div>
                            <p class="children-up-to-5"><sub>діти до 5 років - безкоштовно</sub></p>
                        </div>
                    </div>
                    <div class="apart-left">
                        <p class="text-uppercase">ЗАЛИШИЛОСЬ ВСЬОГО 3 НОМЕРИ</p>
                    </div>
                    <div class="apart-buy">
                        <a class="btn btn-yellow text-uppercase" data-toggle="modal" data-target="#exampleModal">ЗАБРОНЮВАТИ</a>
                    </div>
                </div>                   
            </div>
        </div>
        <div class="row px-xl-5 px-3 mb-4 mt-5">
            @foreach($rules as $rule)
                <div class="col-lg-2 col-md-4 mb-4">
                    {!! $rule->getAttributeTranslate('icon') !!}
                    <h5 class="rules-header ">{{ $rule->getTranslate('title') }}</h5>
                    <div class="apart-page-sect-desc pl-4">{!! $rule->getTranslate('short_description') !!}</div>
                </div>
            @endforeach
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row text-center px-md-5">
            <div class="col">
                <h2 class="section-header-huge pt-4">Відгуки наших відвідувачів</h2>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>
        </div>
        <div class="container-fluid px-xl-5">
            <div class="container-fluid line-1-ff8c00"></div>
            <div class="row px-xl-5 my-5">
                <div class="col-xl-3 d-flex align-items-center justify-content-center">
                    <p class="section-text-huge mobile-text-center">222 відгуки<br/>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    </p>
                </div>
                <div class="col-xl px-xl-5">
                    <div class="row">
                        <div class="col d-flex justify-content-xl-around">
                            <p class="section-text-small mx-xl-0 mr-auto">чистота</p>
                            <div class="div-stars">
                                <i class="far fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-xl-around">
                            <p class="section-text-small mx-xl-0 mr-auto">затишок</p>
                            <div class="div-stars">
                                <i class="far fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl px-xl-5">
                    <div class="row">
                        <div class="col d-flex justify-content-xl-around">
                            <p class="section-text-small mx-xl-0 mr-auto">розташування</p>
                            <div class="div-stars">
                                <i class="far fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-xl-around">
                            <p class="section-text-small mx-xl-0 mr-auto">смачна кухня</p>
                            <div class="div-stars">
                                <i class="far fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid line-1-ff8c00"></div>
        </div>
    </div>

    <div class="container-fluid py-5">
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
    
    <div class="container-fluid pb-5 back-f4f4f4">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge pb-5">Cхожі номери</h2>
            </div>
        </div>
        <div class="row justify-content-center no-gutters px-md-5 px-0">
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card shadow-hover">
                        <div class="small-card-image" style="background-image: url(img/hotels/beardvir.jpg)"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col-8">
                                <h5 class="small-card-header">напівлюкс із каміном</h5>
                            </div>
                            <div class="col-4 text-right">
                                <small class="alt-dates">з 05.10 по 08.10</small>
                            </div>
                        </div>
                        <div class="row pb-1 px-md-4 px-3">
                            <div class="col-8">
                                <small class="small-card-hotel">Eлітний котедж ВЕЛИКА ВЕДМЕДИЦЯ</small>
                            </div>
                            <div class="col-4 text-right">
                                <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> Яремче</p>
                            </div>
                        </div>
                        <div class="apart-small-card-buy d-flex flex-column justify-content-center">
                            <p class="text-center font-19 d-flex flex-column">100<sup class="pt-3"><sup>UAH за ніч</sup></sup></p>
                        </div>
                        <div class="apart-small-card-buy-hover"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                        <div class="apart-small-discount-hotel">
                            <p class="text-center py-1 text-uppercase">знижка 50%</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card shadow-hover">
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
                        <div class="apart-small-card-buy d-flex flex-column justify-content-center">
                            <p class="text-center font-19 d-flex flex-column">100<sup class="pt-3"><sup>UAH за ніч</sup></sup></p>
                        </div>
                        <div class="apart-small-card-buy-hover"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="#" class="a-card">
                    <div class="apart-small-card shadow-hover">
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
                        <div class="apart-small-card-buy d-flex flex-column justify-content-center">
                            <p class="text-center font-19 d-flex flex-column">100<sup class="pt-3"><sup>UAH за ніч</sup></sup></p>
                        </div>
                        <div class="apart-small-card-buy-hover"><p class="d-flex justify-content-center align-items-center">ЗАБРОНЮВАТИ</p></div>
                        <div class="apart-small-discount-hotel">
                            <p class="text-center py-1 text-uppercase">знижка 50%</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 back-0f0f0f">
        <div class="row no-gutters">
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908" width="100%" height="400" frameborder="0" class="border-0" allowfullscreen></iframe>
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
                        <a class="btn btn-yellow get-in-touch-btn text-uppercase" data-toggle="modal" data-target="#exampleModal">ЗВ'ЯЗАТИСЬ З НАМИ</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-rounds">
                <div class="container-fluid px-0">
                    <div class="row justify-content-center my-4 px-4">
                        <div class="col text-center">
                            <h5 class="section-header-huge pt-0 mb-0">підтвердження бронювання номеру</h5>
                        </div>
                    </div>
                    <div class="h-line-thin"></div>
                    <div class="row text-center">
                        <div class="col">
                            <h3 class="section-header-huge pt-5">напівлюкс із каміном</h3>
                            <h6 class="section-header-small mb-4">Елітний котедж велика ведмедиця, яремче</h6>
                        </div>
                    </div>
                    <div class="row px-md-5 px-4">
                        <div class="col-7">
                            <p class="text-muted"><i class="fa fa-male align-text-top text-orange"></i> х8: 5 дорослих та 3 дитини</p>
                        </div>
                        <div class="col-5 text-right">
                            <p class="text-muted">з 20.08 по 22.08 <i class="fas fa-calendar-alt align-text-top text-orange"></i></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="section-header-huge pb-4">9000 UAH</h2>
                        </div>
                    </div>
                    <div class="row text-center py-4 px-4 no-gutters back-f4f4f4">
                        <div class="col-md-6 my-1">
                            <div class="input-pattern">
                                <input type="text" placeholder="Ім'я"/>
                            </div>
                        </div>
                        <div class="col-md-6 my-1">
                            <div class="input-pattern">
                                <input type="text" placeholder="Телефон"/>
                            </div>
                        </div>
                        <div class="col my-1">
                            <div class="input-pattern">
                                <input type="text" placeholder="Електронна скринька"/>
                            </div>
                        </div>
                    </div>
                    <div class="row  justify-content-center my-3">
                        <div class="col-md-6 col-10">
                            <button type="button" class="btn btn-yellow" data-dismiss="modal">Забронювати</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection