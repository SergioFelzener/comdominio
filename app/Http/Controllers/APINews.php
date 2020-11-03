<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class APINews extends Controller
{
    public function store(Request $request) {

        $new = News::create($request->all());
        return response()->json($new);
    }

    public function index(){
        $allNews = News::all();
        return response()->json($allNews);
    }

}
