<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('life_reminder_user_homepage', new Route('/hello/{name}', array(
    '_controller' => 'LifeReminderUserBundle:Default:index',
)));

return $collection;
