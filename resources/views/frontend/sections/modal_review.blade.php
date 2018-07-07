<!-- Модальне вікно відгуку -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id='add_review'>
            <div class="modal-dialog" role="document">
                <div class="modal-content no-rounds">
                    <div class="container-fluid px-0">
                        <div class="row justify-content-center my-4 px-4">
                            <div class="col text-center">
                                <h5 class="section-header-huge pt-0 mb-0">залиште свій відгук про відпочинок!</h5>
                            </div>
                        </div>
                        <div class="row text-center py-4 px-4 no-gutters back-f4f4f4">
                            <!-- <div class="col-md-6 my-1">
                                <div class="input-pattern">
                                    <input type="text" placeholder="Прізвище"/>
                                </div>
                            </div> -->
                            <div class="col-md-6 my-1">
                                <div class="input-pattern">
                                    <input type="text" name='name' placeholder="Ім'я"/>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col px-5">
                                @if($revsettings->first()->getAttributeTranslate('is_cleanness'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.cleanness')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="cleanness"></div>
                                    </div>
                                @endif
                                @if($revsettings->first()->getAttributeTranslate('is_сosiness'))    
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.сosiness')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="сosiness"></div>

                                    </div>
                                @endif 
                                @if($revsettings->first()->getAttributeTranslate('is_location'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.location')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="location"></div>

                                    </div>
                                @endif 
                                @if($revsettings->first()->getAttributeTranslate('is_food'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.food')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="food"></div>
                                    </div>
                                @endif
                                @if($revsettings->first()->getAttributeTranslate('is_wifi'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">WIFI</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="wifi"></div>
                                    </div>
                                @endif
                                @if($revsettings->first()->getAttributeTranslate('is_price_quality'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.price_quality')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="price_quality"></div>

                                    </div>
                                @endif
                                @if($revsettings->first()->getAttributeTranslate('is_family_hotel'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.family_hotel')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="family_hotel"></div>

                                    </div>
                                @endif
                                @if($revsettings->first()->getAttributeTranslate('is_rest_children'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.rest_children')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="rest_children"></div>

                                    </div>
                                @endif
                                @if($revsettings->first()->getAttributeTranslate('is_young'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.young')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="young"></div>
                                    </div>
                                @endif
                                @if($revsettings->first()->getAttributeTranslate('is_polite'))
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="section-text-small m-0 pt-2">{{ trans('base.polite')}}</p>
                                        <div class="raty pt-2 color-ff8c00" data-scorename="polite"></div>

                                    </div>
                                @endif
                            </div>
                        </div>                    
                        <div class="row text-center py-4 px-4 no-gutters back-f4f4f4">
                            <div class="col my-1">
                                <textarea rows="3" name='review' placeholder="Опишіть ваші враження" class="impression-input" wrap="soft"></textarea>
                            </div>
                        </div>
                        <input type='hidden' name='article_id' value='{{ $parent_hotel->id or ''}}'/>
                        <div class="row  justify-content-center my-3">
                            <div class="col-md-6 col-10">
                                <button type="button" id='send_review' class="btn btn-yellow" data-dismiss="modal">Відправити відгук</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>