<?php
namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;

class EntityPrePersistListener
{
    public function prePersist(LifeCycleEventArgs $args)
    {
        $entity = $args->getEntity();

        //Verificamos si la entidad tiene implementado el trait Trackeable
        if(in_array('App\Traits\Datable', class_uses($entity))){
            $entity->setRegisterAt(new \DateTime());
        }
    }
}