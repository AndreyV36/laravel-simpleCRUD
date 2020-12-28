<!--Навигация-->
<ul class="nav">
	@foreach ($menu_points as $menu_point)
	<li><a href="{{ $menu_point['href'] }}" @if(isset($menu_point['blank'])) target="_blank" @endif>{{ $menu_point['title'] }}</a></li>
	@endforeach
</ul>