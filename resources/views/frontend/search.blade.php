@extends('ws-app')

@section('content')
<div id="main-view">
        <div class="halfscreen-img d-flex align-items-center justify-content-center" style="background-image: url('{{ asset ($search->first()->getAttributeTranslate('img_search'))}}');">
            <h1 class="pb-5 text-uppercase">
                {{ $search->first()->getAttributeTranslate('slogan1') }}
                <br class="text-divider"> 
                {{ $search->first()->getAttributeTranslate('slogan2') }}
            </h1>
        </div>
        <div class="main-form">
            <div class="container-fluid px-1">
                <div class="row no-gutters justify-content-center py-md-3 py-1 px-md-5">
                    <div class="col-lg-2 col-md-3 my-1">
                        <div id="div-datepicker" class="input-pattern">
                            <i class="fas fa-calendar-alt input-icon"></i>
                            <input type='text' data-language="{{ App::getLocale()}}" data-multiple-dates-separator=" - " class="datepicker-here cursor-pointer" id="datepicker" placeholder="Дата" readonly="readonly"/>
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
                                <p>{{ trans('base.children')}}<br/><sup>5-12 {{ trans('base.years')}}</sup></p>
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
                            <p class="children-up-to-5"><sub>{{ trans('base.free_children')}}</sub></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 my-1">
                    <div class="input-pattern">
                        <button type="submit" class="submit-button text-uppercase">{{ trans('base.check_price') }}</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- mobile_messenger -->
    @include('frontend.sections.mobile_messengers')
    <!-- END mobile_messenger -->
    
    <div class="container-fluid px-sm-5 pb-3">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge text-uppercase">{{ trans('base.search')}} {{ count((!$subdomain) ? $rooms : $children_rooms) }} {{ trans('base.count_rooms')}}</h2>
                <div class="section-description">
                    {!! $search->first()->getTranslate('short_description') !!}
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid pb-5">
        <div class="row justify-content-center pb-5">
            @foreach((!$subdomain) ? $rooms : $children_rooms as $room)
                <!-- APARTMENT CARD START -->
                <div class="col-md-11">
                    <div class="apart-card shadow-hover mb-5">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="apart-image-slider">
                                @foreach($room->getImages() as $room_img)
                                    <div class="apart-image" style="background-image:url('{{ asset( $room_img['full']) }}')"></div>
                                @endforeach
                                </div>
                                <div class="div-arrows-apart-img-slider">
                                    <div class="div-arrows p-apart-arrow">
                                        <div class="arrow-left">
                                            <div class="back-yellow"></div>
                                            <div class="back-yellow"></div>
                                        </div>
                                    </div>
                                    <div class="div-arrows n-apart-arrow">
                                        <div class="arrow-right">
                                            <div class="back-yellow"></div>
                                            <div class="back-yellow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bar-container">
                                    @if($room->getAttributeTranslate('discount_room'))
                                        <div class="price-bar">
                                            <p class="apart-old-price custom-line-throught">{{ $room->getAttributeTranslate('base_price')}}</p>
                                            <h4 class="apart-price-h">{{$room->getAttributeTranslate('base_price') - (($room->getAttributeTranslate('base_price') * $room->getAttributeTranslate('discount_room')) / 100)}}</h4>
                                            <small>{{ trans('base.grn')}} {{ trans('base.price_night')}}</small>
                                        </div>

                                        <div class="sale-bar">
                                            <h5 class="sale-text">{{ trans('base.discount')}} {{ $room->getAttributeTranslate('discount_room')}}%</h5>
                                        </div>
                                    @else
                                        <div class="price-bar">
                                            
                                            <h4 class="apart-price-h">{{ $room->getAttributeTranslate('base_price')}}</h4>
                                            <small>{{ trans('base.grn')}} {{ trans('base.price_night')}}</small>
                                        </div>                                       
                                    @endif    
                                </div>
                            </div>
                            <div class="col-lg-6 p-lg-4 p-3">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-3">
                                        <h3 class="apart-header pb-2">{{ str_limit($room->getTranslate('title'), 50) }}</h3>
                                        <small class="apart-hotel">{{ $room->article_parent->getAttributeTranslate('type_build')}} {{ $room->article_parent->getTranslate('title')}}</small>
                                    </div>
                                    <div class="col-md-3 col-6 text-md-right"><p class="text-brown-param">{{ trans('base.includes')}}: <i class="fa fa-male align-text-top text-orange"></i> х{{ $room->getAttributeTranslate('max_count_guests')}}</p></div>
                                    <div class="col-md-3 col-6 text-right"><p class="text-brown-param"><i class="fa fa-map-marker-alt align-text-top text-orange"></i> {{ $room->article_parent->getAttributeTranslate('location')}}</p></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="apart-description pt-md-3">
                                            {!! $room->article_parent->getTranslate('short_description') !!}                                        
                                        </div>
                                        @if($room->getAttributeTranslate('base_count_ guests'))
                                            <small class="apart-text-muted">*{{ trans('base.price_for_person', ['person' => $room->getAttributeTranslate('base_count_ guests')])}}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="row icons-row mt-4">
                                    <div class="col">
                                        @if($room->getAttributeTranslate('hair_droom'))                                           
                                            <i class="bb-hair-dryer" data-toggle="{{ trans('base.hair_dryer')}}" data-placement="top" title="{{ trans('base.hair_dryer')}}"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('wifi') == 1)
                                                <i class="bb-wifi-gray"  data-toggle="WIFI" data-placement="top" title="WIFI"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('fireplace') == 1)
                                                <i class="bb-fireplace" data-toggle="{{ trans('base.fireplace')}}" data-placement="top" title="{{ trans('base.fireplace')}}"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('kitchen') == 1)
                                                <i class="bb-kitchen" data-toggle="{{ trans('base.kitchen')}}" data-placement="top" title="{{ trans('base.kitchen')}}"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('bathroom') == 1)
                                            <i class="bb-shower" data-toggle="{{ trans('base.bathroom')}}" data-placement="top" title="{{ trans('base.bathroom')}}"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('fridge') == 1)        
                                            <i class="bb-refrigerator" data-toggle="{{ trans('base.fridge')}}" data-placement="top" title="{{ trans('base.fridge')}}"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('safe') == 1)
                                            <i class="bb-safe-box" data-toggle="{{ trans('base.safe')}}" data-placement="top" title="{{ trans('base.safe')}}"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('kettle') == 1)
                                            <i class="bb-electric-kettle" data-toggle="{{ trans('base.kettle')}}" data-placement="top" title="{{ trans('base.kettle')}}"></i>
                                        @endif
                                        
                                        @if($room->getAttributeTranslate('tv') == 1)
                                            <i class="bb-tv" data-toggle="TV" data-placement="top" title="TV"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('Jacuzzi') == 1)
                                            <i class="bb-jacuzzi"  data-toggle="{{ trans('base.Jacuzzi')}}" data-placement="top" title="{{ trans('base.Jacuzzi')}}"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('breakfast') == 1)
                                            <i class="fa fa-plus m-1 text-orange"></i>
                                            <i class="bb-breakfast" data-toggle="{{ trans('base.breakfast')}}" data-placement="top" title="{{ trans('base.breakfast')}}"></i>
                                        @endif
                                        @if($room->getAttributeTranslate('parking') == 1)
                                            <i class="fa fa-plus m-1 text-orange"></i>
                                            <i class="bb-parking" data-toggle="{{ trans('base.parking')}}" data-placement="top" title="{{ trans('base.parking')}}"></i>
                                        @endif 
                                        @if($room->getAttributeTranslate('coffe') == 1)
                                            <i class="fa fa-plus m-1 text-orange"></i>
                                            <i class="bb-teapot" data-toggle="{{ trans('base.coffe')}}" data-placement="top" title="{{ trans('base.coffe')}}"></i>
                                        @endif 
                                        @if($room->getAttributeTranslate('сhildren_room') == 1)
                                            <i class="fa fa-plus m-1 text-orange"></i>
                                            <i class="bb-toy-bold" data-toggle="{{ trans('base.сhildren_room')}}" data-placement="top" title="{{ trans('base.сhildren_room')}}"></i>
                                        @endif 
                                        @if($room->getAttributeTranslate('ski_storage_room') == 1)
                                            <i class="fa fa-plus m-1 text-orange"></i>
                                            <i class="bb-ski-staff" data-toggle="{{ trans('base.ski_storage_room')}}" data-placement="top" title="{{ trans('base.ski_storage_room')}}"></i>
                                        @endif 
                                        @if($room->getAttributeTranslate('bowl_ski_equipment') == 1)
                                            <i class="fa fa-plus m-1 text-orange"></i>
                                            <i class="bb-ski-dryer" data-toggle="{{ trans('base.bowl_ski_equipment')}}" data-placement="top" title="{{ trans('base.bowl_ski_equipment')}}"></i>
                                        @endif 
                                    </div>
                                </div>
                                <div class="row mt-4 align-items-end no-gutters">
                                    <!-- <div class="col-md-4">
                                        <div class="row no-gutters justify-content-center mb-md-0 mb-3">
                                            <div class="col-md-12 col-6 text-center text-md-left align-self-center">
                                                <p class="apart-old-total-price"><b class="custom-line-throught">12000 uah</b></p>
                                            </div>
                                            <div class="col-md-12 col-6 align-self-center">
                                                <h3 class="apart-total-price">9000 uah</h3>
                                            </div>
                                            <div class="col text-md-left text-center">
                                                <small class="apart-hotel">з 24.05 по 26.05 (2 ночі)</small>
                                            </div>
                                        </div>   
                                    </div> -->
                                    <div class="col-md-4 col-6 px-1"><a href="{{ route('article_show', [$room->article_parent->subdomain, App::getLocale(), 'hotels', $room->article_parent->type, $room->id])}}" class="btn btn-yellow-overline">{{ trans('base.more_')}}</a></div>
                                    <div class="col-md-4 col-6 px-1"><a href="{{ route('article_show', [$room->article_parent->subdomain, App::getLocale(), 'hotels', $room->article_parent->type, $room->id])}}" class="btn btn-yellow">{{ trans('base.order')}}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- APARTMENT CARD END -->
                <div></div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid pb-5 back-f4f4f4">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge pb-5">{{ trans('base.free_room')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center no-gutters px-md-5 px-0 pb-3">
        <?php $i = 0 ?>
            @foreach((!$subdomain) ? $rooms->random(3) : $children_rooms->random(3) as $room)
                    <!-- Типова мала карточка номеру -->
                    <div class="col-xl-4 col-lg-6 p-2 mt-4">
                        <a href="{{ route('article_show', [(!$subdomain) ? $room->article_parent->subdomain : $subdomain, App::getLocale(), 'hotels', $room->article_parent->type, $room->id])}}" class="a-card">
                            <div class="apart-small-card shadow-hover">
                                <div class="small-card-image" style="background-image: url('{{ asset( $room->getAttributeTranslate('room_photo')) }}')"></div>
                                <div class="row pt-3 mb-1 px-md-4 px-3">
                                    <div class="col-7 d-flex align-items-end">
                                        <h5 class="small-hotel-header m-0">{{ str_limit($room->getTranslate('title'), 20) }}</h5>
                                    </div>
                                    <!-- <div class="col-5 text-right">
                                        <p class="alt-dates m-0">з 05.10 по 08.10</p>
                                    </div> -->
                                </div>
                                <div class="row pb-1  px-md-4 px-3">
                                    <div class="col-7">
                                        <small class="small-card-hotel">{{ $room->article_parent->getAttributeTranslate('type_build')}} {{ $room->article_parent->getTranslate('title')}}</small>
                                    </div>
                                    <div class="col-5 text-right">
                                        <p class="location-text"><i class="fas fa-map-marker-alt color-ff8c00"></i> {{ $room->article_parent->getAttributeTranslate('location')}}</p>
                                    </div>
                                </div>
                                @if($room->getAttributeTranslate('discount_room'))
                                <div class="apart-small-card-buy d-flex flex-column justify-content-center">
                                    <p class="text-center apart-small-card-buy-hotel-p d-flex align-items-center justify-content-between">
                                        {{trans('base.from')}} 
                                        <span class="d-flex flex-column">
                                            <span class="old-price-hotel-card custom-line-throught">{{ $room->getAttributeTranslate('base_price')}}</span>
                                                <strong>
                                                    {{$room->getAttributeTranslate('base_price') - (($room->getAttributeTranslate('base_price') * $room->getAttributeTranslate('discount_room')) / 100)}}
                                                </strong>
                                            </span> 
                                            {{trans('base.grn')}}
                                    </p>
                                </div>
                            @else 
                                <div class="apart-small-card-buy d-flex flex-column justify-content-center">
                                    <p class="text-center apart-small-card-buy-hotel-p">{{trans('base.from')}} <strong>{{ $room->getAttributeTranslate('base_price')}}</strong> {{trans('base.grn')}}</p>
                                </div>

                            @endif
                            <div class="apart-small-card-buy-hover apart-small-hover-hotel">
                                <p class="d-flex justify-content-center align-items-center text-uppercase">
                                    {{trans('base.reservation')}}
                                </p>
                                </div>
                            @if($room->getAttributeTranslate('discount_room'))
                                <div class="apart-small-discount-hotel">
                                    <p class="text-center py-1 text-uppercase">{{ trans('base.discount')}} {{ $room->getAttributeTranslate('discount_room')}}%</p>
                                </div>
                            @endif
                            </div>
                        </a>
                    </div>               
                   
                    <?php $i++;
                        
                    ?>                  
            @endforeach                       

        </div>
    </div>

     <!-- callback -->
     @include('frontend.sections.callback')
    <!--  END callback -->
@endsection