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
class LeandroRosa_Redecard_Model_Gateway_eRede_Capture_Response_Response
    extends Varien_Object
{
    const REFERENCE             = 'reference';
    const TID                   = 'tid';
    const NSU                   = 'nsu';
    const AUTHORIZATION_CODE    = 'authorizationCode';
    const DATE_TIME             = 'dateTime';
    const RETURN_CODE           = 'returnCode';
    const RETURN_MESSAGE        = 'returnMessage';

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->getData(static::REFERENCE);
    }

    /**
     * @return string
     */
    public function getTid()
    {
        return $this->getData(static::TID);
    }

    /**
     * @return string
     */
    public function getNsu()
    {
        return $this->getData(static::NSU);
    }

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->getData(static::AUTHORIZATION_CODE);
    }

    /**
     * @return string
     */
    public function getDateTime()
    {
        return $this->getData(static::DATE_TIME);
    }

    /**
     * @return string
     */
    public function getReturnCode()
    {
        return $this->getData(static::RETURN_CODE);
    }

    /**
     * @return string
     */
    public function getReturnMessage()
    {
        return $this->getData(static::RETURN_MESSAGE);
    }


    /**
     * @param string $value
     * @return $this
     */
    public function setReference($value)
    {
        $this->setData(static::REFERENCE, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTid($value)
    {
        $this->setData(static::TID, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setNsu($value)
    {
        $this->setData(static::NSU, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAuthorizationCode($value)
    {
        $this->setData(static::AUTHORIZATION_CODE, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDateTime($value)
    {
        $this->setData(static::DATE_TIME, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setReturnCode($value)
    {
        $this->setData(static::RETURN_CODE, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setReturnMessage($value)
    {
        $this->setData(static::RETURN_MESSAGE, $value);
        return $this;
    }
}
