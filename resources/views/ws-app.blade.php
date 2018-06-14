<!doctype html>
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

    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon.png') }}">
	<!-- <link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.png') }}" >
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}"> -->


<link rel="stylesheet" href="{{ asset('/css/frontend/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/frontend/slick-theme.css') }}">
    <link href="{{ asset('/css/frontend/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/frontend/style.css') }}">   
    <script defer src="{{ asset('/js/frontend/fontawesome-all.js') }}"></script>

</head>
<body>
	<!-- .header -->
	@include('frontend.header')
    <!-- END .header -->
    <!-- content -->
    @yield('content')
    <!-- content -->

    <footer class="black-footer py-md-4 py-0" id='section-footer'>
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
                        <a href="#section-reviews" class="text-white">{{ $categories_data['reviews']->getTranslate('title') ? $categories_data['reviews']->getTranslate('title') : 'відгуки' }}</a><br>
                    @endif
                    @if(isset($contacts) AND count($contacts) !== 0 AND $categories_data['contacts']->active == 1)
                        <a class="text-white"  href="#section-footer">{{ $categories_data['contacts']->getTranslate('title') ? $categories_data['contacts']->getTranslate('title') : 'контакти' }}</a><br>
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
                            <a href="{{ route('article_index_subdomain', [$hotel->subdomain, App::getLocale(), 'hotels' . getIdApart($hotel->type), (getIdApart($hotel->type)) ? '' : $hotel->type])}}" class="text-white">{{ $hotel->getTranslate('title')}}</a><br>                            
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
<script defer src="{{ asset('/js/frontend/jquery-3.3.1.min.js') }}"></script>
<script defer src="{{ asset('/js/frontend/popper.min.js') }}"></script>
<script defer src="{{ asset('/js/frontend/bootstrap.min.js') }}"></script>
<script defer src="{{ asset('/js/frontend/datepicker.min.js') }}"></script>
<script defer src="{{ asset('/js/frontend/datepicker.ua.js') }}"></script>
<script defer src="{{ asset('/js/frontend/datepicker.en.js') }}"></script>
<script defer src="{{ asset('/js/frontend/slick.min.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script defer src="{{ asset('/js/frontend/main.js') }}"></script>


{{-- /JS --}}

</body>
</html>
