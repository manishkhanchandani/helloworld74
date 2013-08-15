<?php

namespace Shaklee\PWSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pws
 */
class Pws
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $oRGENTITYID;

    /**
     * @var string
     */
    private $pATHNAME;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set oRGENTITYID
     *
     * @param integer $oRGENTITYID
     * @return Pws
     */
    public function setORGENTITYID($oRGENTITYID)
    {
        $this->oRGENTITYID = $oRGENTITYID;
    
        return $this;
    }

    /**
     * Get oRGENTITYID
     *
     * @return integer 
     */
    public function getORGENTITYID()
    {
        return $this->oRGENTITYID;
    }

    /**
     * Set pATHNAME
     *
     * @param string $pATHNAME
     * @return Pws
     */
    public function setPATHNAME($pATHNAME)
    {
        $this->pATHNAME = $pATHNAME;
    
        return $this;
    }

    /**
     * Get pATHNAME
     *
     * @return string 
     */
    public function getPATHNAME()
    {
        return $this->pATHNAME;
    }
}
