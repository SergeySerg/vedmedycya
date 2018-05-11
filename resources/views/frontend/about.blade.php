@extends('ws-app')

@section('content')

<!-- .sliderPresent -->
<div class="sliderPresent">

    <div class="container">


        <div class="container__row">

            <div class="container__col">

                <div class="presenBox">
                    {!! $about[0]->getTranslate('title') !!}
                    {!! $about[0]->getTranslate('description') !!}
                </div>

            </div>

            <div class="container__col">

                <div class="slidPresen">
                    @foreach($about[0] -> getImages() as $imgProduct)
                        <div class="slidPresen__box">
                            <a href="javascript:void(0)"><img src="/{{ $imgProduct['full'] }}" alt="img" /></a>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</div>
<!-- END .sliderPresent -->



@if(isset($adcompany) AND count($adcompany) !== 0 AND $categories_data['adcompany']->active == 1)
    <!-- .inform -->
    <div class="inform">

        <div class="container">

            <div class="title"><h2>{{ $categories_data['adcompany']->getTranslate('title') ? $categories_data['adcompany']->getTranslate('title') : 'Переваги компанії' }}</h2></div>

            <div class="container__row">

                @foreach($adcompany as $adcompany_item)

                    <div class="container__col">

                        <div class="inform__box">
                            <div class="inform__icon" style="background-image: url('{{ asset( $adcompany_item->getAttributeTranslate('Іконка')) }}')"></div>
                            <h3> {{ $adcompany_item->getTranslate('title') }}</h3>
                            {!! $adcompany_item->getTranslate('short_description') !!}
                        </div>

                    </div>

                @endforeach

            </div>

        </div>

        <div class="informSlider">
            @foreach($adcompany as $adcompany_item)
                <div class="informSlider__box">
                    <div class="inform__box">
                        <div class="inform__icon" style="background-image: url('{{ asset( $adcompany_item->getAttributeTranslate('Іконка')) }}')"></div>
                        <h3>{{ $adcompany_item->getTranslate('title') }}</h3>
                        {!! $adcompany_item->getTranslate('short_description') !!}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- END .inform -->
@endif



@if(isset($team) AND count($team) !== 0 AND $categories_data['team']->active == 1)

    <!-- .command -->
    <div class="command">

        <div class="container">

            <div class="title"><h2>{{ $categories_data['team']->getTranslate('title') ? $categories_data['team']->getTranslate('title') : 'Команда' }}<span>{{ trans('base.company') }}</span></h2></div>

            <div class="commandSlider">
                @foreach($team as $item_team)
                    <div class="commandSlider__box">
                    <a href="javascript:void(0)"><img src="/{{ $item_team->getAttributeTranslate('Фото працівника') ? $item_team->getAttributeTranslate('Фото працівника') : " " }}" alt="{{ $item_team->getTranslate('title') }}" /></a>
                    <span>{{ $item_team->getTranslate('title') }}</span>
                    <i>“{{ $item_team->getAttributeTranslate('Посада') ? $item_team->getAttributeTranslate('Посада') : " " }}”</i>
                </div>
                @endforeach
            </div>

        </div>

    </div>
    <!-- END .command -->
@endif



<!-- .infoText -->
<div class="infoText">

    <div class="container">

        <div class="infoText__cont">
            {!! $about[0]->getAttributeTranslate('Текст 1') ?  $about[0]->getAttributeTranslate('Текст 1') : '' !!}
        </div>

    </div>

</div>
<!-- END .infoText -->




<!-- .partners-main -->
<div class="partners-main partners-main--min">

    <div class="inclined inclined--top inclined--colorWhite"></div>

    <div class="container">

        <div class="presenBox presenBox--white">
            {!! $about[0]->getTranslate('title') !!}
            {!! $about[0]->getAttributeTranslate('Текст 2') ?  $about[0]->getAttributeTranslate('Текст 2') : '' !!}            <a class="button" data-toggle="modal" data-target="#exampleModal" href="javascript:void(0)">{{ trans('base.detale') }}</a>
        </div>

    </div>

</div>
<!-- END .partners-main -->


@endsection