<?php

class PartnerController extends Controller
{
    function index()
    {
        require(ROOT . 'model/Partner.php');
        $tasks = new Partner();
        $d['partners'] = $tasks->showAllPartners();
        $this->set($d);
        $this->render("index");
    }
    /*function create()
    {
        if (isset($_POST["title"]))
        {
            require(ROOT . 'Models/Task.php');
            $task= new Task();
            if ($task->create($_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->render("create");
    }*/

}