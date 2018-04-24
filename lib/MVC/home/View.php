<?php
/**
 * Created by PhpStorm.
 * User: tonypiton
 *
 * Desc : View class for home page
 */

class View extends ViewPattern
{
    /** Attributes **/
    /**
     * @var HtmlTemplate \HtmlTemplate object
     */
    protected $htmlTemplate;

    public function __construct()
    {
        //Set navbar
        $this->navbar = new NavBar();
        //Call parent construct
        parent::__construct();
    }

    /**
     * Set HTML document head
     */
    protected function setHead()
    {
        return BootstrapGenerator::setSources()."<link rel='stylesheet' href='"._MVC_ . $_GET['url'] . "/css/style.css"."'><script src ='"._MVC_ . $_GET['url'] . "/js/script.js'></script>".$this->navbar->getNavBarCSS();
    }

    /**
     * Set HTML ducument title
     */
    protected function setTitle()
    {
        return "PHP Project Generator";
    }

    /**
     * Retrieve navigation bar
     */
    protected function setNav()
    {
        return $this->navbar->getNavBarHTML();
    }

    /**
     * Ste HTML Body content
     */
    protected function setContent()
    {
        //Set page title
        $title = "<h2 class='text-center'>Génération de projets PHP avec structure MVC</h2>";
        //Set page title row
        $titleRow = BootstrapGenerator::genRow($title, null, null, null);

        /** Create download form **/
        //Create title
        $formTitle = '<h3>Télechargez une archive contenant les fichiers de bases necessaires à la création d\'un nouveau projet PHP</h3>';
        //Create title row
        $formTitleRow = BootstrapGenerator::genRow($formTitle, null, null, null);

        //Create download button
        $downloadBtn = BootstrapGenerator::genButton('Télecharger l\'archive', 'submit', null, null, null);

        //Create form
        $form = '<form method="POST" action="assets/siteTemplate.zip">
                  '. $downloadBtn .'
                </form>';

        //Create form row
        $formRow = BootstrapGenerator::genRow($form, null, null, null);

        //Create container
        $container = BootstrapGenerator::genContainer($titleRow . $formTitleRow . $formRow,false, null, null, null);

        //Return content container
        return $container;
    }

    /**
     * Set HTML Document footeer
     */
    protected function setFooter()
    {
      $formRow = "";

        //return form
        return $formRow;
    }
}
