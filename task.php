<?php
require_once './func.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "Wrong request!";
    exit;
}

if (empty($_POST['task']) or empty($_POST['date']) or empty($_POST['time'])) {
    echo "Require all fileds";
    exit;
}

if (isset($_POST['add'])) {
    $tasks[] = [
        'id' => uniqid('task_'),
        'task' => $_POST['task'],
        'deadline' => [
            'date' => $_POST['date'],
            'time' => $_POST['time'],
        ],
        'finished_at' => null,
    ];

    saveTasks($tasks);
} elseif (isset($_POST['edit'])) {
    if (!isset($_POST['id'])) {
        echo "Wrong request";
        exit;
    }
    $tasks[getIndex($_POST['id'])] = [
        'id' => $_POST['id'],
        'task' => $_POST['task'],
        'deadline' => [
            'date' => $_POST['date'],
            'time' => $_POST['time'],
        ],
        'finished_at' => null,
    ];
    saveTasks($tasks);
}
header("location: index.php");
