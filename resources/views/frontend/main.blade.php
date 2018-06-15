@extends('ws-app')

@section('content')

 <div id="main-slider">
    <!-- slider -->
        @include('frontend.sections.slider')
    <!-- END slider -->    
    <!-- form for find -->
         @include('frontend.sections.form_find')
    <!-- END form for find -->   
</div>    
    <!-- mobile_messenger -->
        @include('frontend.sections.mobile_messengers')
    <!-- END mobile_messenger -->    
    <div class="container-fluid px-sm-5">
        <div class="row text-center">
            <div class="col">
                <h2 class="section-header-huge">{{ $main->first()->getTranslate('title') }}</h2>
                <h4 class="section-header-small">{{ $main->first()->getAttributeTranslate('location')}}</h4>
                <div class="section-description">{!! $main->first()->getTranslate('description') !!}</div>
            </div>
        </div>
        <div class="row justify-content-center no-gutters px-md-5 px-0">
        <?php $i = 0 ?>
        @foreach($hotels as $key => $hotel)
        
            <div class="col-xl-4 col-lg-6 p-2 mt-4">
                <a href="{{ route('article_index_subdomain', [$hotel->subdomain, App::getLocale(), 'hotels' . getIdApart($hotel->type), (getIdApart($hotel->type)) ? '' : $hotel->type])}}" class="a-card">
                    <div class="apart-small-card shadow-hover">
                        <div class="small-card-image" style="background-image: url('{{ asset( $hotel->getAttributeTranslate('hotel_photo')) }}')"></div>
                        <div class="row pt-3  px-md-4 px-3">
                            <div class="col">
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
                        @if($hotel->getAttributeTranslate('discount'))
                            <div class="apart-small-card-buy d-flex flex-column justify-content-center">
                                <p class="text-center apart-small-card-buy-hotel-p d-flex align-items-center justify-content-between">
                                    {{trans('base.from')}} 
                                    <span class="d-flex flex-column">
                                        <span class="old-price-hotel-card">{{ $hotel->getAttributeTranslate('price')}}</span>
                                            <strong>
                                                {{$hotel->getAttributeTranslate('price') - (($hotel->getAttributeTranslate('price') * $hotel->getAttributeTranslate('discount')) / 100)}}
                                            </strong>
                                        </span> 
                                        {{trans('base.grn')}}
                                </p>
                            </div>
                        @else 
                            <div class="apart-small-card-buy d-flex flex-column justify-content-center">
                                <p class="text-center apart-small-card-buy-hotel-p">{{trans('base.from')}} <strong>{{ $hotel->getAttributeTranslate('price')}}</strong> {{trans('base.grn')}}</p>
                            </div>

                        @endif
                        <div class="apart-small-card-buy-hover apart-small-hover-hotel">
                            <p class="d-flex justify-content-center align-items-center text-uppercase">
                                {{trans('base.reservation')}}
                            </p>
                            </div>
                        @if($hotel->getAttributeTranslate('discount'))
                            <div class="apart-small-discount-hotel">
                                <p class="text-center py-1 text-uppercase">{{ trans('base.discount')}} {{ $hotel->getAttributeTranslate('discount')}}%</p>
                            </div>
                        @endif
                    </div>
                </a>
            </div>
            @if($i == 2)
                <div class="align-self-center fake col-xl-2 fake-left"></div>
            @endif
            <?php $i++ ?>
        @endforeach
                       
            <div class="align-self-center fake col-xl-2 fake-right"></div>
        </div>
    </div>    
    @if($main->first()->getAttributeTranslate('slogan'))
        <div class="container-fluid">
            <div class="row justify-content-center px-md-5 px-0 text-center">
                <div class="col">
                    <h2 class="section-header-huge section-number-include">{{ trans('base.under') }} <span id="giant-number">9821</span> {{ trans('base.guests') }}</h2>
                    <div class="section-description text-lowercase">{!! $main->first()->getAttributeTranslate('slogan') !!}</div>
                </div>
            </div>
        </div>
    @endif
    <div class="container-fluid py-sm-5 py-3 back-f4f4f4">
        <div id="feature" class="row no-gutters text-center">
                @foreach($advantages->take(4) as $advantage)
                    @if($advantage->getAttributeTranslate('show_main_page') == 1)
                        <div class="col-md-3 col-6 py-2 my-2">
                            {!! $advantage->getAttributeTranslate('icon') !!}
                            <h5 class="feature-text">{!! $advantage->getTranslate('title') !!}</h5>
                        </div>
                    @endif                   
                @endforeach
        </div>        
        
    </div>
    <!-- marketings -->
        @include('frontend.sections.marketings')
    <!--  END marketings -->
    <!-- reviews_callback -->
        @include('frontend.sections.reviews')
    <!--  END reviews_callback -->
    <!-- callback -->
        @include('frontend.sections.callback')
    <!--  END callback -->

   

@endsection