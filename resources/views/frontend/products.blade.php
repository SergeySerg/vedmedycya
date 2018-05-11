@extends('ws-app')

@section('content')

        <!-- .sliderPresent -->
<div class="sliderPresent">

    <div class="container">

        <span class="fonText">{{ $categories_data[$type]->getTranslate('title') ? $categories_data[$type]->getTranslate('title') : '������ֲ�' }}</span>

        <div class="container__row">

            <div class="container__col">

                <div class="presenBox">
                    {!! $products[0]->getTranslate('title') !!}
                    {!! $products[0]->getTranslate('short_description') !!}
                </div>

            </div>

            <div class="container__col">
                <div class="slidPresen">
                    @foreach($products[0] -> getImages() as $imgProduct)
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


@if(isset($directions) AND count($directions) !== 0 AND $categories_data['directions']->active == 1)

    <!-- .production-main -->
    <div class="production-main production-main--white">

        <div class="container">

            <div class="title"><h2>{{ $categories_data['directions']->getTranslate('title') ? $categories_data['directions']->getTranslate('title') : '�������� �����������' }}{{--<span>{{ trans('base.directions') }}</span>--}}</h2></div>

            <div class="container__row">

                @foreach($directions as $direction)
                    <div class="container__col">

                        <div class="prodBox">
                            <div class="prodBox__substrate"><img src="{{ $direction->getAttributeTranslate('���') ? $direction->getAttributeTranslate('���') : asset("pictures/substrate/img-1.jpg") }}" alt="GLOBAL TOBACCO" /></div>
                            {!! $direction->getTranslate('title') !!}
                            <img src="{{ $direction->getAttributeTranslate('�������� ��������') ? $direction->getAttributeTranslate('�������� ��������') : asset("pictures/production/img-1.png") }}" alt="GLOBAL TOBACCO" />
                            {!! $direction->getTranslate('short_description') !!}
                        </div>

                    </div>
                @endforeach

             </div>

        </div>

    </div>
    <!-- END .production-main -->
@endif


    @foreach($goods as $key => $good)
        @if($good->article_parent['active'] == 1  OR !$good->article_parent)
             <!-- .boards -->
            <div class="boards">

                <div class="inclined inclined--bottomArrow inclined--colorWhite"></div>

                <div class="container">

                    <span class="fonText">0{{ $key+1 }}</span>

                    <div class="container__row">

                        <div class="container__col">

                            <div class="presenBox presenBox--white">
                                <h2>
                                    {!! $good->getTranslate('title') !!}
                                </h2>
                                {!! $good->getTranslate('short_description') !!}
                                <a class="button button--white order" data-toggle="modal" data-name="{{ $good->getTranslate('title')}}" data-id="{{ $good->id }}" data-target="#exampleModalForGoods" href="javascript:void(0)">{{ trans('base.order') }}</a>
                            </div>

                        </div>

                        <div class="container__col">

                            <div class="boardsSlider">
                                @foreach($good -> getImages() as $imgDirectionProduct)
                                    <div class="boardsSlider__box"><span><a href="javascript:void(0)"><img src="/{{ $imgDirectionProduct['min'] }}" alt="img" /></a></span></div>
                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- END .boards -->

            @if(count($good->article_children) !== 0)
                <!-- .inform -->
                <div class="inform inform--indentLess">

                    <div class="container">

                        <div class="title"><h2>{{ $categories_data['factors']->getTranslate('title') ? $categories_data['factors']->getTranslate('title') : '��ʲ���� �����в�' }}{{--<span>{{ trans('base.directions') }}</span>--}}</h2></div>

                        <div class="container__row">
                            @foreach( $good->article_children as $factor)
                                <div class="container__col">

                                    <div class="inform__box">
                                        <div class="inform__icon" style="background-image: url('{{ asset( $factor->getAttributeTranslate('Іконка')) }}')"></div>
                                        <h3>{{ $factor->getTranslate('title')}}</h3>
                                        {!!  $factor->getTranslate('short_description') !!}
                                    </div>

                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="informSlider">
                        @foreach( $good->article_children as $factor)
                            <div class="informSlider__box">
                                <div class="inform__box">
                                    <div class="inform__icon" style="background-image: url('{{ asset( $factor->getAttributeTranslate('Іконка')) }}')"></div>
                                    <h3>{{ $factor->getTranslate('title')}}</h3>
                                    {!!  $factor->getTranslate('short_description') !!}
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <!-- END .inform -->
            @endif
        @endif
    @endforeach

            <!-- Modal for Goods -->
<div class="modal fade" id="exampleModalForGoods" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('base.all_text') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="contForm" id="callback-order">
                    <div class="contForm__cont">
                        <div class="contForm__box"><input  required type=text name="name" placeholder="{{ trans('base.name') }}" /></div>
                        <div class="contForm__box"><input type="email" required name="email" placeholder="{{ trans('base.email') }}" /></div>
                        <div class="contForm__box"><textarea required name="text" placeholder="{{ trans('base.text') }}"></textarea></div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="lang" value="/{{ App::getLocale() }}"/>
                        <input type="hidden" name="id" value=""/>
                        <input type="hidden" name="goodName" value=""/>

                    </div>

                    <button id="submit-order" class="button">{{ trans('base.send') }}</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection