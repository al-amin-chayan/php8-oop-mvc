<?php

$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

App::get('db')->insert("tasks", [
    'description' => $description
]);

header("Location: /");