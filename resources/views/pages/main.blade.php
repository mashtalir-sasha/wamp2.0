@extends('layouts.main')

@section('title', trans('main.title'))
@section('description', trans('main.description'))
@section('keywords', '')

@section('opengraph')
<meta property="og:title" content="{{ trans('main.title') }}">
	<meta property="og:description" content="{{ trans('main.description') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ asset('img/main-bg.jpg') }}">
@endsection

@section('content')

@include('templates.nav')

<header class="head height" style="background-image: url(/img/main-bg.jpg)">
	<div class="container">
		<div class="row align-items-center justify-content-end">
			<div class="col-xl-8 col-md-9">
				<div class="block-title">
					<h1 class="block-title__ttl">{!! trans('main.main_h1') !!}</h1>
					<h2 class="block-title__txt">{!! trans('main.main_h2') !!}</h2>
				</div>
				<a href="#modal1" class="head__btn btn fancybox">{{ trans('main.main_btn') }}</a>
			</div>
		</div>
	</div>
</header>

<section id="services" class="services">
	<div class="container">
		<div class="animate-container animate-container_i5">
			<img src="/img/animation/5.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i7">
			<img src="/img/animation/7.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i8">
			<img src="/img/animation/8.png" alt="animate" class="animate">
		</div>
		<div class="row">
			<div class="col">
				<h3 class="services__ttl">{!! trans('main.service_ttl') !!}</h3>
				<p class="services__txt">{!! trans('main.service_txt') !!}</p>
			</div>
		</div>
		<div class="row services-wrap">
		@foreach($services as $item)
			<div class="col-lg-4 col-md-6">
				<div class="service">
					@if($item->is_anchor == 1)
					<a href="{{ route('service', $item->page->slug) }}#service{{$item->id}}" class="service-ttl">
						<img src="{{ $item->ico }}" alt="ico" class="service-ttl__ico">
						<h4 class="service-ttl__txt">{{ Helpers::getLangString($item,'title') }}</h4>
					</a>
					@else
					<a href="{{ route('service', $item->page->slug) }}" class="service-ttl">
						<img src="{{ $item->ico }}" alt="ico" class="service-ttl__ico">
						<h4 class="service-ttl__txt">{{ Helpers::getLangString($item,'title') }}</h4>
					</a>
					@endif
					<p class="service-txt">{!! Helpers::getLangString($item,'text') !!}</p>
					@if($item->is_anchor == 1)
					<a href="{{ route('service', $item->page->slug) }}#service{{$item->id}}" class="service-link">{{ trans('main.more_btn') }}</a>
					@else
					<a href="{{ route('service', $item->page->slug) }}" class="service-link">{{ trans('main.more_btn') }}</a>
					@endif
					<!-- <p class="service-price">Цена от {{ $item->price }}</p> -->
					<a href="#modal2" class="service-btn btn fancybox">{{ trans('main.service_btn') }}</a>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</section>

<section class="fixbg fixbg_bg1">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="fixbg__ttl">{!! trans('main.fix_ttl') !!}</h3>
				<p class="fixbg__subttl">{!! trans('main.fix_txt') !!}</p>
			</div>
		</div>
	</div>
	<a href="#analysis" class="anchor scroll-downer">
		<span class="out-downder">
			<span class="in-downer">
				<span class="object-downer"></span>
			</span>
		</span>
	</a>
</section>

