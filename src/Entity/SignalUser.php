<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="signal_user")
 */
class SignalUser{

    use \App\Traits\Datable;
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userSignals", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Signal", inversedBy="userSignals", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="signal_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $signal;
}