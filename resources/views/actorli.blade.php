@extends('layouts.main')
@section('content')
<div class="container mx-auto px-16 pt-16">
	<div class="popular actors">
		<div class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular actors</div>
	<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
		@foreach($popularactor as $actor)
		
   <div class="actor mt-2"> 
				<a href="{{route('actor.show',$actor['id'])}}">
					<img src="{{$actor['profile_path']}}" alt="intersteller" class="hover:opacity-75 ">
				</a>
				<div class="mt-2">
				<a href="#" class="text-lg mt-2 hover:text-grey-300">{{$actor['name']}}</a>
				<div class="text-grey-300 text-sm">
				@foreach($actor['known_for'] as $act)
				{{$act}},
				@endforeach
				</div>
		
			</div>
				

	 	</div>@endforeach

	</div>
	</div>
	<div class="page-load-status">
  <p class="infinite-scroll-request">Loading...</p>
  <p class="infinite-scroll-last">End of content</p>
  <p class="infinite-scroll-error">error</p>
</div>

	</div>
@endsection
@section('script')
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
	var elem = document.querySelector('.grid');
var infScroll = new InfiniteScroll( elem, {
  // options
  path: '/actor/page/@{{#}}',
  append: '.actor',
  status: '.page-load-status'

 });
</script>
@endsection