<section id="analysis" class="analysis">
	<div class="container">
		<div class="animate-container animate-container_i1">
			<img src="/img/animation/1.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i3">
			<img src="/img/animation/3.png" alt="animate" class="animate">
		</div>
		<div class="row">
			<div class="col">
				<h3 class="analysis__ttl">{{ trans('main.analysis_ttl') }}</h3>
				<form class="analysis-form form_check">
					<input type="hidden" name="title" value="{{ trans('main.analysis_formTtl') }}">
					<h4 class="analysis-form__ttl">{!! trans('main.analysis_form') !!}</h4>
					<div class="analysis-form__wrap">
						<div class="row align-items-center">
							<div class="col-lg-7">
								<div class="rline">
									<input type="text" name="phone" class="analysis-form__input rfield" placeholder="{{ trans('main.phone_tg') }}">
								</div>
							</div>
							<div class="col-lg-5">
								<button class="btnsubmit btn analysis-form__btn">{{ trans('main.analysis_formBtn') }}</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section id="cases" class="portfolio">
	<div class="container">
		<div class="animate-container animate-container_i12">
			<img src="/img/animation/12.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i13">
			<img src="/img/animation/12.png" alt="animate" class="animate">
		</div>
		<div class="row">
			<div class="col">
				<h3 class="portfolio__ttl">{!! trans('main.cases_ttl') !!}</h3>
			</div>
		</div>
		<div class="portfolio-slider">
		@foreach($projects as $item)
			<div class="portfolio-slider__slide">
				<div class="row">
					<div class="col-lg-6">
						<p class="project__type">{{ Helpers::getLangString($item,'type') }}</p>
						<h4 class="project__name">{!! Helpers::getLangString($item,'title') !!}</h4>
						@if( isset( $item->sub_title ) )
						<p class="project-text__txt">{!! Helpers::getLangString($item,'sub_title') !!}</p>
						@endif
						@php
							$link = parse_url($item->link);
							$path = isset($link['path']) && $link['path'] != '/' ? $link['path'] : '';
						@endphp
						@if( isset($item->link) )
						<!-- <a href="{{ $item->link }}" rel="nofollow" target="_blank" class="project__link d-table d-sm-none">{{ $link['host'] .$path }}</a> -->
						@endif
						<div class="project-screen d-block d-sm-none">
							<img src="/img/ipad.png" alt="screen" class="project-screen__bg">
							<img src="/{{ $item->image }}" alt="screnn" class="project-screen__img" loading="lazy">
						</div>
						@if( isset( $item->task ) )
						<h5 class="project-text__ttl">{{ trans('main.task') }}</h5>
						<p class="project-text__txt">{!! Helpers::getLangString($item,'task') !!}</p>
						@endif
						@if( isset( $item->solution ) )
						<h5 class="project-text__ttl">{{ trans('main.solution') }}</h5>
						<p class="project-text__txt">{!! Helpers::getLangString($item,'solution') !!}</p>
						@endif
						@if( isset( $item->strategy1 ) )
						<h5 class="project-text__ttl">{{ trans('main.strategy') }}</h5>
						<ul class="project-list">
							@for ($i = 1; $i <= 10; $i++)
							@if( isset($item['strategy'.$i]) )
							<li class="project-list__item">{{ Helpers::getLangString($item,'strategy'.$i) }}</li>
							@endif
							@endfor
						</ul>
						@endif
					</div>
					<div class="col-lg-6 align-self-center">
						@if( isset($item->link) )
						<!-- <a href="{{ $item->link }}" rel="nofollow" target="_blank" class="project__link d-none d-sm-table">{{ $link['host'] .$path }}</a> -->
						@endif
						<div class="project-screen d-none d-sm-block">
							<img src="/img/monitor.png" alt="screen" class="project-screen__bg">
							<img src="/{{ $item->image }}" alt="screnn" class="project-screen__img" loading="lazy">
						</div>
					</div>
				</div>
				@if( isset( $item->result_title1 ) && isset( $item->result_text1 ) )
				<h5 class="project-text__ttl">{{ trans('main.result') }}</h5>
				<div class="row">
					<div class="col-lg-3 col-6">
						<div class="project-result">
							<span class="project-result__numb">{{ Helpers::getLangString($item,'result_title1') }}</span>
							<p class="project-result__txt">{{ Helpers::getLangString($item,'result_text1') }}</p>
						</div>
					</div>
					@if( isset( $item->result_title2 ) && isset( $item->result_text2 ) )
					<div class="col-lg-3 col-6">
						<div class="project-result">
							<span class="project-result__numb">{{ Helpers::getLangString($item,'result_title2') }}</span>
							<p class="project-result__txt">{{ Helpers::getLangString($item,'result_text2') }}</p>
						</div>
					</div>
					@endif
					@if( isset( $item->result_title3 ) && isset( $item->result_text3 ) )
					<div class="col-lg-3 col-6">
						<div class="project-result">
							<span class="project-result__numb">{{ Helpers::getLangString($item,'result_title3') }}</span>
							<p class="project-result__txt">{{ Helpers::getLangString($item,'result_text3') }}</p>
						</div>
					</div>
					@endif
					@if( isset( $item->result_title4 ) && isset( $item->result_text4 ) )
					<div class="col-lg-3 col-6">
						<div class="project-result">
							<span class="project-result__numb">{{ Helpers::getLangString($item,'result_title4') }}</span>
							<p class="project-result__txt">{{ Helpers::getLangString($item,'result_text4') }}</p>
						</div>
					</div>
					@endif
				</div>
				@endif
			</div>
		@endforeach
		</div>
	</div>
</section>

@include('templates.example-form')
@include('templates.about')
@include('templates.clients')
@include('templates.map')
@include('templates.foot')

@endsection