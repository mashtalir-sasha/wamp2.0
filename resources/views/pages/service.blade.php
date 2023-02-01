@extends('layouts.main')

@php
$title = Helpers::getLangString($service, 'meta_title');
$description = Helpers::getLangString($service, 'meta_description');
$keywords = Helpers::getLangString($service, 'meta_keywords');
$partTitle = trans('main.part_title');
@endphp

@section('title', "$title $partTitle")
@section('description', "$description")
@section('keywords', "$keywords")

@section('opengraph')
<meta property="og:title" content="{{ $title }}{{ $partTitle }}">
	<meta property="og:description" content="{{ $description }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ asset($service->image) }}">
@endsection

@section('content')

@include('templates.nav')

<header class="head height" style="background-image: url(/{{ $service->image }})">
	<div class="container">
		<div class="row align-items-center justify-content-end">
			<div class="col-xl-8 col-md-9">
				<div class="block-title">
					<h1 class="block-title__ttl">{!! Helpers::getLangString($service,'title') !!}</h1>
					<h2 class="block-title__txt">{!! Helpers::getLangString($service,'text') !!}</h2>
				</div>
				<!-- <img src="/{{ $service->image }}" alt="img" class="head-img d-sm-none"> -->
				<a href="#modal4" class="head__btn btn fancybox">{{ trans('main.main_btn') }}</a>
			</div>
		</div>
	</div>
</header>

@foreach($service->info as $item)
<section id="service{{ $item->id }}" class="service-content">
	<div class="container service-content__wrap">
	@if($loop->iteration == 1)
		<div class="animate-container animate-container_i1">
			<img src="/img/animation/1.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i2">
			<img src="/img/animation/2.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i3">
			<img src="/img/animation/3.png" alt="animate" class="animate">
		</div>
	@elseif($loop->iteration == 2)
		<div class="animate-container animate-container_i2">
			<img src="/img/animation/2.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i4">
			<img src="/img/animation/4.png" alt="animate" class="animate">
		</div>
	@elseif($loop->iteration == 3)
		<div class="animate-container animate-container_i5">
			<img src="/img/animation/5.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i7">
			<img src="/img/animation/7.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i8">
			<img src="/img/animation/8.png" alt="animate" class="animate">
		</div>
	@endif
		<div class="row align-items-center">
			<div class="col-lg-6 ml60">
				<h3 class="service-content__ttl">{!! Helpers::getLangString($item,'page_title') !!}</h3>
				<div class="service-content__screen d-block d-lg-none">
					<div class="service-content__img" style="background-image: url(/{{ $item->page_img }});"></div>
				</div>
				<div class="service-content__txt">
					{!! Helpers::getLangString($item,'page_text') !!}
				</div>
				<div class="service-content__line"></div>
				<p class="service-content__note">{!! Helpers::getLangString($item,'page_note') !!}</p>
				<p class="service-content__price">{{ trans('main.serivePage_price') }} {{ $item->price }}</p>
				<a href="#modal3" class="service-content__btn btn fancybox">{{ trans('main.serivePage_btn') }}</a>
			</div>
			<div class="col-lg-5 d-none d-lg-block">
				<div class="service-content__screen">
					<div class="service-content__img" style="background-image: url(/{{ $item->page_img }});"></div>
				</div>
			</div>
		</div>
	</div>
</section>
@endforeach

