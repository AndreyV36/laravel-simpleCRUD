<!--Slide bar-->
<div class="slider">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		@foreach($slide_points as $key=>$slide_point)
			<div class="item @if($key == 0) active @endif">
				<img src="{{ $slide_point->src }}" alt="">
				<div class="carousel-caption">
					<h4>{{ $slide_point->title }}</h4>
					<p>{{ $slide_point->description }}</p>
				</div>
			</div>
		@endforeach
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>
</div>