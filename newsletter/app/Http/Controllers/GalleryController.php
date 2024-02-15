<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show()
    {
        $medias = Medias::all();
        $user = User::pluck('name', 'id');


        return view('gallery', compact('medias', 'user'));
    }
}
