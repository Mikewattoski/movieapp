<!DOCTYPE html>
<html>
<head>
	<title>movieapp</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/main.css">
    @livewireStyles
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-gray-800">
	<div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-8 py-6">
	<ul class="flex flex-col md:flex-row items-center">
		<li>
			<a href="{{route('movie.index')}}" >
			<i class="fa fa-film w-32 " viewBox="0 0 96 24" aria-hidden="true"> My Movie App</i>


			</a>
		</li>
		<li class="ml-6 lg:ml-20">
			<a href="{{route('movie.index')}}" class=" hover:text-gray-300">Movie</a>
		</li>
	<li class="ml-6">
			<a href="{{route('tv.index')}}" class=" hover:text-gray-300">Tv shows</a>
		</li>
	<li class="ml-6">
			<a href="{{route('actor.index')}}" class=" hover:text-gray-300">Actors</a>
		</li>
	</ul>

<div class="flex flex-col md:flex-row items-center"></div>
	<livewire:search-dropdown>
	<div class="md:ml-4 mt-3 md:mt-0">
	<a href="#"> <img src="/img/sp.jpg" class="rounded-full w-8 h-8"></a>
</div>
</div>

</nav>
@yield('content')
    @livewireScripts
@yield('script')
</body>
</html>