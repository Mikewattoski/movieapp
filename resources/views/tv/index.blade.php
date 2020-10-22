@extends('layouts.main')
@section('content')
<div class="container mx-auto px-16 pt-16">
	<div class="popular movies">
		<div class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Shows</div>
	<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
		@foreach($popularshow as $movie)
		<x-tvcomponent :movie="$movie" :genres="$genres"/>
		@endforeach


	</div>
	</div>
</div>
<div class="container mx-auto px-16 pt-16">
	<div class="nowplaying movies">
		<div class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing shows</div>
	<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
	@foreach($topshow as $movie)
		<x-tvcomponent :movie="$movie" :genres="$genres"/>
		@endforeach

	</div>
	</div>
</div>
@endsection