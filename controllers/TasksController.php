<?php

namespace App\Controllers;

use App\Core\App;

class TasksController {

    public function index()
    {
        $tasks = App::get('db')->select("tasks");

        return view('tasks', compact('tasks'));
    }

    public function store()
    {
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

        App::get('db')->insert("tasks", [
            'description' => $description
        ]);
        
        redirect('tasks');
    }

    public function update()
    {
        // App::get('db')->update('tasks', [
        //         'description' => 'My Updated description',
        //         'complete' => 1
        //     ],
        //     [
        //         'id' => 20
        //     ]
        // );
    }

    public function destroy()
    {
        // App::get('db')->delete('tasks', [
        //     'id' => 18
        // ]);
    }
}