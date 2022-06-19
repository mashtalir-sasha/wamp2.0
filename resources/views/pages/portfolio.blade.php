@extends('layouts.main')

@section('title', trans('main.title_portf'))
@section('description', trans('main.description'))
@section('keywords', '')

@section('opengraph')
<meta property="og:title" content="{{ trans('main.title_portf') }}">
	<meta property="og:description" content="{{ trans('main.description') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ asset('img/portfolio-bg.jpg') }}">
@endsection

@section('content')

@include('templates.nav')

<header class="head head_service height" style="background-image: url(/img/portfolio-bg.jpg)">
	<div class="container">
		<div class="row align-items-center justify-content-end">
			<div class="col-xl-8 col-md-9">
				<div class="block-title">
					<h1 class="block-title__ttl">{!! trans('main.portf_h1') !!}</h1>
					<h2 class="block-title__txt">{!! trans('main.portf_h2') !!}</h2>
				</div>
				<img src="/img/portfolio-bg.jpg" alt="img" class="head-img d-sm-none">
				<a href="#modal4" class="head__btn btn fancybox">{{ trans('main.main_btn') }}</a>
			</div>
		</div>
	</div>
</header>

@foreach($portfolios as $item)
<section class="service-portfolio @if($loop->iteration == 1) service-portfolio_pt @endif">
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

@include('templates.example-form')
@include('templates.about')
@include('templates.clients')
@include('templates.map')
@include('templates.foot')

@endsection