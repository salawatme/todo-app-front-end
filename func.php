<?php

define('FILE_NAME', 'tasks.json');
if (!file_exists(FILE_NAME)) {
    saveTasks([]);
}

$tasks = json_decode(file_get_contents(FILE_NAME), 1);
$ids = array_column($tasks, 'id');

function saveTasks($tasks)
{
    file_put_contents(FILE_NAME, json_encode($tasks));
}

function getIndex($id)
{
    global $ids;
    return array_search($id, $ids);
}

function getTask($id)
{
    global $tasks;
    return $tasks[getIndex($id)];
}
