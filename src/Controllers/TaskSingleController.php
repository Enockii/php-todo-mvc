<?php

namespace Todo\Controllers;

use Todo\Entities\TaskEntity;
use const Todo\__PROJECT_ROOT__;
use Todo\Services\TaskServiceInterface;

class TaskSingleController extends AbstractController {

    private ?TaskEntity $task;

    public function __construct( TaskServiceInterface $taskService, ?int $taskId ) {
        parent::__construct($taskService);
        $this->task = isset($taskId)? $this->taskService->get($taskId) : new TaskEntity();
    }
  
  public function render() : void {
    // TODO remplacez les valeurs avec celles d'une tâche
    echo get_template( __PROJECT_ROOT__ . "/views/single.php", [
      'task' => $this->task,
      'editing' => null
    ]);
  }

  

}