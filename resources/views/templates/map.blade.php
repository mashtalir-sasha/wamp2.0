<section class="map-con d-xl-block d-none">
	<div class="map-in">
	@foreach($maps as $item)
		<div class="markr" style="top: {{ $item->position_top }}; @if(isset($item->position_left))left: {{ $item->position_left }};@endif @if(isset($item->position_right))right: {{ $item->position_right }};@endif">
			<a href="#" class="in-mark @if($loop->iteration == 1) actm @endif">
				<span class="mark-name">{{ Helpers::getLangString($item,'place') }}</span>
				<span class="mrkr-hover">
					<span class="intx">
						{!! Helpers::getLangString($item,'title') !!}
						<span class="alink">{!! Helpers::getLangString($item,'text') !!}</span>
					</span>
				</span>
			</a>
		</div>
	@endforeach
	</div>
</section>