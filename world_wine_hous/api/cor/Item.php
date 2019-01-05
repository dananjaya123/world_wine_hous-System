<?php
/**
 * Created by IntelliJ IDEA.
 * User: asitha
 * Date: 12/7/2018
 * Time: 8:59 AM
 */

class item
{
    private $ItemCode;
    private $Type;
    private $Countries;
    private $Brand;
    private $UnitPrice;
    private $Size;
    private $Age;
    private $ABV;

    /**
     * item constructor.
     * @param $ItemCode
     * @param $Type
     * @param $Countries
     * @param $Brand
     * @param $UnitPrice
     * @param $Size
     * @param $Age
     * @param $ABV
     */
    public function __construct($ItemCode, $Type, $Countries, $Brand, $UnitPrice, $Size, $Age, $ABV)
    {
        $this->ItemCode = $ItemCode;
        $this->Type = $Type;
        $this->Countries = $Countries;
        $this->Brand = $Brand;
        $this->UnitPrice = $UnitPrice;
        $this->Size = $Size;
        $this->Age = $Age;
        $this->ABV = $ABV;
    }

    /**
     * @return mixed
     */
    public function getItemCode()
    {
        return $this->ItemCode;
    }

    /**
     * @param mixed $ItemCode
     */
    public function setItemCode($ItemCode)
    {
        $this->ItemCode = $ItemCode;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }

    /**
     * @return mixed
     */
    public function getCountries()
    {
        return $this->Countries;
    }

    /**
     * @param mixed $Countries
     */
    public function setCountries($Countries)
    {
        $this->Countries = $Countries;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->Brand;
    }

    /**
     * @param mixed $Brand
     */
    public function setBrand($Brand)
    {
        $this->Brand = $Brand;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param mixed $UnitPrice
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param mixed $Size
     */
    public function setSize($Size)
    {
        $this->Size = $Size;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * @param mixed $Age
     */
    public function setAge($Age)
    {
        $this->Age = $Age;
    }

    /**
     * @return mixed
     */
    public function getABV()
    {
        return $this->ABV;
    }

    /**
     * @param mixed $ABV
     */
    public function setABV($ABV)
    {
        $this->ABV = $ABV;
    }

}
