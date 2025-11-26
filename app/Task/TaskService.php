<?php

namespace App\Task;

class TaskService {

    private TaskRepository $repository;

    public function __construct(private TaskRepository $taskRepository) {
        $this->repository = $taskRepository;
    }

    function create($data) {
        $this->repository->create($data);
    }
}