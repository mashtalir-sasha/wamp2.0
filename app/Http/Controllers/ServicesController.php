<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index($slug)
    {
        return view('pages.service', [
            'services' => \App\Service::get(),
            'service' => \App\Page::where('slug', $slug)->first(),
            'clients' => \App\Client::orderBy('created_at', 'desc')->get(),
            'maps' => \App\Map::get(),
            'contacts' => \App\Contact::first(),
        ]);
    }
}
