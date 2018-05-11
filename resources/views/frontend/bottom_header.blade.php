<div class="container__row">

    <div class="container__col">

        <div class="logo"><a href="/{{ App::getLocale() }}"><img src="{{ $main[0]->getAttributeTranslate('Логотип') ? $main[0]->getAttributeTranslate('Логотип') : asset("/img/frontend/logo.png") }}" alt="logo" /></a></div>

    </div>

    <div class="container__col">

        @include('frontend.menu')

    </div>

    <div class="container__col">

        <div class="languages">
            <span>{{ App::getLocale() }}</span>
            <ul>
                @foreach($langs as $lang)
                    <li @if(App::getLocale() == $lang->lang ) style="display: none" @endif><a href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang->lang}}</a></li>
                @endforeach
            </ul>
        </div>

    </div>

</div>