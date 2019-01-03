<div class="slider-class">
    
    @if(!$subdomain)
        @foreach($slides as $slide)
            @if($slide->getAttributeTranslate('show_main_page') == 1)
                <div class="fullscreen-img d-flex align-items-center justify-content-center lazy_slider_text">
                    <h1 class="text-uppercase">                   
                        {!! str_limit($slide->getTranslate('short_description'), 100) !!}
                    </h1>
                    <picture>
                        <img data-lazy="{{ asset( $slide->getAttributeTranslate('slide_img')) }}">
                    </picture>
                </div>
            @endif
        @endforeach 

    @else 
        @foreach($children_slides as $slide)        

            <div class="fullscreen-img d-flex align-items-center justify-content-center lazy_slider_text">
                <h1 class="text-uppercase">                   
                    {!! str_limit($slide->getTranslate('short_description'), 100) !!}
                </h1>
                <picture>
                    <img data-lazy="{{ asset( $slide->getAttributeTranslate('slide_img')) }}">
                </picture>
            </div>

        @endforeach
    @endif               
</div>
<nav class="main-dots d-flex justify-content-center"></nav>
    <div id="p-arrow">
        <div class="arrow-left main-arrow-left">
            <div></div>
            <div></div>
        </div>
    </div>
    <div id="n-arrow">
        <div class="arrow-right main-arrow-right">
            <div></div>
            <div></div>
        </div>
    </div>