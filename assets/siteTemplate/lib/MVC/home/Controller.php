<?php
/**
 * User: tonypiton
 *
 * Desc : Controller class for home page
 */

class Controller
{
  /**
   * @var Model \Conatins model object
   */
    private $model;
    /**
     * @var View \Contains view object
     */
    private $view;

    /**
     * Controller constructor
     */
    public function __construct()
    {
        require_once _MODEL_;
        require_once _VIEW_;

        //Create model
        //$this->model = new Model();
        //Create view
        $this->view = new View();
        //Display page
        $this->view->displayView();
    }
}
