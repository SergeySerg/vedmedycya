        <!-- .header -->
        <nav class="navbar navbar-expand-xl navbar-light navbar-shadowed fixed-top navbar-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a id="mobile-logo" class="mx-auto" href="/{{ App::getLocale() }}"><img class="img-fluid" src="{{ asset('/img/frontend/logo.png') }}" width="100px"></a>
        <div class="navbar-side-mobile text-right dropdown">
            <a id="mobile-lang-toggler" class="font-weight-bold" href="#">
            @if(count($langs) > 1)<i class="fas fa-chevron-down mr-2"></i>@endif
                {{ getCurentLang(App::getLocale()) }}
            </a>
            <div class="dropdown-content left-6-px">
                    @foreach($langs as $key => $lang)												
							<a class="toggler-a font-weight-bold" @if(App::getLocale() == $lang->lang) style="display: none" @endif href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang->country}}</a>
							{{--@if($key !== count($langs)-2)--}}	
							{{--<div @if(App::getLocale() == $lang->lang) style="display: none" @endif class="h-line-bold marginy-4-px"></div>--}}
							{{--@endif--}}	
					@endforeach  
            </div>  
        </div>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto align-items-center text-center mt-2 mt-xl-0" id="custom-navbar">
                <div class="navbar-side-container text-left">
                    <span class="nav-link navbar-phone" href="#">
                        <div class="dropdown">
                            {{ $texts->get('tel_1') }}
                            <i class="fas fa-chevron-down ml-2"></i><br>
                            <div class="dropdown-content">
                                {{ $texts->get('tel_1') }}
                                {{ $texts->get('tel_2') }}                                
                                <div class="h-line-bold"></div>
                                @if(isset($messengers) AND count($messengers) !== 0 AND $categories_data['messengers']->active == 1)
                                    <small class="text-muted">{{ $texts->get('write_messager') }}</small><br>
                                    <div class="mb-2"></div>
                                    @foreach($messengers as $messenger)
                                        <a href="{{ $messenger->getAttributeTranslate('messenger_link') ? $messenger->getAttributeTranslate('messenger_link') : "#"}}" style=" text-decoration: none" class="{{ $messenger->getTranslate('title') }}-icon">{!! $messenger->getAttributeTranslate('icon') ? $messenger->getAttributeTranslate('icon') : " " !!} </a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <a class="btn btn-yellow-custom-little py-1 mt-1" href="#"> {{ $texts->get('reservation') }}</a>
                    </span>
                </div>
                <!-- .menu -->
	            @include('frontend.menu')
                <!-- END .menu -->
                <div class="navbar-side-container-2 text-right dropdown">
                    <a class="nav-link font-weight-bold" href="/{{ App::getLocale()}}">
                    @if(count($langs) > 1)<i class="fas fa-chevron-down mr-2"></i>@endif
                        {{ getCurentLang(App::getLocale()) }}
                    </a>
                    @if(count($langs) > 1)
                        <div class="dropdown-content">					
						@foreach($langs as $key => $lang)												
							<a class="nav-link font-weight-bold padding-4-px" @if(App::getLocale() == $lang->lang) style="display: none" @endif href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang->country}}</a>
                            @if ($loop->last)
                                Это последняя итерация.
                            @endif
                            {{--@if($key !== count($langs)-2)--}}	
							{{--<div @if(App::getLocale() == $lang->lang) style="display: none" @endif class="h-line-bold marginy-4-px"></div>--}}
							{{--@endif--}}	
						@endforeach                        
					@endif	
                    </div>   
                </div>
            </ul>
        </div>  
    </nav>
<!-- END .header --> 