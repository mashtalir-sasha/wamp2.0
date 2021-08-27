<nav class="nav">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="nav-btn d-lg-none">
				<button class="nav-toggle">
					<span class="bar-top"></span>
					<span class="bar-mid"></span>
					<span class="bar-bot"></span>
				</button>
			</div>  
			<a href="{{ route('home') }}" class="nav-logo">
				<span class="nav-logo__note">web | advertising | marketing</span>
				<img src="/img/logo.svg" alt="logo" class="nav-logo__img">
			</a>
			<div class="col-lg-5 d-none d-lg-block">
				<ul class="nav-list">
					<li class="nav-list__item @if(Route::currentRouteName() == 'home') active @endif">
						<a href="{{ route('home') }}">{{ trans('main.nav1') }}</a>
					</li>
					<li class="nav-list__item nav-list__item_nohover">
						<a href="#" class="services-link">{{ trans('main.nav2') }} <i>></i></a>
						<ul class="dropdown-list">
						@foreach($services as $item)
							<li class="dropdown-list__item">
								@if($item->is_anchor == 1)
								<a href="{{ route('service', $item->page->slug) }}#service{{$item->id}}">{{ mb_strimwidth( Helpers::getLangString($item,'title'), 0, 39, "..." ) }}</a>
								@else
								<a href="{{ route('service', $item->page->slug) }}">{{ mb_strimwidth( Helpers::getLangString($item,'title'), 0, 39, "..." ) }}</a>
								@endif
							</li>
						@endforeach
						</ul>
					</li>
					<li class="nav-list__item">
						<a @if(Route::currentRouteName() == 'home') href="#cases" class="anchor" @else href="{{ route('home') }}#cases" @endif>{{ trans('main.nav3') }}</a>
					</li>
					<li class="nav-list__item @if(Route::currentRouteName() == 'portfolio') active @endif">
						<a href="{{ route('portfolio') }}">{{ trans('main.nav4') }}</a>
					</li>
					<li class="nav-list__item">
						<a @if(Route::currentRouteName() == 'home') href="#about" class="anchor" @else href="{{ route('home') }}#about" @endif>{{ trans('main.nav5') }}</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-5 align-items-center justify-content-end flex-wrap d-none d-lg-flex">
				<ul class="nav-list">
					<li class="nav-list__item">
						<a href="https://blog.wamp.com.ua" target="_blank">{{ trans('main.nav6') }}</a>
					</li>
					<li class="nav-list__item">
						<a @if(Route::currentRouteName() == 'home') href="#contacts" class="anchor" @else href="{{ route('home') }}#contacts" @endif>{{ trans('main.nav7') }}</a>
					</li>
				</ul>
				<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone']) }}" class="nav__phone">{{ $contacts->phone }}</a>
				<div class="nav-btns">
					<div class="nav-lang">
						<a @if(localization()->getCurrentLocale() == 'ru') class="nav-lang__item active" @else href="{{ localization()->getLocalizedURL('ru') }}" class="nav-lang__item" @endif>ru</a>
						<a @if(localization()->getCurrentLocale() == 'en') class="nav-lang__item active" @else href="{{ localization()->getLocalizedURL('en') }}" class="nav-lang__item" @endif>en</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<nav class="nav-mob d-flex d-lg-none">
	<div class="nav-mob__content">
		<ul class="nav-list">
			<li class="nav-list__item">
				<a href="{{ route('home') }}" class="anchor">{{ trans('main.nav1') }}</a>
			</li>
			<li class="nav-list__item nav-list__item_nohover">
				<a href="#" class="services-link">{{ trans('main.nav2') }} <i>></i></a>
				<ul class="dropdown-list">
				@foreach($services as $item)
					<li class="dropdown-list__item">
						<a href="{{ route('service', $item->page->slug) }}">{{ mb_strimwidth( Helpers::getLangString($item,'title'), 0, 39, "..." ) }}</a>
					</li>
				@endforeach
				</ul>
			</li>
			<li class="nav-list__item">
				<a @if(Route::currentRouteName() == 'home') href="#cases" class="anchor" @else href="{{ route('home') }}#cases" @endif>{{ trans('main.nav3') }}</a>
			</li>
			<li class="nav-list__item">
				<a href="{{ route('portfolio') }}">{{ trans('main.nav4') }}</a>
			</li>
			<li class="nav-list__item">
				<a @if(Route::currentRouteName() == 'home') href="#about" class="anchor" @else href="{{ route('home') }}#about" @endif>{{ trans('main.nav5') }}</a>
			</li>
			<li class="nav-list__item">
				<a href="https://blog.wamp.com.ua" target="_blank">{{ trans('main.nav6') }}</a>
			</li>
			<li class="nav-list__item">
				<a @if(Route::currentRouteName() == 'home') href="#contacts" class="anchor" @else href="{{ route('home') }}#contacts" @endif>{{ trans('main.nav7') }}</a>
			</li>
		</ul>
		<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone']) }}" class="nav__phone">{{ $contacts->phone }}</a>
		<div class="nav-btns">
			<a href="#" class="nav__callback">{{ trans('main.callback') }}</a>
			<div class="nav-lang">
				<a @if(localization()->getCurrentLocale() == 'ru') class="nav-lang__item active" @else href="{{ localization()->getLocalizedURL('ru') }}" class="nav-lang__item" @endif>ru</a>
				<a @if(localization()->getCurrentLocale() == 'en') class="nav-lang__item active" @else href="{{ localization()->getLocalizedURL('en') }}" class="nav-lang__item" @endif>en</a>
			</div>
		</div>
	</div>
</nav>