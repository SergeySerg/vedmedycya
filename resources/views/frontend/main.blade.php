@extends('ws-app')

@section('content')

@if(isset($about) AND count($about) !== 0 AND $categories_data['about']->active == 1)
    <!-- .aboutUs-main -->
    <div class="aboutUs-main">

        <div class="container">

            <span class="verticalText">{{ $categories_data['about']->getTranslate('title') ? $categories_data['about']->getTranslate('title') : 'Про компанію' }}</span>
            <span class="fonText">{{ $categories_data['about']->getTranslate('title') }}</span>

            <div class="container__row">

                <div class="container__col">

                    <div class="presenBox">
                        {!! $about[0]->getTranslate('title') !!}
                        {!! $about[0]->getTranslate('short_description') !!}
                        <a class="button" href="/{{ App::getLocale() }}/about">{{ trans('base.detale') }}</a>
                    </div>

                </div>

                <div class="container__col">

                    <ul class="aboutUs-main__photo">
                        <li><a href="javascript:void(0)"><img src="{{ $about[0]->getAttributeTranslate('Картинка на головній №1') ?  $about[0]->getAttributeTranslate('Картинка на головній №1') : 'pictures/aboutUs-main/img-1.jpg' }}" alt="img 1" /></a></li>
                        <li><a href="javascript:void(0)"><img src="{{ $about[0]->getAttributeTranslate('Картинка на головній №2') ?  $about[0]->getAttributeTranslate('Картинка на головній №2') : 'pictures/aboutUs-main/img-2.jpg' }}" alt="img 2" /></a></li>
                        <li><a href="javascript:void(0)"><img src="{{ $about[0]->getAttributeTranslate('Картинка на головній №3') ?  $about[0]->getAttributeTranslate('Картинка на головній №3') : 'pictures/aboutUs-main/img-3.jpg' }}" alt="img 3" /></a></li>
                    </ul>

                </div>

            </div>

        </div>

    </div>
    <!-- END .aboutUs-main -->
@endif


@if(isset($advantages) AND count($advantages) !== 0 AND $categories_data['advantages']->active == 1)
    <!-- .inform -->
    <div class="inform">

        <div class="container">

            <span class="verticalText">{{ $categories_data['advantages']->getTranslate('title') ? $categories_data['advantages']->getTranslate('title') : 'ПЕРЕВАГИ' }}</span>

            <div class="container__row">

                @foreach($advantages as $advantage)

                <div class="container__col">

                    <div class="inform__box">
                        <div class="inform__icon" style="background-image: url('{{ asset( $advantage->getAttributeTranslate('Іконка')) }}')"></div>
                        <h3> {{ $advantage->getTranslate('title') }}</h3>
                        {!! $advantage->getTranslate('short_description') !!}
                    </div>

                </div>

                @endforeach


            </div>

        </div>

        <div class="informSlider">
            @foreach($advantages as $advantage)
                <div class="informSlider__box">
                <div class="inform__box">
                    <div class="inform__icon" style="background-image: url('{{ asset( $advantage->getAttributeTranslate('Іконка')) }}')"></div>
                    <h3>{{ $advantage->getTranslate('title') }}</h3>
                    {!! $advantage->getTranslate('short_description') !!}
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <!-- END .inform -->
@endif


@if(isset($directions) AND count($directions) !== 0 AND $categories_data['directions']->active == 1 AND $categories_data['products']->active == 1)
    <!-- .production-main -->
    <div class="production-main">

        <div class="container">

            <span class="verticalText">{{ $categories_data['products']->getTranslate('title') ? $categories_data['products']->getTranslate('title') : 'ПРОДУКЦІЯ' }}</span>
            <span class="fonText">{{ $categories_data['products']->getTranslate('title') ? $categories_data['products']->getTranslate('title') : 'ПРОДУКЦІЯ' }}</span>

            <div class="container__row">

                @foreach($directions as $direction)
                    <div class="container__col">
                        <a href="/{{ App::getLocale() }}/products" style="text-decoration: none">
                            <div class="prodBox">
                                <div class="prodBox__substrate"><img src="{{ $direction->getAttributeTranslate('Фон') ? $direction->getAttributeTranslate('Фон') : asset("pictures/substrate/img-1.jpg") }}" alt="GLOBAL TOBACCO" /></div>
                                {!! $direction->getTranslate('title') !!}
                                <img src="{{ $direction->getAttributeTranslate('Картинка продукту') ? $direction->getAttributeTranslate('Картинка продукту') : asset("pictures/production/img-1.png") }}" alt="GLOBAL TOBACCO" />
                                {!! $direction->getTranslate('short_description') !!}
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>

    </div>
    <!-- END .production-main -->
@endif


@if(isset($partners) AND count($partners) !== 0 AND $categories_data['partners']->active == 1)

    <!-- .partners-main -->
    <div class="partners-main">

        <div class="inclined inclined--top inclined--colorBeige"></div>
        <div class="inclined inclined--bottom inclined--colorWhite"></div>

        <div class="container">

            <span class="verticalText verticalText--white">{{ $categories_data['partners']->getTranslate('title') ? $categories_data['partners']->getTranslate('title') : 'ПАРТНЕРАМ' }}</span>

            <div class="presenBox presenBox--white">
                {!! $partners[0]->getTranslate('title') !!}
                {!! $partners[0]->getTranslate('short_description') !!}
                <a class="button" href="/{{ App::getLocale() }}/partners">{{ trans('base.detale') }}</a>
            </div>

        </div>

    </div>
    <!-- END .partners-main -->
@endif


@if(isset($opened) AND count($opened) !== 0 AND $categories_data['opened']->active == 1)
    <!-- .disposition -->
    <div class="disposition disposition--weAreOpen">

        <div class="container">

            <span class="verticalText">{{ $categories_data['opened']->getTranslate('title') ? $categories_data['opened']->getTranslate('title') : 'Ми ВІДКРИТІ' }}</span>

            <div class="container__row">

                <div class="container__col">

                    <div class="presenBox">
                        {!! $opened[0]->getTranslate('title') !!}
                        {!! $opened[0]->getTranslate('short_description') !!}                    </div>

                </div>

                <div class="container__col">

                    <div class="disposition__map"></div>

                </div>

            </div>

        </div>

    </div>
    <!-- END .disposition -->
@endif
@endsection