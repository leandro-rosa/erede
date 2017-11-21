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
abstract class LeandroRosa_Redecard_Model_Gateway_Client_TransportBuildAbstract
{
    protected $transport;
    protected $configuration;
    protected $helper;

    public function __construct()
    {
        /** @var LeandroRosa_Redecard_Model_Gateway_Client_Transport $transport */
        $transport = Mage::getModel('leandrorosa_redecard/gateway_client_transport');

        /** @var LeandroRosa_Redecard_Model_Configuration_eRede $configuration */
        $configuration = Mage::getModel('leandrorosa_redecard/configuration_eRede');

        /** @var LeandroRosa_Redecard_Helper_Data $helper */
        $helper = Mage::helper('leandrorosa_redecard');

        $this->setHelper($helper);
        $this->setTransport($transport);
        $this->setConfiguration($configuration);
    }

    /**
     * @param array $subject
     * @return LeandroRosa_Redecard_Model_Gateway_Client_Transport
     */
    public function build(array $subject = [])
    {
        $this->getTransport()
            ->setMethod($this->getMethod())
            ->setParams($this->getParams($subject))
            ->setUsername($this->getConfiguration()->getAccountId())
            ->setPassword($this->getConfiguration()->getToken())
            ->setUri($this->getConfiguration()->getUrl() . $this->getEndpoint())
            ->setHeaders([
                'Content-type' => 'application/json; charset=utf-8'
            ]);

        return $this->getTransport();
    }

    /**
     * @return string
     */
    protected abstract function getEndpoint();

    /**
     * @param array $subject
     * @return array
     */
    protected abstract function getParams(array $subject = []);

    /**
     * @return string
     */
    protected abstract function getMethod();

    /**
     * @return LeandroRosa_Redecard_Model_Gateway_Client_Transport
     */
    protected function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param LeandroRosa_Redecard_Model_Gateway_Client_Transport $transport
     * @return $this
     */
    protected function setTransport(LeandroRosa_Redecard_Model_Gateway_Client_Transport $transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return LeandroRosa_Redecard_Model_Configuration_eRede
     */
    protected function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param LeandroRosa_Redecard_Model_Configuration_eRede $configuration
     * @return $this
     */
    protected function setConfiguration(LeandroRosa_Redecard_Model_Configuration_eRede $configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * @return LeandroRosa_Redecard_Helper_Data
     */
    protected function getHelper()
    {
        return $this->helper;
    }

    /**
     * @param LeandroRosa_Redecard_Helper_Data $helper
     * @return $this
     */
    protected function setHelper(LeandroRosa_Redecard_Helper_Data $helper)
    {
        $this->helper = $helper;
        return $this;
    }


}