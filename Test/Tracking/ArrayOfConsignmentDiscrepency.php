<?php

namespace UkMail\Test\Tracking;

class ArrayOfConsignmentDiscrepency
{

    /**
     * @var ConsignmentDiscrepency[] $ConsignmentDiscrepency
     */
    protected $ConsignmentDiscrepency = null;

    /**
     * @param ConsignmentDiscrepency[] $ConsignmentDiscrepency
     */
    public function __construct(array $ConsignmentDiscrepency = null)
    {
      $this->ConsignmentDiscrepency = $ConsignmentDiscrepency;
    }

    /**
     * @return ConsignmentDiscrepency[]
     */
    public function getConsignmentDiscrepency()
    {
      return $this->ConsignmentDiscrepency;
    }

    /**
     * @param ConsignmentDiscrepency[] $ConsignmentDiscrepency
     * @return \UkMail\Test\Tracking\ArrayOfConsignmentDiscrepency
     */
    public function setConsignmentDiscrepency(array $ConsignmentDiscrepency)
    {
      $this->ConsignmentDiscrepency = $ConsignmentDiscrepency;
      return $this;
    }

}
