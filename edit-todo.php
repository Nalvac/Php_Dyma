<?php

$filename= __DIR__.'/data/todo.json';

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';

if($id) {
    $data = file_get_contents($filename);
    $todos = json_decode($data, true) ?? [];

    if($_GET['edit'] === 'true') {
        if(count($todos)) {
            $todoIndex = array_search($id, array_column($todos, 'id'));
            $todos[$todoIndex]['done'] = !$todos[$todoIndex]['done'];
            file_put_contents($filename, json_encode($todos));
            header('Location: /');
        }       
    } else {
        $todos = json_decode(file_get_contents($filename), true);
        $todoIndex = array_search($id, array_column($todos, 'id'));
        array_splice($todos, $todoIndex, 1);
        file_put_contents($filename, json_encode($todos));
        header('Location: /');
    }


}