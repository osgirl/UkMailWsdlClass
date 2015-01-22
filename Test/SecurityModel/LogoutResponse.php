<?php

namespace UkMail/Test/SecurityModel;

class LogoutResponse
{

    /**
     * @var UKMLogoutResponse $LogoutResult
     */
    protected $LogoutResult = null;

    /**
     * @param UKMLogoutResponse $LogoutResult
     */
    public function __construct($LogoutResult = null)
    {
      $this->LogoutResult = $LogoutResult;
    }

    /**
     * @return UKMLogoutResponse
     */
    public function getLogoutResult()
    {
      return $this->LogoutResult;
    }

    /**
     * @param UKMLogoutResponse $LogoutResult
     * @return \UkMail/Test/SecurityModel\LogoutResponse
     */
    public function setLogoutResult($LogoutResult)
    {
      $this->LogoutResult = $LogoutResult;
      return $this;
    }

}
