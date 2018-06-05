<li class="nav-item">
    <a class="nav-link my-1 hover-underline" href="№">{{ $categories_data['hotels']->getTranslate('title') ? $categories_data['hotels']->getTranslate('title') : 'готелі' }}</a>
</li>
<li class="nav-item">
    <a class="nav-link my-1 hover-underline" href="#"> {{ $texts->get('about_us') }}</a>
</li>
<li class="nav-item text-center my-xl-1">
    <a id="desktop-logo" href="/{{ App::getLocale() }}"><img class="img-fluid mx-center" src="{{ asset('/img/frontend/logo.png') }}" width="140px"></a>
</li>
<li class="nav-item">
    <a class="nav-link my-1 hover-underline" href="#">{{ $categories_data['reviews']->getTranslate('title') ? $categories_data['reviews']->getTranslate('title') : 'відгуки' }}</a>
</li>
<li class="nav-item">
    <a class="nav-link my-1 hover-underline" href="#">{{ $categories_data['contacts']->getTranslate('title') ? $categories_data['contacts']->getTranslate('title') : 'контакти' }}</a>
</li>

