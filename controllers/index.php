<?php

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

include BASE_PATH . 'views/index.view.php';