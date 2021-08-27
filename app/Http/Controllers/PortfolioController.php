<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('pages.portfolio', [
            'services' => \App\Service::get(),
            'clients' => \App\Client::orderBy('created_at', 'desc')->get(),
            'maps' => \App\Map::get(),
            'portfolios' => \App\Portfolio::get(),
            'contacts' => \App\Contact::first(),
        ]);
    }
}
