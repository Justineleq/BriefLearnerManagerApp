<?php

class register {
    private $code;
    private $dateTime;
    private $startTime;
    private $endTime;

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     */
    public function setCode($code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of dateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set the value of dateTime
     */
    public function setDateTime($dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get the value of startTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set the value of startTime
     */
    public function setStartTime($startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get the value of endTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set the value of endTime
     */
    public function setEndTime($endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }
}