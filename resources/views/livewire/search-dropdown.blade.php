
	<div class="relative mt-1 lg:ml-125" x-data="{isOpen: true}" @click.away="isOpen=false">
		
		<input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 text-sm pl-8 px-4 py-1 focus:shadow-outline" placeholder="search" 
		x-ref="Search"
		@keydown.window="
		if(event.keyCode==191)
		{
			event.preventDefault();
			$refs.Search.focus();
		}"
		@focus="isOpen=true">
	@if(strlen($search)>2)
		<div class="absolute bg-gray-800 rounded w-64 mt-4" x-show="isOpen" @keydown.escape.window="isOpen=false">
			@if(count($searchResults)>0)
	<ul>
	@foreach($searchResults as $result )
		<li class="border-b border-grey-700">
			
			<a href="{{route('movie.show',$result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
				@if($result['poster_path'])
				<img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="no-image" class="w-8">
				@else
				<img src="/img/images.jpg" alt="no-image" class="w-8">
				@endif
				<span class="ml-4">{{$result['title']}}</span></a>
			</li>
		@endforeach
	</ul>
	@else
	<div class="px-3 py-3">No result for"{{$search}}"</div>
	@endif
		</div>
		@endif
		

</div>
