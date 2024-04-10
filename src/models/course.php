<?php

class Course {
    private $name;
    private $participants;
    private $startDateCourse;
    private $endDateCourse;

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of participants
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set the value of participants
     */
    public function setParticipants($participants): self
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * Get the value of startDateCourse
     */
    public function getStartDateCourse()
    {
        return $this->startDateCourse;
    }

    /**
     * Set the value of startDateCourse
     */
    public function setStartDateCourse($startDateCourse): self
    {
        $this->startDateCourse = $startDateCourse;

        return $this;
    }

    /**
     * Get the value of endDateCourse
     */
    public function getEndDateCourse()
    {
        return $this->endDateCourse;
    }

    /**
     * Set the value of endDateCourse
     */
    public function setEndDateCourse($endDateCourse): self
    {
        $this->endDateCourse = $endDateCourse;

        return $this;
    }
}