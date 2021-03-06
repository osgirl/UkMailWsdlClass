<?php

namespace UkMail\Test\Tracking;

class GetFullConsignmentDetailsPodV2
{

    /**
     * @var string $CardCode
     */
    protected $CardCode = null;

    /**
     * @var string $PodDescription
     */
    protected $PodDescription = null;

    /**
     * @var int $PodQuantity
     */
    protected $PodQuantity = null;

    /**
     * @var int $PodSequence
     */
    protected $PodSequence = null;

    /**
     * @var \DateTime $PodTimeStamp
     */
    protected $PodTimeStamp = null;

    /**
     * @var string $PodRecipientName
     */
    protected $PodRecipientName = null;

    /**
     * @var string $PodDeliveryComments
     */
    protected $PodDeliveryComments = null;

    /**
     * @var string $PodDeliveryTypeCode
     */
    protected $PodDeliveryTypeCode = null;

    /**
     * @var base64Binary $PodSignatureImage
     */
    protected $PodSignatureImage = null;

    /**
     * @var base64Binary $CardedCardNumberImage
     */
    protected $CardedCardNumberImage = null;

    /**
     * @var base64Binary $CardedLocationImage
     */
    protected $CardedLocationImage = null;

    /**
     * @param string $CardCode
     * @param string $PodDescription
     * @param int $PodQuantity
     * @param int $PodSequence
     * @param \DateTime $PodTimeStamp
     * @param string $PodRecipientName
     * @param string $PodDeliveryComments
     * @param string $PodDeliveryTypeCode
     * @param base64Binary $PodSignatureImage
     * @param base64Binary $CardedCardNumberImage
     * @param base64Binary $CardedLocationImage
     */
    public function __construct($CardCode = null, $PodDescription = null, $PodQuantity = null, $PodSequence = null, \DateTime $PodTimeStamp = null, $PodRecipientName = null, $PodDeliveryComments = null, $PodDeliveryTypeCode = null, $PodSignatureImage = null, $CardedCardNumberImage = null, $CardedLocationImage = null)
    {
      $this->CardCode = $CardCode;
      $this->PodDescription = $PodDescription;
      $this->PodQuantity = $PodQuantity;
      $this->PodSequence = $PodSequence;
      $this->PodTimeStamp = $PodTimeStamp ? $PodTimeStamp->format(\DateTime::ATOM) : null;
      $this->PodRecipientName = $PodRecipientName;
      $this->PodDeliveryComments = $PodDeliveryComments;
      $this->PodDeliveryTypeCode = $PodDeliveryTypeCode;
      $this->PodSignatureImage = $PodSignatureImage;
      $this->CardedCardNumberImage = $CardedCardNumberImage;
      $this->CardedLocationImage = $CardedLocationImage;
    }

    /**
     * @return string
     */
    public function getCardCode()
    {
      return $this->CardCode;
    }

    /**
     * @param string $CardCode
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setCardCode($CardCode)
    {
      $this->CardCode = $CardCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPodDescription()
    {
      return $this->PodDescription;
    }

    /**
     * @param string $PodDescription
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setPodDescription($PodDescription)
    {
      $this->PodDescription = $PodDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getPodQuantity()
    {
      return $this->PodQuantity;
    }

    /**
     * @param int $PodQuantity
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setPodQuantity($PodQuantity)
    {
      $this->PodQuantity = $PodQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getPodSequence()
    {
      return $this->PodSequence;
    }

    /**
     * @param int $PodSequence
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setPodSequence($PodSequence)
    {
      $this->PodSequence = $PodSequence;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPodTimeStamp()
    {
      if ($this->PodTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PodTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PodTimeStamp
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setPodTimeStamp(\DateTime $PodTimeStamp)
    {
      $this->PodTimeStamp = $PodTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getPodRecipientName()
    {
      return $this->PodRecipientName;
    }

    /**
     * @param string $PodRecipientName
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setPodRecipientName($PodRecipientName)
    {
      $this->PodRecipientName = $PodRecipientName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPodDeliveryComments()
    {
      return $this->PodDeliveryComments;
    }

    /**
     * @param string $PodDeliveryComments
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setPodDeliveryComments($PodDeliveryComments)
    {
      $this->PodDeliveryComments = $PodDeliveryComments;
      return $this;
    }

    /**
     * @return string
     */
    public function getPodDeliveryTypeCode()
    {
      return $this->PodDeliveryTypeCode;
    }

    /**
     * @param string $PodDeliveryTypeCode
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setPodDeliveryTypeCode($PodDeliveryTypeCode)
    {
      $this->PodDeliveryTypeCode = $PodDeliveryTypeCode;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPodSignatureImage()
    {
      return $this->PodSignatureImage;
    }

    /**
     * @param base64Binary $PodSignatureImage
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setPodSignatureImage($PodSignatureImage)
    {
      $this->PodSignatureImage = $PodSignatureImage;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getCardedCardNumberImage()
    {
      return $this->CardedCardNumberImage;
    }

    /**
     * @param base64Binary $CardedCardNumberImage
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setCardedCardNumberImage($CardedCardNumberImage)
    {
      $this->CardedCardNumberImage = $CardedCardNumberImage;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getCardedLocationImage()
    {
      return $this->CardedLocationImage;
    }

    /**
     * @param base64Binary $CardedLocationImage
     * @return \UkMail\Test\Tracking\GetFullConsignmentDetailsPodV2
     */
    public function setCardedLocationImage($CardedLocationImage)
    {
      $this->CardedLocationImage = $CardedLocationImage;
      return $this;
    }

}
