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

        /* Create fieldset */
        $fieldset = $this->generateFieldset();

        //Get form
        $form = $this->generateForm();

        //Create container
        $container = BootstrapGenerator::genContainer($titleRow . $formTitleRow . $fieldsetRow . $formRow,false, null, null, null);

        //Return content container
        return $container;
    }

    /**
     * Set HTML Document footeer
     */
    protected function setFooter()
    {
        return "";
    }

    /**
     * Generate fieldset
     */
     private function generateFieldset()
     {
       //Create project name input
       $projectNameInput = '<label>Nom du projet : <input type="text" name="projectName" id="projectName"/></label>';
       //Create project URL input
       $projectURLRootInput = '<label>URL racine du projet : <input type="text" name="projectURLRoot" id="projectURLRoot"/></label>';

       //Create fieldset
       $fieldset = '<fieldset>
                       <legend>
                         Informations sur le projet
                       </legend>
                       ' . $projectNameInput . $projectURLRootInput . '
                   </fieldset>';

       //Create fieldset col div
       $fieldsetColDiv = BootstrapGenerator::genColDiv($fieldset, "md-12", null, null, null);

       //Create fieldset row
       $fieldsetRow = BootstrapGenerator::genRow($fieldsetColDiv, null, null, null);

       //Return fieldset row
       return $fieldsetRow;
     }

    /**
     * Generate form function
     * @param string $content \form content
     */
     private function generateForm($content)
     {
       //Create download button
       $downloadBtn = BootstrapGenerator::genButton('Récupérer le projet', 'submit', null, null, null);

       //Create form
       $form = '<form method="POST" action="">
                 '. $content . $downloadBtn .'
               </form>';

       //Create form row
       $formRow = BootstrapGenerator::genRow($form, null, null, null);

       //Return form row
       return $formRow;
     }
}
