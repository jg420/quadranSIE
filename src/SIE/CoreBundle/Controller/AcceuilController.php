<?php
// src/SIE/CoreBundle/Controller/AcceuilController.php
namespace SIE\CoreBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcceuilController extends Controller
{
    public function indexAction()
    {   
        
    //     
        return $this->render('SIECoreBundle:Default:index.html.twig');
        
        
        
    }
}


