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
class LeandroRosa_Redecard_Model_Gateway_eRede_Authorize_Response_ThreeDSecure
    extends Varien_Object
{
    const EMBEDDED          = 'embedded';
    const URL               = 'url';
    const RETURN_CODE       = 'returnCode';
    const RETURN_MESSAGE    = 'returnMessage';

    /**
     * @return bool
     */
    public function getEmbedded()
    {
        return (bool) $this->getData(static::EMBEDDED);
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->getData(static::URL);
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
     * @param bool $value
     * @return $this
     */
    public function setEmbedded($value)
    {
        $this->setData(static::EMBEDDED, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->setData(static::URL, $value);
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
