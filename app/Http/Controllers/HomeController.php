<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $new;

    public function __construct(News $new){
        $this->new = $new;
    }


    public function index(){

        $news = $this->new->limit(7)->orderBy('id', 'DESC')->get();
       
        return view('home', compact('news'));
    }
    
}
