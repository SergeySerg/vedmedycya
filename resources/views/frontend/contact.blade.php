@extends('ws-app')

@section('content')

        <!-- .contacts -->
<div class="contacts">

    <div class="container">

        <span class="fonText">{{ $categories_data[$type]->getTranslate('title') ? $categories_data[$type]->getTranslate('title') : 'Контакти' }}</span>

        <div class="container__row">

            <div class="container__col">

                <div class="presenBox">
                    {!! $contact[0]->getTranslate('title') !!}
                    {!! $contact[0]->getTranslate('short_description') !!}
                </div>

                <ul class="contacts__address">
                    <li><a class="address-phone">{{ $texts->get('phone') }}</a></li>
                    <li><span class="address-info">{{ $texts->get('address') }}</span></li>
                    <li><a class="address-email" href="mailto:{{ $texts->get('email') }}">{{ $texts->get('email') }}</a></li>
                </ul>

            </div>

            <div class="container__col">

                <form class="contForm" id="callback">
                    <h3>{{ trans('base.contacts') }}</h3>
                    <p>{{ trans('base.require_field') }}</p>

                    <div class="contForm__cont">
                        <div class="contForm__box"><input  required type=text name="name" placeholder="{{ trans('base.name') }}" /></div>
                        <div class="contForm__box"><input type="email" required name="email" placeholder="{{ trans('base.email') }}" /></div>
                        <div class="contForm__box"><textarea required name="text" placeholder="{{ trans('base.text') }}"></textarea></div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    </div>
                    <input type="hidden" name="url" value="/{{ App::getLocale() }}/{{ $type }}"/>
                    <button id="submit-send" class="button">{{ trans('base.send') }}</button>

                </form>

            </div>

        </div>

    </div>

</div>
<!-- END .contacts -->




<!-- .map -->
<div class="map">

    <div class="map__cont" >
        <div id="map"></div>

{{--
        <iframe src="{{ $texts->get('map') }}" frameborder="0" style="border:0" allowfullscreen></iframe>
--}}
    </div>

    <div class="inclined inclined--top inclined--colorBeige"></div>

</div>
<!-- END .map -->
<script type="text/javascript">
    var myLat = +'{{  $texts->get('lat') }}';
    var myLng = +'{{  $texts->get('lng') }}';
    var myTitle = '{{  $texts->get('company_name') }}';
    var map;
    var map1;
    var marker;
    var marker1;
    function initMap() {
        var myLatLng = {lat: myLat, lng: myLng};
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 15
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: myTitle,
            label: myTitle
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTAVfOD6zF05hgBuYCHNP6q-UFc8_gAm0&callback=initMap">
</script>

@endsection