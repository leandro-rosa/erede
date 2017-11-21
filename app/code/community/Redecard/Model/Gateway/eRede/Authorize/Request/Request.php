<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */


/**
 * @category   LeandroRosa
 * @package    LeandroRosa_Redecard
 * @author     Leandro Rosa <dev.leandrorosa@gmail.com>
 */

class LeandroRosa_Redecard_Model_Gateway_eRede_Authorize_Request_Request
    extends Varien_Object
{
    const CAPTURE                   = 'capture';
    const PAYMENT_TYPE              = 'payment_type';
    const ORDER_ID                  = 'order_id';
    const AMOUNT                    = 'amount';
    const INSTALLMENT               = 'installment';
    const CARD_HOLDER_NAME          = 'card_holder_name';
    const CARD_NUMBER               = 'card_number';
    const EXPIRATION_MONTH          = 'expiration_month';
    const EXPIRATION_YEAR           = 'expiration_year';
    const SECURITY_CODE             = 'security_code';
    const SOFT_DESCRIPTION          = 'soft_description';
    const IS_RECURRING              = 'is_recurring';
    const DISTRIBUTOR_AFFILIATION   = 'distributor_affiliation';

    /**
     * @return bool
     */
    public function getCapture()
    {
        return (bool) $this->getData(static::CAPTURE);
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->getData(static::PAYMENT_TYPE);
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->getData(static::ORDER_ID);
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return (int) $this->getData(static::AMOUNT);
    }

    /**
     * @return int
     */
    public function getInstallment()
    {
        return $this->getData(static::INSTALLMENT);
    }

    /**
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->getData(static::CARD_HOLDER_NAME);
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->getData(static::CARD_NUMBER);
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->getData(static::EXPIRATION_MONTH);
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->getData(static::EXPIRATION_YEAR);
    }

    /**
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->getData(static::SECURITY_CODE);
    }

    /**
     * @return string
     */
    public function getSoftDescription()
    {
        return $this->getData(static::SOFT_DESCRIPTION);
    }

    /**
     * @return bool
     */
    public function getIsRecurring()
    {
        return (bool) $this->getData(static::IS_RECURRING);
    }

    /**
     * @return string
     */
    public function getDistributorAffiliation()
    {
        return $this->getData(static::DISTRIBUTOR_AFFILIATION);
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setCapture($value)
    {
        $this->setData(static::CAPTURE, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPaymentType($value)
    {
        $this->setData(static::PAYMENT_TYPE, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOrderId($value)
    {
        $this->setData(static::ORDER_ID, $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->setData(static::AMOUNT, $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setInstallment($value)
    {
        $this->setData(static::INSTALLMENT, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardHolderName($value)
    {
        $this->setData(static::CARD_HOLDER_NAME, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardNumber($value)
    {
        $this->setData(static::CARD_NUMBER, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setExpirationMonth($value)
    {
        $this->setData(static::EXPIRATION_MONTH, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setExpirationYear($value)
    {
        $this->setData(static::EXPIRATION_YEAR, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSecurityCode($value)
    {
        $this->setData(static::SECURITY_CODE, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSoftDescription($value)
    {
        $this->setData(static::SOFT_DESCRIPTION, $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setIsRecurring($value)
    {
        $this->setData(static::IS_RECURRING, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDistributorAffiliation($value)
    {
        $this->setData(static::DISTRIBUTOR_AFFILIATION, $value);
        return $this;
    }
}
