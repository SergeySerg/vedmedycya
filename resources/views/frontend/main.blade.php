@extends('ws-app')

@section('content')

 <div id="main-slider">
        <div class="slider-class">
        @foreach($main_slides as $slide)
            <div class="fullscreen-img d-flex align-items-center justify-content-center" style="background-image: url('{{ asset( $slide->getAttributeTranslate('slide_img')) }}')">
                <h1>{!! $slide->getTranslate('short_description') !!}</h1>                
            </div>
        @endforeach    
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
                                <input disabled id="location" type="text" name="location" placeholder="{{ trans('base.hotel_city') }}" readonly="readonly" class="cursor-pointer"/>
                                <i class="fas fa-map-marker-alt input-icon"></i>
                                <div class="input-dropdown px-2">
                                    @foreach($hotels as $hotel)
                                        <p class="input-location d-flex align-items-center"><span>{{ $hotel->getTranslate('title')}}<br/><sub> @if($hotel->getAttributeTranslate('location')) ({{ $hotel->getAttributeTranslate('location') }}) @else  @endif</sub></span></p>
                                     @endForeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6 my-1">
                            <div id="div-datepicker" class="input-pattern">
                                <i class="fas fa-calendar-alt input-icon"></i>
                                <input type='text' data-language="{{ App::getLocale() }}" data-multiple-dates-separator=" - " class="datepicker-here cursor-pointer" id="datepicker" placeholder="{{ trans('base.date')}}" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 my-1">
                            <div class="input-pattern">
                                <p id="guests" class="input-text">{{ trans('base.count_guestі')}}</p>
                                <i class="fas fa-male input-icon"></i>
                                <div class="input-dropdown">
                                    <div class="input-members d-flex justify-content-between">
                                        <p>{{ trans('base.adults')}}</p>
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
                                        <p>{{ trans('base.children')}}<br/><sup>5-12 {{ trans('base.years')}}</sup></p>
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
                                    <p class="children-up-to-5"><sub>{{ trans('base.free_children')}}</sub></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 my-1">
                            <div class="input-pattern">
                                <button type="submit" class="submit-button">{{ trans('base.check_price') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    <div id="mobile-phones" class="text-center">
        <i class="fas fa-phone fa-2x my-2 color-ff8c00"></i>
        <h5 class="mt-2"><a href="tel:{{ str_replace([' ', '(', ')'], '', $texts->get('tel_1'))}}" class="phone-clickable">{{ $texts->get('tel_1') }}</a><br></h5>
        <h5 class="mb-3"><a href="tel:{{ str_replace([' ', '(', ')'], '', $texts->get('tel_2'))}}" class="phone-clickable"> {{ $texts->get('tel_2') }}</a><br></h5>
        <h6 class="mb-3">{{trans('base.write_in_messenger')}}</h6>        
        @if(isset($messengers) AND count($messengers) !== 0 AND $categories_data['messengers']->active == 1)
            @foreach($messengers as $messenger)
                <a href="{{ $messenger->getAttributeTranslate('messenger_link') ? $messenger->getAttributeTranslate('messenger_link') : "#"}}"> {!! $messenger->getAttributeTranslate('icon_mobile') ? $messenger->getAttributeTranslate('icon_mobile') : " " !!}</a>
            @endforeach
        @endif         
        <div class="h-line-bold"></div>
    </div>
    
    <div class="container-fluid px-sm-5">
        <div class="row text-center" >
            <div class="col">
                <h2 class="section-header-huge">{{ $main->first()->getTranslate('title') }}</h2>
                <h4 class="section-header-small">{!! $main->first()->getTranslate('short_description') !!}</h4>
                <div class="section-description">{!! $main->first()->getTranslate('description') !!}</>
            </div>
        </div>
        <div class="row justify-content-center no-gutters px-md-5 px-0" id="section-hotels" >
            @foreach($hotels as $key => $hotel) 
                <div class="col-xl-4 col-lg-6 p-2 mt-4">
                    <a href="{{ route('article_index_subdomain', [$hotel->subdomain, App::getLocale(), 'hotels/' . getIdApart($hotel->type)])}}" class="a-card">
                        <div class="apart-small-card shadow-hover">
                            <div class="small-card-image" style="background-image: url('{{ asset( $hotel->getAttributeTranslate('hotel_photo')) }}')"></div>
                            <div class="row pt-3  px-md-4 px-3">
                                <div class="col-8">
                                    <h5 class="small-hotel-header">{{ $hotel->getAttributeTranslate('type_build')}} {{ $hotel->getTranslate('title')}}</h5>
                                </div>
                            </div>
                            <div class="row pb-1  px-md-4 px-3">
                                <div class="col-4">
                                    <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> {{ $hotel->getAttributeTranslate('location')}}</p>
                                </div>
                                @if($hotel->getAttributeTranslate('marketing'))
                                    <div class="col-8 text-right">
                                        <small class="small-card-hotel">{{ $hotel->getAttributeTranslate('marketing')}}</small>
                                    </div>
                                @endif
                            </div>
                            <div class="apart-small-card-buy">
                                <p class="text-center apart-small-card-buy-hotel-p d-flex align-items-center justify-content-between discount">{{trans('base.from')}} 
                                    <span class="d-flex flex-column">
                                        @if($hotel->getAttributeTranslate('discount'))
                                            <span class="old-price-hotel-card">{{ $hotel->getAttributeTranslate('price')}}</span>
                                        @endif
                                        <strong>@if($hotel->getAttributeTranslate('discount')){{$hotel->getAttributeTranslate('price') - (($hotel->getAttributeTranslate('price') * $hotel->getAttributeTranslate('discount')) / 100)}}@else {{ $hotel->getAttributeTranslate('price')}} @endif</strong>
                                    </span> {{trans('base.grn')}}
                                </p>
                            </div>
                            <div class="apart-small-card-buy-hover apart-small-hover-hotel"><p class="d-flex justify-content-center align-items-center">{{trans('base.reservation')}}</p></div>
                            @if($hotel->getAttributeTranslate('discount'))
                                <div class="apart-small-discount-hotel">
                                    <p class="text-center py-1 text-uppercase">{{ trans('base.discount')}} {{ $hotel->getAttributeTranslate('discount')}}%</p>
                                </div>
                            @endif
                        </div>
                    </a>
                </div>                                
                @if($key == 3)
                    <div class="align-self-center fake col-xl-2 fake-left"></div>
                @endif
            @endforeach             
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