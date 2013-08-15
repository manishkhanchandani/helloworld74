<?php

namespace Shaklee\PWSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BusinessController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShakleePWSBundle:Business:index.html.twig', array());
    }
}
