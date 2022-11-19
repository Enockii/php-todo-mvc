<?php

namespace Todo\Controllers;

use const Todo\__PROJECT_ROOT__;

class TaskListController extends AbstractController {

    public function render () : void {
        $args = [];
        if (isset($_GET['order-by'])){
            $args['orderBy'] = $_GET['order-by'];

        }
        if (isset($_GET['search'])){
            $args['search'] = $_GET['search'];
        }
        if (isset($_GET['page'])){
            $args['page'] = $_GET['page'];
        }
        $args['perPage'] = 10;

        echo get_template( __PROJECT_ROOT__ . "/Views/list.php", [
         'tasks' => $this->taskService->list($args)['tasks']]);
    }
  
}