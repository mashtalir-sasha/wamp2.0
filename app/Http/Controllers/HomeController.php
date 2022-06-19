<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.main', [
            'services' => \App\Service::get(),
            'clients' => \App\Client::orderBy('created_at', 'desc')->get(),
            'maps' => \App\Map::get(),
            'projects' => \App\Project::orderBy('created_at', 'desc')->get(),
            'contacts' => \App\Contact::first(),
            'price' => \App\Price::first(),
        ]);
    }
}
