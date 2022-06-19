<section id="contacts" class="contacts">
	<div class="contacts-block">
		<div class="contacts__ttl">{{ trans('main.contacts_ttl') }}</div>
		<p class="contacts__addr">{!! Helpers::getLangString($contacts, 'addr') !!}</p>
		<a href="mailto:{{ $contacts->email }}" class="contacts__eml">{{ $contacts->email }}</a>
		<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone']) }}" class="contacts__phone">{{ $contacts->phone }}</a>
		<span class="contacts__note">Viber/WhatsApp</span>
		<div class="contacts-soc">
			@if( isset($contacts->facebook) )
			<a href="{{ $contacts->facebook }}" target="_blank" class="contacts-soc__link fb"></a>
			@endif
			@if( isset($contacts->linkedin) )
			<a href="{{ $contacts->linkedin }}" target="_blank" class="contacts-soc__link linked"></a>
			@endif
			@if( isset($contacts->youtube) )
			<a href="{{ $contacts->youtube }}" target="_blank" class="contacts-soc__link youtube"></a>
			@endif
		</div>
	</div>
	<div id="contacts_map">
		{!! $contacts->map !!}
	</div>
</section>

<footer class="foot">
	<div class="container">
		<div class="row">
			<div class="col-md-4 order-2 order-md-1">
				<a href="https://www.google.com/partners/agency?id=1871712672" rel="nofollow" class="foot-link" target="_blank"><img src="/img/partners.png" alt="Google Partners - WAMP"></a>
				<a href="https://www.facebook.com/business/partner-directory/search?solution_type=campaign_management&id=4907016205998748&section=overview" rel="nofollow" class="foot-link" target="_blank"><img src="/img/facebook-marketing-partner.png" alt="Facebook Partners - WAMP"></a>
			</div>
			<div class="col-md-4 order-1 order-md-2">
				<div class="foot-logo">
					<span class="foot-logo__note">web | advertising | marketing</span>
					<img src="/img/logo.svg" alt="logo" class="foot-logo__img">
				</div>
				<script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script>
				<div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="2" data-height="50" data-darkbg="1" data-clutchcompany-id="762173" style="display:block;margin:40px 70px"></div>
				<a id="href2" rel="nofollow" target="_blank" href="http://www.2findlocal.com/b/13988869"></a>
				<!-- TrustBox widget - Micro Review Count -->
				<div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="60e406df4f5f3b0001199ef5" data-style-height="24px" data-style-width="100%" data-theme="dark">
					<a href="https://www.trustpilot.com/review/wamp.com.ua" rel="nofollow" target="_blank" rel="noopener">Trustpilot</a>
				</div>
			</div>
			<div class="col-md-4 order-3">
				<a href="#callback" class="foot__btn fancybox">{{ trans('main.callback') }}</a>
				<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone']) }}" class="foot__phone">{{ $contacts->phone }}</a>
				<a href="http://docs.wamp.com.ua/privacy.pdf" target="_blank" class="foot__conf">{{ trans('main.privacy') }}</a>
			</div>
		</div>
	</div>
</footer>