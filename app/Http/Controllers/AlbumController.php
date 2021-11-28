<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        return view('Album.index');
    }
    public function create(){
        return view('Album.create');
    }

    public function show($Album){
        return view('Album.show', ['Album' => $Album]);
    }
}
