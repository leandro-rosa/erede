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

class LeandroRosa_Redecard_Model_Gateway_Client_Transport
    extends Varien_Object
{
    const URI       = 'uri';
    const METHOD    = 'method';
    const CONFIG    = 'config';
    const HEADERS   = 'headers';
    const PARAMS    = 'params';
    const USERNAME  = 'username';
    const PASSWORD  = 'password';

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->getData(static::URI);
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->getData(static::METHOD);
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->getData(static::CONFIG);
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->getData(static::HEADERS);
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->getData(static::PARAMS);
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->getData(static::USERNAME);
    }

    public function getPassword()
    {
        return $this->getData(static::PASSWORD);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUri($value)
    {
        $this->setData(static::URI, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMethod($value)
    {
        $this->setData(static::METHOD, $value);
        return $this;
    }

    /**
     * @param array $value
     * @return $this
     */
    public function setConfig(array $value = [])
    {
        $this->setData(static::CONFIG, $value);
        return $this;
    }

    /**
     * @param array $value
     * @return $this
     */
    public function setHeaders(array $value = [])
    {
        $this->setData(static::HEADERS, $value);
        return $this;
    }

    /**
     * @param array $value
     * @return $this
     */
    public function setParams(array $value = [])
    {
        $this->setData(static::PARAMS, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUsername($value)
    {
        $this->setData(static::USERNAME, $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPassword($value)
    {
        $this->setData(static::PASSWORD, $value);
        return $this;
    }
}
