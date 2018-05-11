        <!-- .header -->
<div class="header header--internal">

    <div class="container">

        <div class="header__text header__text--internal">
            <span class="header__text-fon">{{ $categories_data[$type]->getTranslate('title') ? $categories_data[$type]->getTranslate('title') : $type }}</span>
            <h2>{{ $categories_data[$type]->getTranslate('title') ? $categories_data[$type]->getTranslate('title') : $type }}</h2>
        </div>

        @include('frontend.bottom_header')

    </div>

    <div class="header__more header__more--arrow"><span></span></div>

    <div class="inclined inclined--bottom inclined--colorBeige"></div>

    <div class="mobileMenu">
        <div class="mobileMenu__cont"></div>
        <div class="mobileMenu__button">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

</div>
<!-- END .header -->