@php
if(isset($_GET['utm_source'])){$utm_source=$_GET['utm_source'];setcookie("utm_source",$utm_source,time()+3600*24*30, "/", "wamp.com.ua");}
if(isset($_GET['utm_medium'])){$utm_medium=$_GET['utm_medium'];setcookie("utm_medium",$utm_medium,time()+3600*24*30, "/", "wamp.com.ua");}
if(isset($_GET['utm_term'])){$utm_term=$_GET['utm_term'];setcookie("utm_term",$utm_term,time()+3600*24*30);}
if(isset($_GET['utm_content'])){$utm_content=$_GET['utm_content'];setcookie("utm_content",$utm_content,time()+3600*24*30, "/", "wamp.com.ua");}
if(isset($_GET['utm_campaign'])){$utm_campaign=$_GET['utm_campaign'];setcookie("utm_campaign",$utm_campaign,time()+3600*24*30, "/", "wamp.com.ua");}
if(isset($_GET['yclid'])){$yclid=$_GET['yclid'];setcookie("yclid",$yclid,time()+3600*24*30, "/", "wamp.com.ua");setcookie("gclid",$gclid,time()-3600*24*30, "/", "wamp.com.ua");}
if(isset($_GET['gclid'])){$gclid=$_GET['gclid'];setcookie("gclid",$gclid,time()+3600*24*30, "/", "wamp.com.ua");setcookie("yclid",$yclid,time()-3600*24*30, "/", "wamp.com.ua");}
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	@yield('opengraph')

	<link rel="shortcut icon" href="img/favicon/16.png" type="image/x-icon">
	<link rel="icon" href="/img/favicon/16.png" type="image/x-icon"> 
	<link rel="apple-touch-icon" href="/img/favicon/16.png">
	<link rel="apple-touch-icon" sizes="32x32" href="/img/favicon/32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/72.png"> 
	<meta name="theme-color" content="#F9AE00">

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

	<script data-ad-client="ca-pub-7167600760091236" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End TrustBox script -->

	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MKC37VB');</script>
    <!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKC37VB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="content">

@yield('content')

</div>

<div class="d-none">

	<div id="modal1" class="modal">
		<h3 class="modal__ttl">{!! trans('main.modal1_ttl') !!}</h3>
		<h4 class="modal__subttl">{{ trans('main.modal1_subttl') }}</h4>
		<p class="modal__txt">{{ trans('main.modal1_txt') }}</p>
		<form class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.modal1_formTtl') }}">
			<input type="hidden" name="lang" value="{{ app()->getLocale() }}">
			<input type="hidden" name="page" value="{{ Request::url() }}">
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone_tg') }}">
			</div>
			<button class="modal-form__btn btn btnsubmit">{{ trans('main.submit') }}</button>
		</form>
	</div>
	
	<div id="modal2" class="modal">
		<h3 class="modal__ttl">{!! trans('main.modal2_ttl') !!}</h3>
		<h4 class="modal__subttl">{{ trans('main.modal2_subttl') }}</h4>
		<form class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.modal2_formTtl') }}">
			<input type="hidden" name="lang" value="{{ app()->getLocale() }}">
			<input type="hidden" name="page" value="{{ Request::url() }}">
			<input type="hidden" name="price">
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone_tg') }}">
			</div>
			<button class="modal-form__btn btn btnsubmit">{{ trans('main.modal2_formBtn') }}</button>
		</form>
	</div>

	<div id="modal3" class="modal">
		<h3 class="modal__ttl">{!! trans('main.modal3_ttl') !!}</h3>
		<h4 class="modal__subttl">{{ trans('main.modal3_subttl') }}</h4>
		<form class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.modal3_formTtl') }}">
			<input type="hidden" name="lang" value="{{ app()->getLocale() }}">
			<input type="hidden" name="page" value="{{ Request::url() }}">
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone_tg') }}">
			</div>
			<button class="modal-form__btn btn btnsubmit">{{ trans('main.submit') }}</button>
		</form>
	</div>

	<div id="modal4" class="modal">
		<h4 class="modal__txt">{{ trans('main.modal4_txt') }}</h4>
		<h3 class="modal__ttl">{!! trans('main.modal4_ttl') !!}</h3>
		<h4 class="modal__subttl">{{ trans('main.modal4_subttl') }}</h4>
		<form class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.modal4_formTtl') }}">
			<input type="hidden" name="lang" value="{{ app()->getLocale() }}">
			<input type="hidden" name="page" value="{{ Request::url() }}">
			<div class="rline rline_w50">
				<input type="text" name="service" class="modal-form__input rfield" placeholder="{{ trans('main.service_place') }}">
			</div>
			<div class="rline rline_w50">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone_tg') }}">
			</div>
			<button class="modal-form__btn modal-form__btn_w100 btn btnsubmit">{{ trans('main.submit') }}</button>
		</form>
	</div>

	<div id="callback" class="modal">
		<h3 class="modal__ttl">{!! trans('main.callback_ttl') !!}</h3>
		<h4 class="modal__subttl">{{ trans('main.callback_subttl') }}</h4>
		<form class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.callback_formTtl') }}">
			<input type="hidden" name="lang" value="{{ app()->getLocale() }}">
			<input type="hidden" name="page" value="{{ Request::url() }}">
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone_tg') }}">
			</div>
			<button class="modal-form__btn btn btnsubmit">{{ trans('main.callback_btn') }}</button>
		</form>
	</div>

	<div id="marketolog" class="modal modal_marketolog">
		<h3 class="modal__ttl">{!! trans('main.marketolog_ttl') !!}</h3>
		<h4 class="modal__subttl">{{ trans('main.marketolog_subttl') }}</h4>
		<p class="modal__txt">{!! trans('main.marketolog_txt') !!}</p>
		<form class="modal-form form_check">
			<input type="hidden" name="title" value="{{ trans('main.marketolog_formTtl') }}">
			<input type="hidden" name="lang" value="{{ app()->getLocale() }}">
			<input type="hidden" name="page" value="{{ Request::url() }}">
			<div class="rline">
				<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone_tg') }}">
			</div>
			<button class="modal-form__btn btn btnsubmit">{{ trans('main.marketolog_formBtn') }}</button>
		</form>
	</div>

	<div id="thn" class="thn">
		<h3 class="thn__ttl">{{ trans('main.thn_ttl') }}</h3>
		<p class="thn__txt">{{ trans('main.thn_txt') }}</p>
	</div>
	
</div>

<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

<!-- WhatsHelp.io widget -->
<script>
  (function(d, s, id, companyId) {
    var js, sjs = d.getElementsByTagName(s)[0];
    js = d.createElement(s);
    js.id = id;
    js.src = "https://widget.sender.mobi/connect/loader.js";
    js.setAttribute('data-company-id', companyId);
    sjs.parentNode.insertBefore(js, sjs);
  })(document, "script", "sender-connect", "i77056443234");
</script>
<!-- /WhatsHelp.io widget -->

</body>
</html>