@extends('layouts.main')
@section('content')

<div class="movie-info border-b border-grey-800">
	<div class="container mx-auto px-8 py-16 border-b border-grey-800 flex flex-col md:flex-row">
		<img src="{{$actor['profile_path']}}" alt="image" class="w-96" style="width:20rem ;height:25rem">
		<div class="md:ml-24">
			<h2 class="lg:text-4xl font-semibold">{{$actor['name']}}</h2>
			<div class="mt-2">
			<div class="flex items-center text-grey-400 text-sm mt-1">
				<span><i class="fa fa-birthday-cake" aria-hidden="true"></i>
</span>
				
			<span class="mx-2" class="text-grey-300 text-sm">
{{$actor['birthday']}} ,{{$actor['age']}} old 			
			</span>
		</div>
		<p class="text-grey-300 mt-8">{{$actor['biography']}}</p></div>

<div class="mt-12">
	<h4 class="text-white font-semibold">Known for</h4>

	<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 mt-4 gap-4">
			@foreach($knownformovies as $mov)
		<div><a href="{{route('movie.show',$mov['id'])}}"><img src="{{$mov['profile_path']}}">
		<a href="#" class="text-sm loading-normal block mt-1">{{$mov['title']}}</a>
		</a>
		</div>
		@endforeach
		</div>
		
	
		</div>
	</div>
</div>
<div class="credits border-b border-grey-800">
 <div class="container mx-auto  px-2 md:px-16 py-16 ">
	<h2 class="text-4xl font-semibold">credits</h2>
		<ul class="list-disc leading-loose pl-5 mt-8">
			@foreach($credits as $credit)
			<li>{{$credit['release_year']}} &middot; <strong>{{$credit['title']}}</strong> as {{$credit['character']}}</li>
			@endforeach
			</ul>
	
	 </div> 
	
	</div>
</div>
@endsection