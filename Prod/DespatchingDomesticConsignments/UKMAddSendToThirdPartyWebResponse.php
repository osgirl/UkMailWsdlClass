<?php

namespace UkMail\Prod\DespatchingDomesticConsignments;

class UKMAddSendToThirdPartyWebResponse extends UKMWebResponse
{

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @param UKMResultState $Result
     */
    public function __construct($Result = null)
    {
      parent::__construct($Result);
    }

    /**
     * @return string
     */
    public function getConsignmentNumber()
    {
      return $this->ConsignmentNumber;
    }

    /**
     * @param string $ConsignmentNumber
     * @return \UkMail\Prod\DespatchingDomesticConsignments\UKMAddSendToThirdPartyWebResponse
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

}
