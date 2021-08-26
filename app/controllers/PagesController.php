<?php

namespace App\Controllers;

use App\Core\App;
class PagesController {

    public function home()
    {
        $articals = App::get('db')->select("articals");
        return view('index', compact('articals'));
    }

    public function artical()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $artical = App::get('db')->find("articals", ['id' => $id]);
        App::get('db')->update("articals", ['read_count' => $artical->read_count +1], ['id' => $id]);
        return view('artical', compact('artical'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}