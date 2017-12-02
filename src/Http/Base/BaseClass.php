<?php

namespace Serefercelik\Kuveyt\Http\Base;


class BaseClass {


    protected $name;
    protected $cardnumber;
    protected $cardexpiredatemonth;
    protected $cardcvv2;
    protected $orderid;
    protected $amount;
    protected $customerid;
    protected $cardexpiredateyear;
    protected $cardtype = "VISA";
    protected $InstallmentCount = 0;
    protected $batchid = 0;
    protected $bag = [];


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setCardNumber($cardnumber)
    {
        $this->cardnumber = $cardnumber;

        return $this;
    }

    public function getCardNumber()
    {
        return $this->cardnumber;
    }


    public function setCardExpireDateMonth($cardexpiredatemonth)
    {
        $this->cardexpiredatemonth = $cardexpiredatemonth;

        return $this;
    }

    public function getCardExpireDateMonth()
    {
        return $this->cardexpiredatemonth;
    }

    public function setCardExpireDateYear($cardexpiredateyear)
    {
        $this->cardexpiredateyear = $cardexpiredateyear;

        return $this;
    }

    public function getCardExpireDateYear()
    {
        return $this->cardexpiredateyear;
    }

    public function setCardCvv2($cardcvv2)
    {
        $this->cardcvv2 = $cardcvv2;

        return $this;
    }

    public function getCardCvv2()
    {
        return $this->cardcvv2;
    }

    public function setOrderId($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    public function getOrderId()
    {
        return $this->orderid;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount * 100;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setCustomerId($customerid)
    {
        $this->customerid = $customerid;

        return $this;

    }

    public function getCustomerId()
    {
        return $this->customerid;
    }

    public function setCardtype($cardtype)
    {
        $this->cardtype = $cardtype;

        return $this;
    }

    public function getCardtype()
    {
        return $this->cardtype;
    }

    public function setInstallmentCount($InstallmentCount)
    {
        $this->InstallmentCount = $InstallmentCount;

        return $this;
    }

    public function getInstallmentCount()
    {
        return $this->InstallmentCount;
    }

    public function setBatchId($batchid)
    {
        $this->batchid = $batchid;

        return $this;
    }

    public function getBatchId()
    {
        return $this->batchid;
    }




}
