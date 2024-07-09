<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TaskController extends BaseController
{
    public function index()
    {
    $taskModel = new \App\Models\TaskModel();
    $tasks = $taskModel->findAll();

    $data = [
        'title' => 'Task List',
        'tasks' => $tasks
    ];

        echo view('task', $data);
    }
}
