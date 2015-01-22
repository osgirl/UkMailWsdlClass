<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class AddPacketConsignmentResponse
{

    /**
     * @var UKMAddPacketConsignmentWebResponse $AddPacketConsignmentResult
     */
    protected $AddPacketConsignmentResult = null;

    /**
     * @param UKMAddPacketConsignmentWebResponse $AddPacketConsignmentResult
     */
    public function __construct($AddPacketConsignmentResult = null)
    {
      $this->AddPacketConsignmentResult = $AddPacketConsignmentResult;
    }

    /**
     * @return UKMAddPacketConsignmentWebResponse
     */
    public function getAddPacketConsignmentResult()
    {
      return $this->AddPacketConsignmentResult;
    }

    /**
     * @param UKMAddPacketConsignmentWebResponse $AddPacketConsignmentResult
     * @return \UkMail\Test\DespatchingDomesticConsignments\AddPacketConsignmentResponse
     */
    public function setAddPacketConsignmentResult($AddPacketConsignmentResult)
    {
      $this->AddPacketConsignmentResult = $AddPacketConsignmentResult;
      return $this;
    }

}
