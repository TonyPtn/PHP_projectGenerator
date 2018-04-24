<?php
/**
 * Created by PhpStorm.
 * User: tonypiton
 * Date: 04/02/2018
 * Time: 13:53
 */

class View extends ViewPattern
{
    /** Attributes **/
    protected $htmlTemplate;

    public function __construct()
    {
        //Set navbar
        $this->navbar = new NavBar();
        //Call parent construct
        parent::__construct();
    }

    protected function setHead()
    {
        return BootstrapGenerator::setSources()."<link rel='stylesheet' href='"._MVC_ . $_GET['url'] . "/css/style.css"."'><script src ='"._MVC_ . $_GET['url'] . "/js/script.js'></script>".$this->navbar->getNavBarCSS();
    }

    protected function setTitle()
    {
        return "%%PAGE_TITLE%%";
    }

    protected function setNav()
    {
        return $this->navbar->getNavBarHTML();
    }

    protected function setContent()
    {
        //Set page title
        $title = "<h2 class='text-center'>%%PAGE_TITLE%%</h2>";
        //Set page title row
        $titleRow = BootstrapGenerator::genRow($title, null, null, null);


        //Create Container
        $container = BootstrapGenerator::genContainer($titleRow, false, null, null, null);

        //Return content container
        return $container;
    }

    protected function setFooter()
    {
      $formRow = "";

        //return form
        return $formRow;
    }
}
