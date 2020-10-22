<?php

namespace App\ViewModels;
use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class ActordataviewMode extends ViewModel
{
	public $credits;
	public $actor;
    public function __construct($actor ,$credits)
    {
    $this->actor=$actor;
    $this->credits=$credits;

    }
   
    public function actor(){
    	return collect($this->actor)->merge([
    		'birthday'=>Carbon::parse($this->actor['birthday'])->format('M d, Y'),
    		'age'=>Carbon::parse($this->actor['birthday'])->age,
    		'profile_path'=>$this->actor['profile_path']?
    		'https://image.tmdb.org/t/p/w235_and_h235_face'.$this->actor['profile_path']
    		:'https://ui-avatars.com/api/?size=2356name='.$this->actor['name'],

    		]);
    		 }
public function credits(){
	$castMovies= collect($this->credits)->get('cast');
    	return collect($castMovies)->map(function($movie){
    		if(isset($movie['release_date'])){
    				$release_date=$movie['release_date'];
    		}elseif(isset($movie['first_air_date'])){
    			$release_date=$movie['first_air_date'];
    		}else{
    		$release_date='';
    		}
		
if(isset($movie['title'])){
    				$title=$movie['title'];
    		}elseif(isset($movie['name'])){
    			$title=$movie['name'];
    		}else{
    		$title="untittled";
    		}
		
		return collect($movie)->merge([
	'release_date'=>$release_date,
	'release_year'=>isset($release_date)?Carbon::parse($release_date)->format('Y'):"future",
	'title'=>$title,
	'character'=>isset($movie['character'])?$movie['character']:""	
]);    		})->sortByDesc('release_date');
   	
    
}

 public function knownformovies(){
    	$castMovies= collect($this->credits)->get('cast');
    	return collect($castMovies)->where('media_type','movie')->sortByDesc('popularity')->take(5)->map(function($movie){
		return collect($movie)->merge([
		'profile_path'=>$this->actor['profile_path']?
    		'https://image.tmdb.org/t/p/w185'.$movie['poster_path']
    		:'https://ui-avatars.com/api/?size=2356name='.$movie['name'],
    		'title'=>isset($movie['title'])? $movie['title']:"untittled",
    	
]);    		});
   }

}
