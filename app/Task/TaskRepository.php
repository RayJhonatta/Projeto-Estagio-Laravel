<?php 

namespace App\Task;
use App\Models\Task;

class TaskRepository {

    private Task $model;

    public function __construct(Task $model) {
        $this->model = $model;
    }

    public function create($data) {
        return $this->model->create($data);
    }
}