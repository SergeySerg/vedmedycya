<div id="selector-bar-id" class="selector-bar">
    <div class="container-fluid px-1 main-form bottom-1-vh">
        <form>
            <div class="row justify-content-center no-gutters py-md-3 py-1">
                @if(!$subdomain)        
                    <div class="col-lg-2 col-md-3 col-6 my-1">
                        <div id="pattern-location" class="input-pattern">
                            <input disabled id="location" type="text" name="location" placeholder="{{ trans('base.hotel_city') }}" readonly="readonly" class="cursor-pointer"/>
                            <i class="fas fa-map-marker-alt input-icon"></i>
                            <div id="input-drop-location" class="input-dropdown px-2">
                                @foreach($hotels as $hotel)
                                    <p class="input-location d-flex align-items-center"><span>{{ $hotel->getTranslate('title')}}<br/><sub> @if($hotel->getAttributeTranslate('location')) ({{ $hotel->getAttributeTranslate('location') }}) @else  @endif</sub></span></p>
                                @endForeach
                            </div>
                        </div>
                    </div>
                @endif
                
                <div class="col-lg-2 col-md-3 @if(!$subdomain) col-6 @endif my-1">
                    <div id="div-datepicker" class="input-pattern">
                        <i class="fas fa-calendar-alt input-icon"></i>
                        <input type='text' data-language="{{ App::getLocale() }}" data-multiple-dates-separator=" - " class="datepicker-here cursor-pointer" id="datepicker" placeholder="{{ trans('base.date')}}" readonly="readonly"/>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 my-1">
                    <div class="input-pattern">
                        <p id="guests" class="input-text">{{ trans('base.count_guestі')}}</p>
                        <i class="fas fa-male input-icon"></i>
                        <div class="input-dropdown">
                            <div class="input-members d-flex justify-content-between">
                                <p>{{ trans('base.adults')}}</p>
                                <span>
                                    <button id="adults_minus" type="button">
                                        <i class="fas fa-minus fa-lg add-member-btn"></i>
                                    </button>
                                    <input id="adults" type="number" name="adults" min="0" value="0" readonly="readonly" />
                                    <button id="adults_plus" type="button">
                                        <i class="fas fa-plus fa-lg add-member-btn"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="input-members d-flex justify-content-between">
                                <p>{{ trans('base.children')}}<br/><sup>5-12 {{ trans('base.years')}}</sup></p>
                                <span>
                                    <button id="children_minus"type="button">
                                        <i class="fas fa-minus fa-lg add-member-btn"></i>
                                    </button>
                                    <input id="children" type="number" name="children" min="0" value="0" readonly="readonly" />
                                    <button id="children_plus" type="button">
                                        <i class="fas fa-plus fa-lg add-member-btn"></i>
                                    </button>
                                </span>
                            </div>
                            <p class="children-up-to-5"><sub>{{ trans('base.free_children')}}</sub></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 my-1">
                    <div class="input-pattern">
                        <button type="submit" class="submit-button text-uppercase">{{ trans('base.check_price') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
