          
<div id="mobile-phones" class="text-center">
    <i class="fas fa-phone fa-2x my-2 color-ff8c00"></i>
    @if($texts->get('tel_1'))
        <h5 class="mt-2">
            <a href="tel:{{ str_replace([' ', '(', ')'], '', $texts->get('tel_1'))}}" class="ringo-phone-prod">{{ $texts->get('tel_1') }}</a>
            <br>
        </h5>
    @endif
    @if($texts->get('tel_2'))
        <h5 class="mb-3">
            <a href="tel:{{ str_replace([' ', '(', ')'], '', $texts->get('tel_2'))}}" class="ringo-phone-prod"> {{ $texts->get('tel_2') }}</a>
            <br>
        </h5>
    @endif
    <h6 class="mb-3">{{trans('base.write_in_messenger')}}</h6>        
    @if(isset($messengers) AND count($messengers) !== 0 AND $categories_data['messengers']->active == 1)
        @foreach($messengers as $messenger)
            <a href="{{ $messenger->getAttributeTranslate('messenger_link') ? $messenger->getAttributeTranslate('messenger_link') : "#"}}"> {!! $messenger->getAttributeTranslate('icon_mobile') ? $messenger->getAttributeTranslate('icon_mobile') : " " !!}</a>
        @endforeach
    @endif         
    <div class="h-line-bold"></div>
</div>
  