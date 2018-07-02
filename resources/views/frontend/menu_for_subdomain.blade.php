    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="{{ route('article_index_subdomain', [$subdomain, App::getLocale()])}}">{{ trans('base.main') }}</a>
    </li>
@if(isset($servicespaid) AND count($servicespaid) !== 0 AND $categories_data['servicespaid']->active == 1)
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#section-reviews">{{ strstr( $categories_data['servicespaid']->getTranslate('title') ? $categories_data['servicespaid']->getTranslate('title') : 'послуги' . ' ', ' ', true ) }}</a>
    </li>
@endif
@if(isset($reviews) AND count($rooms) !== 0 AND $categories_data['rooms']->active == 1)
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#">{{ $categories_data['rooms']->getTranslate('title') ? $categories_data['rooms']->getTranslate('title') : 'номери'}}</a>
    </li>
@endif
<li class="nav-item text-center my-xl-1">
    <a id="desktop-logo" href="{{ route('article_index', [App::getLocale()])}}"><img class="img-fluid mx-center" src="{{ asset('/img/frontend/logo.png') }}" width="140px"></a>
</li>
@if(isset($reviews) AND count($reviews) !== 0 AND $categories_data['reviews']->active == 1)
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#">{{ strstr( $categories_data['reviews']->getTranslate('title') ? $categories_data['reviews']->getTranslate('title') : 'відгуки' . ' ', ' ', true ) }}</a>
    </li>
@endif
@if(isset($discounts) AND count($discounts) !== 0 AND $categories_data['discounts']->active == 1)
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#">{{ $categories_data['discounts']->getTranslate('title') ? $categories_data['discounts']->getTranslate('title') : 'акції' }}</a>
    </li>
@endif
@if(isset($contacts) AND count($contacts) !== 0 AND $categories_data['contacts']->active == 1)
    <li class="nav-item">
        <a class="nav-link my-1 hover-underline" href="#">{{ $categories_data['contacts']->getTranslate('title') ? $categories_data['contacts']->getTranslate('title') : 'контакти' }}</a>
    </li>
@endif
