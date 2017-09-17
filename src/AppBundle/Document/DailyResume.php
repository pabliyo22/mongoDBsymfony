<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class DailyResume {

    /**
     * @MongoDB\Id
     */
    private $id;

    /** @MongoDB\Field(type="string") */
    private $egm;

    /** @MongoDB\Field(type="string") */
    private $nroSec = 1;

    /** @MongoDB\Field(type="string") */
    private $nroPres = 1;

    /** @MongoDB\Field(type="string") */
    private $denomEGM;

    /** @MongoDB\ReferenceMany(targetDocument="Counters", cascade="all") */
    private $FirstCounter;

    /** @MongoDB\ReferenceMany(targetDocument="Counters", cascade="all") */
    private $LastCounter;

    /**
     *
     * @MongoDB\Field(type="timestamp")
     */
    private $dateCratedRecord;

    /** @MongoDB\ReferenceMany(targetDocument="State", cascade="all") */
    private $state;

    /** @MongoDB\Field(type="float") */
    private $win;

    public function __construct() {
        $this->FirstCounter = new \Doctrine\Common\Collections\ArrayCollection();
        $this->LastCounter = new \Doctrine\Common\Collections\ArrayCollection();
        $this->state = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set egm
     *
     * @param string $egm
     * @return $this
     */
    public function setEgm($egm) {
        $this->egm = $egm;
        return $this;
    }

    /**
     * Get egm
     *
     * @return string $egm
     */
    public function getEgm() {
        return $this->egm;
    }

    /**
     * Set nroSec
     *
     * @param string $nroSec
     * @return $this
     */
    public function setNroSec($nroSec) {
        $this->nroSec = $nroSec;
        return $this;
    }

    /**
     * Get nroSec
     *
     * @return string $nroSec
     */
    public function getNroSec() {
        return $this->nroSec;
    }

    /**
     * Set nroPres
     *
     * @param string $nroPres
     * @return $this
     */
    public function setNroPres($nroPres) {
        $this->nroPres = $nroPres;
        return $this;
    }

    /**
     * Get nroPres
     *
     * @return string $nroPres
     */
    public function getNroPres() {
        return $this->nroPres;
    }

    /**
     * Set denomEGM
     *
     * @param string $denomEGM
     * @return $this
     */
    public function setDenomEGM($denomEGM) {
        $this->denomEGM = $denomEGM;
        return $this;
    }

    /**
     * Get denomEGM
     *
     * @return string $denomEGM
     */
    public function getDenomEGM() {
        return $this->denomEGM;
    }

    /**
     * Add firstCounter
     *
     * @param AppBundle\Document\Counters $firstCounter
     */
    public function addFirstCounter(\AppBundle\Document\Counters $firstCounter) {
        $this->FirstCounter[] = $firstCounter;
    }

    /**
     * Remove firstCounter
     *
     * @param AppBundle\Document\Counters $firstCounter
     */
    public function removeFirstCounter(\AppBundle\Document\Counters $firstCounter) {
        $this->FirstCounter->removeElement($firstCounter);
    }

    /**
     * Get firstCounter
     *
     * @return \Doctrine\Common\Collections\Collection $firstCounter
     */
    public function getFirstCounter() {
        return $this->FirstCounter;
    }

    /**
     * Add lastCounter
     *
     * @param AppBundle\Document\Counters $lastCounter
     */
    public function addLastCounter(\AppBundle\Document\Counters $lastCounter) {
        $this->LastCounter[] = $lastCounter;
    }

    /**
     * Remove lastCounter
     *
     * @param AppBundle\Document\Counters $lastCounter
     */
    public function removeLastCounter(\AppBundle\Document\Counters $lastCounter) {
        $this->LastCounter->removeElement($lastCounter);
    }

    /**
     * Get lastCounter
     *
     * @return \Doctrine\Common\Collections\Collection $lastCounter
     */
    public function getLastCounter() {
        return $this->LastCounter;
    }

    /**
     * Set dateCratedRecord
     *
     * @param timestamp $dateCratedRecord
     * @return $this
     */
    public function setDateCratedRecord($dateCratedRecord) {
        $this->dateCratedRecord = $dateCratedRecord;
        return $this;
    }

    /**
     * Get dateCratedRecord
     *
     * @return timestamp $dateCratedRecord
     */
    public function getDateCratedRecord() {
        return $this->dateCratedRecord;
    }

    /**
     * Add state
     *
     * @param AppBundle\Document\State $state
     */
    public function addState(\AppBundle\Document\State $state) {
        $this->state[] = $state;
    }

    /**
     * Remove state
     *
     * @param AppBundle\Document\State $state
     */
    public function removeState(\AppBundle\Document\State $state) {
        $this->state->removeElement($state);
    }

    /**
     * Get state
     *
     * @return \Doctrine\Common\Collections\Collection $state
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Set win
     *
     * @param float $win
     * @return $this
     */
    public function setWin($win) {
        $this->win = $win;
        return $this;
    }

    /**
     * Get win
     *
     * @return float $win
     */
    public function getWin() {
        return $this->win;
    }

}
