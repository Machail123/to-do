<?php
include 'model.php';

$koneksi = new mysqli("localhost", "username", "password", "ukk_2025_todolist");
$model = new ModelTodolist($koneksi);
$todolist = $model->getTodolist();

include 'view_todolist.php';
?>