@foreach($service->portfolio as $item)
<section class="service-portfolio">
	<div class="container">
		@if($loop->iteration == 1)
		<div class="animate-container animate-container_i9">
			<img src="/img/animation/9.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i10">
			<img src="/img/animation/10.png" alt="animate" class="animate">
		</div>
		@elseif($loop->iteration == 2)
		<div class="animate-container animate-container_i11">
			<img src="/img/animation/11.png" alt="animate" class="animate">
		</div>
		@elseif($loop->iteration == 3)
		<div class="animate-container animate-container_i12">
			<img src="/img/animation/12.png" alt="animate" class="animate">
		</div>
		<div class="animate-container animate-container_i12">
			<img src="/img/animation/12.png" alt="animate" class="animate">
		</div>
		@endif
		<div class="row">
			<div class="col">
				<h3 class="service-portfolio__ttl">{!! Helpers::getLangString($item,'title') !!}</h3>
			</div>
		</div>
		<div class="row">
			@foreach($item->images as $image)
			<div class="col-md-6">
				@if($loop->iteration > 4)
				<div class="service-portfolio__wraper none">
					<picture>
						<source srcset="/{{ pathinfo($image, PATHINFO_DIRNAME) }}/@1x/{{ pathinfo($image, PATHINFO_FILENAME) }}.webp 1x, /{{ pathinfo($image, PATHINFO_DIRNAME) }}/{{ pathinfo($image, PATHINFO_FILENAME) }}.webp 2x" type="image/webp">
						<img srcset="/{{ pathinfo($image, PATHINFO_DIRNAME) }}/@1x/{{ pathinfo($image, PATHINFO_FILENAME) }}.{{ pathinfo($image, PATHINFO_EXTENSION) }} 1x, /{{ $image }} 2x" alt="portfolio" class="service-portfolio__img" loading="lazy">
					</picture>
				</div>
				@else
				<div class="service-portfolio__wraper">
					<picture>
						<source srcset="/{{ pathinfo($image, PATHINFO_DIRNAME) }}/@1x/{{ pathinfo($image, PATHINFO_FILENAME) }}.webp 1x, /{{ pathinfo($image, PATHINFO_DIRNAME) }}/{{ pathinfo($image, PATHINFO_FILENAME) }}.webp 2x" type="image/webp">
						<img srcset="/{{ pathinfo($image, PATHINFO_DIRNAME) }}/@1x/{{ pathinfo($image, PATHINFO_FILENAME) }}.{{ pathinfo($image, PATHINFO_EXTENSION) }} 1x, /{{ $image }} 2x" alt="portfolio" class="service-portfolio__img" loading="lazy">
					</picture>
				</div>
				@endif
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col">
				@if( count($item->images) > 4 )
				<a href="#" class="service-portfolio__btn btn openMore">{{ trans('main.more_example') }}</a>
				<a href="#modal4" class="service-portfolio__btn btn openModal none fancybox">{{ trans('main.main_btn') }}</a>
				@else
				<a href="#modal4" class="service-portfolio__btn btn fancybox">{{ trans('main.main_btn') }}</a>
				@endif
			</div>
		</div>
	</div>
</section>
@endforeach

<section class="service-form">
	<div class="service-form__wrap">
		<form class="container form_check">
			<input type="hidden" name="title" value="{{ trans('main.servicePage_formTtl') }}">
			<input type="hidden" name="lang" value="{{ app()->getLocale() }}">
			<input type="hidden" name="page" value="{{ Request::url() }}">
			<div class="row align-items-end justify-content-center justify-content-lg-start">
				<div class="col-lg-3 offset-lg-1 col-md-4 col-sm-6">
					<h3 class="service-form__ttl">{!! trans('main.servicePage_form') !!}</h3>
					<div class="rline">
						<input type="text" name="business" class="service-form__input rfield" placeholder="{{ trans('main.business2') }}">
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<h3 class="service-form__ttl">{!! trans('main.servicePage_form_item1') !!}</h3>
					<div class="rline">
						<input type="text" name="phone" class="service-form__input rfield" placeholder="{{ trans('main.phone') }}">
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<h3 class="service-form__ttl service-form__ttl_last"><span>{!! trans('main.servicePage_form_item2') !!}</span></h3>
					<button class="service-form__btn btnsubmit btn">{{ trans('main.submit') }}</button>
				</div>
				<img src="/img/service-form__img.png" alt="form" class="service-form__img d-none d-lg-block">
			</div>
		</form>
	</div>
</section>

@include('templates.about')
@include('templates.clients')
@include('templates.map')
@include('templates.foot')

@endsection