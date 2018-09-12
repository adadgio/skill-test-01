<?php

namespace AppBundle\Listener;

use Doctrine\ORM\EntityManager;
use AppBundle\Event\ExampleEvent;

/**
 * Example à compléter...
 */
class ExampleEventListener
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function onGetUser(ExampleEvent $event)
    {

    }

    public function onCreateUser(ExampleEvent $event)
    {

    }
}
