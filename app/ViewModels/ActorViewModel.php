<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
	    public $popularactor;   
	    public $page;

    public function __construct($popularactor, $page)
    {
        $this->popularactor=$popularactor;
        $this->page=$page;

    }
    public function popularactor(){
    	return collect($this->popularactor)->map(function($actor){
    		return collect($actor)->merge([
    		'profile_path'=>$actor['profile_path']?
    		'https://image.tmdb.org/t/p/w235_and_h235_face'.$actor['profile_path']
    		:'https://ui-avatars.com/api/?size=2356name='.$actor['name'],
    		'known_for'=>collect($actor['known_for'])->pluck('title'),
    	])->only([
    		'name','id','profile_path','known_for'
    	]);
    	});
    }
    public function previous(){
    	return $this->page>1? $this->page-1:null;
    }
public function next(){
    	return $this->page <500? $this->page+1:null;
    }

}
