<?php

namespace AppBundle\Document\Afip;



/**
 * AppBundle\Document\Afip\HandlerShippingEGM
 */
class HandlerShippingEGM
{
    public function __construct()
    {
        $this->state = new \Doctrine\Common\Collections\ArrayCollection();
        $this->EGMShipping = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vEmachine
     *
     * @param boolean $vEmachine
     * @return $this
     */
    public function setVEmachine($vEmachine)
    {
        $this->VEmachine = $vEmachine;
        return $this;
    }

    /**
     * Get vEmachine
     *
     * @return boolean $vEmachine
     */
    public function getVEmachine()
    {
        return $this->VEmachine;
    }

    /**
     * Set sendDate
     *
     * @param timestamp $sendDate
     * @return $this
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;
        return $this;
    }

    /**
     * Get sendDate
     *
     * @return timestamp $sendDate
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Add state
     *
     * @param AppBundle\Document\Afip\Counters $state
     */
    public function addState(\AppBundle\Document\Afip\Counters $state)
    {
        $this->state[] = $state;
    }

    /**
     * Remove state
     *
     * @param AppBundle\Document\Afip\Counters $state
     */
    public function removeState(\AppBundle\Document\Afip\Counters $state)
    {
        $this->state->removeElement($state);
    }

    /**
     * Get state
     *
     * @return \Doctrine\Common\Collections\Collection $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set accountingDate
     *
     * @param date $accountingDate
     * @return $this
     */
    public function setAccountingDate($accountingDate)
    {
        $this->accountingDate = $accountingDate;
        return $this;
    }

    /**
     * Get accountingDate
     *
     * @return date $accountingDate
     */
    public function getAccountingDate()
    {
        return $this->accountingDate;
    }

    /**
     * Add eGMShipping
     *
     * @param AppBundle\Document\Afip\DailyResume $eGMShipping
     */
    public function addEGMShipping(\AppBundle\Document\Afip\DailyResume $eGMShipping)
    {
        $this->EGMShipping[] = $eGMShipping;
    }

    /**
     * Remove eGMShipping
     *
     * @param AppBundle\Document\Afip\DailyResume $eGMShipping
     */
    public function removeEGMShipping(\AppBundle\Document\Afip\DailyResume $eGMShipping)
    {
        $this->EGMShipping->removeElement($eGMShipping);
    }

    /**
     * Get eGMShipping
     *
     * @return \Doctrine\Common\Collections\Collection $eGMShipping
     */
    public function getEGMShipping()
    {
        return $this->EGMShipping;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return string $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set winDay
     *
     * @param string $winDay
     * @return $this
     */
    public function setWinDay($winDay)
    {
        $this->winDay = $winDay;
        return $this;
    }

    /**
     * Get winDay
     *
     * @return string $winDay
     */
    public function getWinDay()
    {
        return $this->winDay;
    }

    /**
     * Set lastSendDate
     *
     * @param timestamp $lastSendDate
     * @return $this
     */
    public function setLastSendDate($lastSendDate)
    {
        $this->lastSendDate = $lastSendDate;
        return $this;
    }

    /**
     * Get lastSendDate
     *
     * @return timestamp $lastSendDate
     */
    public function getLastSendDate()
    {
        return $this->lastSendDate;
    }
}
