<?php
namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;

class EntityPreUpdateListener
{
    public function preUpdate(LifeCycleEventArgs $args)
    {
        $entity = $args->getEntity();

        //Verificamos si la entidad tiene implementado el trait Trackeable
        if(in_array('App\Traits\Datable', class_uses($entity))){
            $entity->setUpdatedAt(new \DateTime());
        }
    }
}