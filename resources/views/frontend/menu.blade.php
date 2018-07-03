@if(isset($hotels) AND count($hotels) !== 0 AND $categories_data['hotels']->active == 1)
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#hotelsAnchor">{{ $categories_data['hotels']->getTranslate('title') ? $categories_data['hotels']->getTranslate('title') : 'готелі' }}</a>
    </li>
@endif
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#aboutAnchor">{{trans('base.about_us')}}</a>
    </li>

<li class="nav-item text-center my-xl-1">
    <a id="desktop-logo" href="{{ route('article_index', [App::getLocale()])}}"><img class="img-fluid mx-center" src="{{ asset('/img/frontend/logo.png') }}" width="140px"></a>
</li>
@if(isset($reviews) AND count($reviews) !== 0 AND $categories_data['reviews']->active == 1)
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#feedbackAnchor">{{ strstr( $categories_data['reviews']->getTranslate('title') ? $categories_data['reviews']->getTranslate('title') : 'відгуки' . ' ', ' ', true ) }}</a>
    </li>
@endif
@if(isset($contacts) AND count($contacts) !== 0 AND $categories_data['contacts']->active == 1)
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#contactAnchor">{{ $categories_data['contacts']->getTranslate('title') ? $categories_data['contacts']->getTranslate('title') : 'контакти' }}</a>
    </li>
@endif

