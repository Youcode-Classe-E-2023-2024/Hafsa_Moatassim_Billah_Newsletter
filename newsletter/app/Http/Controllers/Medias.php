<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Medias extends Controller
{
    public function store(Request $request)
    {
        $userId = Auth::id();
        $media = Medias::create([
            "user_id" => $userId
        ]);

        // Add the uploaded image to the media collection
        $media->addMediaFromRequest('image')->toMediaCollection();

        // Handle success scenario
        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
}
