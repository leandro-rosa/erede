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

class  LeandroRosa_Redecard_Model_Gateway_Client_Client
{
    protected $client;

    public function __construct()
    {
        $this->setClient(new Zend_Http_Client());
    }

    /**
     * @param LeandroRosa_Redecard_Model_Gateway_Client_Transport $transport
     * @return Zend_Http_Response
     */
    public function send(LeandroRosa_Redecard_Model_Gateway_Client_Transport $transport)
    {
        $this->getClient()
            ->setAuth($transport->getUsername(), $transport->getPassword())
            ->setUri($transport->getUri())
            ->setMethod($transport->getMethod())
            ->setHeaders($transport->getHeaders());


        if (! empty($transport->getParams())) {
            $json = \json_encode($transport->getParams());
            $this->getClient()->setRawData($json, 'application/json');
        }

        try {
            /** @var Zend_Http_Response $httpResponse */
            $httpResponse = $this->getClient()->request();
        } catch (\Exception $e) {
            Mage::throwException($e->getMessage());
        }

        Mage::log("Request: " . $this->getClient()->getLastRequest(), null, 'redecard.log', true);
        Mage::log("Response: " . $this->getClient()->getLastResponse(), null, 'redecard.log', true);

        if ($httpResponse->getStatus() >= 400) {
            Mage::throwException(Mage::helper('leandrorosa_redecard')->__('Error Connection'));
        }

        return $httpResponse;
    }

    /**
     * @return Zend_Http_Client
     */
    protected function getClient()
    {
        return $this->client;
    }

    /**
     * @param Zend_Http_Client $client
     * @return $this
     */
    protected function setClient(Zend_Http_Client $client)
    {
        $this->client = $client;
        return $this;
    }
}