@if(isset($marketings) AND count($marketings) !== 0 AND $categories_data['marketings']->active == 1)
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col padding-0 marketing_block">
                <h2 class="section-header-huge">{{ $categories_data['marketings']->getTranslate('title')}}</h2>
                <div class="section-description">{!! $categories_data['marketings']->getTranslate('short_description') !!}</div>
                <div class="rest-slider px-3">
                    @if(!$subdomain)
                        @foreach($marketings as $marketing)                        
                            @if($marketing->getAttributeTranslate('show_main_page') AND $marketing->getAttributeTranslate('show_main_page') == 1)
                                <div class="pt-4">
                                    <div class="rest-image rest-image_r">
                                        <picture>
                                            <img data-lazy="{{ asset( $marketing->getAttributeTranslate('marketing_img')) }}">
                                        </picture>
                                        <!-- <div class="left-click"></div>
                                        <div class="right-click"></div> -->
                                    </div>
                                    <div class="rest-details rest-details_r">
                                        <h4 class="text-uppercase">{{ $marketing->getTranslate('title')}}</h4>
                                        {!! $marketing->getTranslate('short_description') !!}                       
                                    </div>
                                </div> 
                            @endif                    
                        @endforeach                   
                    @else
                        @if(isset($children_marketings) AND $children_marketings)
                            @foreach($children_marketings as $marketing)                       
                                <div class="pt-4">
                                    <div class="rest-image rest-image_r">
                                        <picture>
                                            <img data-lazy="{{ asset( $marketing->getAttributeTranslate('marketing_img')) }}">
                                        </picture>
                                        <div class="left-click"></div>
                                        <div class="right-click"></div>
                                    </div>
                                    <div class="rest-details rest-details_r">
                                        <h4 class="text-uppercase">{{ $marketing->getTranslate('title')}}</h4>
                                        {!! $marketing->getTranslate('short_description') !!}                       
                                    </div>
                                </div> 
                            @endforeach 
                        @endif
                    @endif

                </div>
                <div id="p-arrow" class="p-arrow">
                    <div class="arrow-left arrow-left_r marketing-arrow-left">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div id="n-arrow" class="n-arrow">
                    <div class="arrow-right arrow-right_r marketing-arrow-right">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <nav class="rest-dots"></nav>
            </div>
        </div>
    </div>   
    @endif  