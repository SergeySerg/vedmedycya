
<ul class="menu">

    @if($categories_data['main']->active == 1)
        <li @if(Request::is(App::getLocale())) class="active" @endif><a href="/{{ App::getLocale() }}">{{ $categories_data['main']->getTranslate('title') }}</a></li>
    @endif

    @if($categories_data['about']->active == 1)
        <li @if(Request::is('*/about')) class="active" @endif><a href="/{{ App::getLocale() }}/about">{{ $categories_data['about']->getTranslate('title') }}</a></li>
    @endif

    @if($categories_data['products']->active == 1)
        <li @if(Request::is('*/products')) class="active" @endif><a href="/{{ App::getLocale() }}/products">{{ $categories_data['products']->getTranslate('title') }}</a></li>
    @endif

    @if($categories_data['partners']->active == 1)
        <li @if(Request::is('*/partners')) class="active" @endif><a href="/{{ App::getLocale() }}/partners">{{ $categories_data['partners']->getTranslate('title') }}</a></li>
    @endif

    @if($categories_data['contact']->active == 1)
        <li @if(Request::is('*/contact')) class="active" @endif><a href="/{{ App::getLocale() }}/contact">{{ $categories_data['contact']->getTranslate('title') }}</a></li>
    @endif
</ul>
