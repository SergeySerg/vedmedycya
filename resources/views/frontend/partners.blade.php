@extends('ws-app')

@section('content')

        <!-- .disposition -->
<div class="disposition">

    <div class="container">

        <span class="fonText">{{ $categories_data[$type]->getTranslate('title') ? $categories_data[$type]->getTranslate('title') : 'Партнерам' }}</span>

        <div class="container__row">

            <div class="container__col">

                <div class="presenBox">
                    {!! $partners[0]->getTranslate('title') !!}
                    {!! $partners[0]->getTranslate('description') !!}
                    <a class="button" data-toggle="modal" data-target="#exampleModal" href="javascript:void(0)">{{ trans('base.more_detale') }}</a>
                </div>

            </div>

            <div class="container__col">

                <div class="disposition__map"></div>

            </div>

        </div>

    </div>

</div>
<!-- END .disposition -->
@endsection