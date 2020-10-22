@extends('layouts.main')
@section('content')

<div class="movie-info border-b border-grey-800">
	<div class="container mx-auto px-8 py-16 flex flex-col md:flex-row">
		<img src="{{'https://image.tmdb.org/t/p/w500'.$movie['poster_path']}}" alt="image" class="w-96" style="width:20rem ;height:30rem">
		<div class="md:ml-24">
			<h2 class="lg:text-4xl font-semibold">{{$movie['original_title']}}</h2>
			<div class="mt-2">
			<div class="flex items-center text-grey-400 text-sm mt-1">
				<span><i class="fa fa-star" aria-hidden="true"></i>
</span>
				<span class="ml-2">{{$movie['vote_average']}}</span>
				<span class="mx-2">|</span>
				<span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
			<span class="mx-1">|</span>
				
			<span class="mx-2" class="text-grey-300 text-sm">
			@foreach($movie['genres'] as $gen)
				{{$gen['name']}},

				@endforeach
			
			
			</span>
		</div>
		<p class="text-grey-300 mt-8">{{$movie['overview']}}</div>

<div class="mt-12">
	<h4 class="text-white font-semibold">Featured cast</h4>
	<div class="flex mt-4">
		@foreach($movie['credits']['crew'] as $crew)
		@if($loop->index < 2)
		<div class="mr-8">
			<div>{{$crew['name']}}</div>
			<div class="text-grey-400 text-sm">{{$crew['job']}}</div>
		</div>
		@endif
		@endforeach
	</div>
	@if(count($movie['videos']['results'])>0)
<div class="mt-12">
	<a href="https://www.youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="flex inline-flex items-center bg-orange-500 text-grey-900 rounded font-semibold px-5 py-4 hover:bg-orange-600">
	
		<span class="fill-current"><i class="fa fa-play" aria-hidden="true"></i>
</span>
		<span class="ml-2">play trailor</span>
	</a>
</div>
@endif

		</div>
	</div>
</div>
<div class="cast-info border-b border-grey-800">
 <div class="container mx-auto  px-2 md:px-16 py-16 ">
	<h2 class="text-4xl font-semibold">cast</h2>
	<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-5 g:grid-cols-5 gap-8 "  >
		@foreach($movie['credits']['cast'] as $crew)
		@if($loop->index < 4)
		
		<div class="mt-2 "> 
				<a href="{{route('actor.show',$crew['id'])}}">
					<img src="{{'https://image.tmdb.org/t/p/w500'.$crew['profile_path']}}" alt="intersteller" class="hover:opacity-75 ">
				</a>
				<div class="mt-2">
				<a href="#" class="text-lg mt-2 hover:text-grey-300">{{$crew['name']}} </a>
			</div>

	 	</div>
	 	@endif
		@endforeach
	
	 </div> 
	
	</div>
</div>
<div class="image-info border-b border-grey-800">
<div class="container mx-auto px-16 py-16 ">
	<h2 class="text-4xl font-semibold">Images</h2>
	<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			@foreach($movie['images']['backdrops'] as $image)
		@if($loop->index < 6)
		<div class="mt-2 mr-1"> 
		
				<a href="#">
					<img src="{{'https://image.tmdb.org/t/p/w500'.$image['file_path']}}" alt="intersteller" class="hover:opacity-75 ">
				</a>
	 		</div>

	 	@endif
		@endforeach
	
		
	 
	</div>
</div>


@endsection