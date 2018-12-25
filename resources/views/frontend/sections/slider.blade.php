<div class="slider-class">
    
    @if(!$subdomain)
        @foreach($slides as $slide)
            @if($slide->getAttributeTranslate('show_main_page') == 1)
                <div class="fullscreen-img d-flex align-items-center justify-content-center">
                    <h1 class="text-uppercase">                   
                        {!! str_limit($slide->getTranslate('short_description'), 100) !!}
                    </h1>
                    <picture>
                        <img data-lazy="{{ asset( $slide->getAttributeTranslate('slide_img')) }}">
                    </picture>
                </div>
            @endif
        @endforeach 

        <!-- <div class="fullscreen-img d-flex align-items-center justify-content-center">
            <h1 class="text-uppercase">                   
                SKI - апартаменты<br>
                подъемник №2
            </h1>                
            <picture>
                <source
                    media="(min-width: 900px)"
                    srcset="{{ asset('/img/274_big.jpg') }}"
                    sizes="100vw">
                <source
                    media="(min-width: 600px)"
                    srcset="{{ asset('/img/274_medium.jpg') }}"
                    sizes="100vw">
                <img
                data-lazy="{{ asset('/img/274_big.jpg') }}" alt="The Oslo Opera House">
            </picture>
        </div>
        <div class="fullscreen-img d-flex align-items-center justify-content-center">
            <h1 class="text-uppercase">                   
                в кругу близких людей
            </h1>                
            <picture>
                <source
                    media="(min-width: 900px)"
                    srcset="{{ asset('/img/275_big.jpg') }}"
                    sizes="100vw">
                <source
                    media="(min-width: 600px)"
                    srcset="{{ asset('/img/275_medium.jpg') }}"
                    sizes="100vw">
                <img
                data-lazy="{{ asset('/img/275_big.jpg') }}" alt="The Oslo Opera House">
            </picture>
        </div>
        <div class="fullscreen-img d-flex align-items-center justify-content-center">
            <h1 class="text-uppercase">   
            </h1>                
            <picture>
                <source
                    media="(min-width: 900px)"
                    srcset="{{ asset('/img/276_big.jpg') }}"
                    sizes="100vw">
                <source
                    media="(min-width: 600px)"
                    srcset="{{ asset('/img/276_medium.jpg') }}"
                    sizes="100vw">
                <img
                data-lazy="{{ asset('/img/276_big.jpg') }}" alt="The Oslo Opera House">
            </picture>
        </div>
        <div class="fullscreen-img d-flex align-items-center justify-content-center">
            <h1 class="text-uppercase">   
                собственный коттедж<br>
                на время отпуска               
            </h1>                
            <picture>
                <source
                    media="(min-width: 900px)"
                    srcset="{{ asset('/img/277_big.jpg') }}"
                    sizes="100vw">
                <source
                    media="(min-width: 600px)"
                    srcset="{{ asset('/img/277_medium.jpg') }}"
                    sizes="100vw">
                <img
                data-lazy="{{ asset('/img/277_big.jpg') }}" alt="The Oslo Opera House">
            </picture>
        </div> -->

    @else 
        @foreach($children_slides as $slide)        
            <!-- <div class="fullscreen-img d-flex align-items-center justify-content-center" style="background-image: url('{{ asset( $slide->getAttributeTranslate('slide_img')) }}')">
                <h1 class="text-uppercase">
                {!! str_limit($slide->getTranslate('short_description'), 100) !!}
                </h1>                
            </div> -->

            <div class="fullscreen-img d-flex align-items-center justify-content-center">
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