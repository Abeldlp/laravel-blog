<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Abel';
        return view('pages.index', compact('title'));
        //return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'What do you want to know about me?';
        return view('pages.about', compact('title'));
    }

    public function services()
    {
        $data = [
            'title' => 'This is the services page!',
            'service1' => 'Eyebrows',
            'service2' => 'Nails',
            'secondary_services' => ['Foot', 'Massage', 'lindts'],
        ];
        return view('pages.services')->with($data);
    }
}
