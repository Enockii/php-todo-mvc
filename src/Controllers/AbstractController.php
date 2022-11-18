<?php

namespace Todo\Controllers;
use Todo\Services\TaskServiceInterface;

abstract class AbstractController {
  
  protected TaskServiceInterface $taskService;
  
  public function __construct( TaskServiceInterface $taskService ) {
    $this->taskService = $taskService;
  }
  
  abstract public function render() : void;
  
}