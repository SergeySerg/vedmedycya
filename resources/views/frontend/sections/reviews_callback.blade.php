@if(isset($reviews) AND count($reviews) !== 0 AND $categories_data['reviews']->active == 1)

<div class="container-fluid pb-5 back-f4f4f4">
    <div class="row text-center">
        <div class="col">
            <h2 class="section-header-huge">{{ $categories_data['reviews']->getTranslate('title')}}</h2>
            <div class="section-description">{!! $categories_data['reviews']->getTranslate('short_description') !!}</div>
            <div class="container-fluid position-relative">
                <div class="feedback-slider">
                    @foreach((!$subdomain) ? $reviews : $children_reviews as $review)
                        <div class="d-flex justify-content-center">
                            <div class="card feedback-card">
                                <div class="card-body">
                                {!! str_limit($review->getTranslate('description'), 400) !!}
                                    @if(strlen($review->getTranslate('description')) > 400)                                            
                                        <p><a href="#" class="color-ff8c00">{{ trans('base.more_detale') }}</a></p>
                                    @endif    
                                </div>
                                <div class="card-footer">
                                    @if($review->getAttributeTranslate('source'))
                                        <i class="fab fa-{{lcfirst($review->getAttributeTranslate('source'))}}-square"></i>
                                        <p class="name">{{ $review->getAttributeTranslate('name') }}
                                            <small class="text-muted">({{ trans('base.review_from') }} {{ $review->getAttributeTranslate('source') }})</small>
                                        </p>
                                    @else
                                        <p class="name">{{ $review->getAttributeTranslate('name') }}</p>
                                    @endif
                                    <p class="date">{{ $review->getAttributeTranslate('date_create_review') }}</p>
                                </div>
                                @if($review->getAttributeTranslate('profile_foto') )
                                    <div id="profile-huge" class="profile-image" style="background: url('{{ asset( $review->getAttributeTranslate('profile_foto')) }}')"></div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="feedback-arrow-left">
                    <div class="div-arrows div-a-f">
                        <div class="arrow-left f-arrow-left">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div id="feedback-arrow-right">
                    <div class="div-arrows div-a-f">
                        <div class="arrow-right f-arrow-right">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feedback-button">
                <a href="#">{{ trans('base.all_reviews') }}</a>
                <a href="#">{{ trans('base.add_review') }}</a>
            </div>
        </div>
    </div>
</div>
@endif
<div class="container-fluid px-1 back-747474">
<form>
    <div class="row justify-content-center no-gutters py-md-4 py-1">
        <div class="col-lg-2 col-md-3 my-1">
            <div class="input-pattern">
                <input type="text" placeholder="{{ trans('base.name') }}"/>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 my-1">
            <div class="input-pattern">
                <input type="tel" placeholder="{{ trans('base.phone') }}"/>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 my-1">
            <div class="input-pattern">
                <a class="btn btn-yellow get-in-touch-btn" data-toggle="modal" data-target="#exampleModal">{{ trans('base.contacts') }}</a>
            </div>
        </div>
    </div>
</form>
</div>