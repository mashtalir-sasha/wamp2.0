<section class="fixbg fixbg_bg2">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="fixbg__ttl">{!! trans('main.example_ttl') !!}</h3>
				<p class="fixbg__subttl"><span>{{ trans('main.example_txt') }}</span></p>
			</div>
		</div>
	</div>
	<form class="fixbg-form form_check">
		<input type="hidden" name="title" value="{{ trans('main.example_formTtl') }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-6">
					<div class="rline">
						<input type="text" name="business" class="fixbg-form__input" placeholder="{{ trans('main.business') }}">
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="rline">
						<input type="text" name="email" class="fixbg-form__input" placeholder="{{ trans('main.where') }}">
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="rline">
						<input type="text" name="phone" class="fixbg-form__input rfield" placeholder="{{ trans('main.how') }}">
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<button class="btn btnsubmit fixbg-form__btn">{{ trans('main.example_formBtn') }}</button>
				</div>
			</div>
		</div>
	</form>
	<a href="#analysis" class="anchor scroll-downer">
		<span class="out-downder">
			<span class="in-downer">
				<span class="object-downer"></span>
			</span>
		</span>
	</a>
</section>