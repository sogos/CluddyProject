<?php

namespace Cluddy\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CluddyApplicationBundle:Default:index.html.twig', array('name' => $name));
    }
    public function welcomeAction()
    {
	    return $this->render('CluddyApplicationBundle:Default:index.html.twig', array('name' => ''));
    }
}
