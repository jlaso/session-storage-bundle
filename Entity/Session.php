<?php

namespace JLaso\SessionStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="session")
 */
class Translation
{

    /**
     * @ORM\Id
     * @ORM\Column(name="session_id", type="string", length=255)
     * @ORM\GeneratedValue
     */
    private $sessionId;

    /**
     * @ORM\column(name="session_value", type="text")
     * @Assert\NotNull()
     */
    private $sessionValue;

    /**
     * @ORM\column(name="session_time", type="int")
     * @Assert\NotNull()
     */
    private $sessionTime;

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param mixed $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return mixed
     */
    public function getSessionValue()
    {
        return $this->sessionValue;
    }

    /**
     * @param mixed $sessionValue
     */
    public function setSessionValue($sessionValue)
    {
        $this->sessionValue = $sessionValue;
    }

    /**
     * @return mixed
     */
    public function getSessionTime()
    {
        return $this->sessionTime;
    }

    /**
     * @param mixed $sessionTime
     */
    public function setSessionTime($sessionTime)
    {
        $this->sessionTime = $sessionTime;
    }

    

}