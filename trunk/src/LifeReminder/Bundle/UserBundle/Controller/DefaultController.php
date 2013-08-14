<?php

namespace LifeReminder\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LifeReminderUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
