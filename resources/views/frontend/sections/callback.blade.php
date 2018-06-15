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
                    <a class="btn btn-yellow get-in-touch-btn" {{--data-toggle="modal"--}} data-target="#exampleModal">{{ trans('base.contacts') }}</a>
                </div>
            </div>
        </div>
    </form>
</div>