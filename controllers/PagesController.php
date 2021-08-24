<?php

class PagesController {


    public function home()
    {
        // App::get('db')->insert('tasks', [
        //     'description' => 'My Another New Task1',
        //     'complete' => 1
        // ]);

        // App::get('db')->delete('tasks', [
        //     'id' => 18
        // ]);

        // App::get('db')->update('tasks', [
        //         'description' => 'My Updated description',
        //         'complete' => 1
        //     ],
        //     [
        //         'id' => 20
        //     ]
        // );
        $tasks = App::get('db')->select("tasks");

        return view('index', compact('tasks'));
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