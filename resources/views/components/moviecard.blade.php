
   <div class="mt-2"> 
				<a href="{{route('movie.show',$movie['id'])}}">
					<img src="{{'https://image.tmdb.org/t/p/w500'.$movie['poster_path']}}" alt="intersteller" class="hover:opacity-75 ">
				</a>
				<div class="mt-2">
				<a href="{{route('movie.show',$movie['id'])}}" class="text-lg mt-2 hover:text-grey-300">{{$movie['title']}}</a>
			<div class="flex items-center text-grey-400 text-sm mt-1">
				<span><i class="fa fa-star" aria-hidden="true"></i>
</span>
				<span class="ml-1">{{$movie['vote_average']}}</span>
				<span class="mx-1">|</span>
				<span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
			</div>
			<div class="text-grey-300 text-sm">
				@foreach($movie['genre_ids'] as $gen)
				{{$genres->get($gen)}},

				@endforeach
			</div>
			</div>

	 	</div>