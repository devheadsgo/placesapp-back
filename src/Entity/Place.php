<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="place")
 */
class Place{

    use \App\Traits\Datable;
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Geopoint", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="geopoint_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $geopoint;
}