<?php

require_once './func.php';

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    echo "Wrong request!";
    exit;
}

if (empty($_GET['id']) or empty($_GET['action'])) {
    echo "Require all fileds";
    exit;
}

if (!in_array($_GET['action'], ['finish', 'delete'])) {
    echo "Task supported only finish and delete";
    exit;
}

if ($_GET['action'] == 'finish') {
    $tasks[getIndex($_GET['id'])]['finished_at'] = date('Y-m-d H:i:s');
    saveTasks($tasks);
} elseif ($_GET['action'] == 'delete') {
    array_splice($tasks, getIndex($_GET['id']), 1);
    saveTasks($tasks);
} else {
    echo "Task supported only finish and delete";
    exit;
}

header("location: index.php");
