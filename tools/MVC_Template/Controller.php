<?php
/**
 * Created by PhpStorm.
 * User: tonypiton
 * Date: 04/02/2018
 * Time: 13:57
 */

class Controller
{
    private $model;
    private $view;

    public function __construct()
    {
        require_once _MODEL_;
        require_once _VIEW_;

        //Create model
        $this->model = new Model();
        //Create view
        $this->view = new View();
        //Display page
        $this->view->displayView();
    }
}
