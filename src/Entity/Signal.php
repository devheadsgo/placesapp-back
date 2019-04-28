<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="signal")
 */
class Signal{

    use \App\Traits\Datable;
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="signals", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $owner;

    /**
     * @ORM\Column(type="date", name="scheduled_date", nullable=true)
     */
    private $scheduledDate;

    /**
     * @ORM\Column(type="time", name="start_time", nullable=true)
     */
    private $startTime;

    /**
     * @ORM\Column(type="time", name="end_time", nullable=true)
     */
    private $endTime;

    /**
     * @ORM\ManyToOne(targetEntity="Place", inversedBy="inSignals", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="place_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $place;


}