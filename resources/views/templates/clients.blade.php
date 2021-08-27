<section class="clients">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="clients__ttl">{!! trans('main.clients_ttl') !!}</h3>
				<div class="clients-slider">
				@foreach($clients as $item)
					<div>
						<div>
							<div class="client">
								<div class="client-wrap">
									<img src="/{{ $item->image }}" alt="client" class="client-wrap__img">
								</div>
								<p class="client__txt">{!! Helpers::getLangString($item,'name') !!}</p>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</div>
	</div>
</section>