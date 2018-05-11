<!DOCTYPE HTML>
<html lang="{{ App::getLocale() }}">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0, maximum-scale=1" />

<title>
	@if($categories_data[$type]->getTranslate('meta_title'))
		{{ $categories_data[$type]->getTranslate('meta_title') }}
	@else
		GLOBAL TOBACCO INTERNATIONAL
	@endif
</title>
<meta name="description" content="@if($categories_data[$type]->getTranslate('meta_description')){{ $categories_data[$type]->getTranslate('meta_description') }} @else Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики.@endif">
<meta name="keywords" content="@if($categories_data[$type]->getTranslate('meta_keywords')){{ $categories_data[$type]->getTranslate('meta_keywords') }} @else GLOBAL TOBACCO @endif">


<link media="all" rel="stylesheet" type="text/css" href="{{ asset('/css/frontend/libs.min.css') }}" />
<link media="all" rel="stylesheet" type="text/css" href="{{ asset('/css/frontend/styles.css') }}?ver={{ $version }}" />


	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">


	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>
<body>

<div class="total-container">

@if($type == 'main')

	<!-- .header -->
	<div class="header">

		<div class="container">

			<div class="header__text">
				<span class="header__text-fon">{{ $main[0]->getTranslate('title')? $main[0]->getTranslate('title') : 'GLOBAL TOBACCO' }}</span>
				{!! $main[0]->getTranslate('short_description') ? $main[0]->getTranslate('short_description') : '<h2>GLOBAL TOBACCO</h2><h3>INTERNATIONAL</h3>' !!}
			</div>

			<div class="header__address">
				<ul>
					<li><a class="address-phone">{{ $texts->get('phone') }}</a></li>
					<li><span>{{ $texts->get('address') }}</span></li>
					<li><a class="address-email" href="mailto:{{ $texts->get('email') }}">{{ $texts->get('email') }}</a></li>
				</ul>
			</div>

			@include('frontend.bottom_header')

		</div>

		<div class="header__more"><span>{{ trans('base.more') }}</span></div>

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
	@else

	@include('frontend.header')

@endif
	@yield('content')

	<div class="hFooter"></div>

</div>

<!-- .footer -->
<footer class="footer">

	<div class="container">

		<div class="container__row">

			<div class="container__col">

				<div class="footer-logo"><a href="/{{ App::getLocale() }}"><img src="/{{ $main[0]->getAttributeTranslate('Логотип') ? $main[0]->getAttributeTranslate('Логотип') : asset("/img/frontend/logo.png") }}" alt="logo" /></a></div>

			</div>

			<div class="container__col">

				@include('frontend.menu')

			</div>

			<div class="container__col">

				<ul class="feedback">
					<li><a class="fb-phone">{{ $texts->get('phone') }}</a></li>
					<li><a class="fb-email" href="mailto:{{ $texts->get('email') }}">{{ $texts->get('email') }}</a></li>
				</ul>

			</div>

		</div>

	</div>

	<div class="footer-bottom">

		<div class="container">

			<span class="footer-info"><?php echo date("Y");?> © Global Tobacco International</span>

		</div>

	</div>

</footer>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">{{ trans('base.contacts') }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="contForm" id="callback">
					<div class="contForm__cont">
						<div class="contForm__box"><input  required type=text name="name" placeholder="{{ trans('base.name') }}" /></div>
						<div class="contForm__box"><input type="email" required name="email" placeholder="{{ trans('base.email') }}" /></div>
						<div class="contForm__box"><textarea required name="text" placeholder="{{ trans('base.text') }}"></textarea></div>
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<input type="hidden" name="url" value="/{{ App::getLocale() }}/{{ $type }}"/>
					</div>

					<button id="submit-send" class="button">{{ trans('base.send') }}</button>
				</form>
			</div>

		</div>
	</div>
</div>
<!-- END .footer -->
{{--Файл переводов--}}
<script>
	var trans = {
		'base.success': '{{ trans('base.success_send_contact') }}',
		'base.error': '{{ trans('base.error_send_contact') }}',
	};
</script>
{{--/Файл переводов--}}
{{-- JS --}}

<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('/js/frontend/jquery.min.js') }}"></script>
<script src="{{ asset('/js/frontend/libs.min.js') }}"></script>
<script src="{{ asset('/js/frontend/main.js') }}"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

{{-- /JS --}}

</body>
</html>


