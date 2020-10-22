<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

use carbon\carbon;
class tvviewmodel extends ViewModel
{
	public $popularshow;
	public $topshow;
	public $genreslist;
    public function __construct($popularshow,$topshow,$genreslist)
    {
        $this->popularshow= $popularshow;
        $this->topshow=$topshow;
        $this->genreslist=$genreslist;
    }

    public function popularshow(){
    	return collect($this->popularshow)->dump();
    }
 public function topshow(){
    	return collect($this->topshow)->dump();
    }
 public function genreslist(){
    	return collect($this->genreslist)->dump();
    }
}
