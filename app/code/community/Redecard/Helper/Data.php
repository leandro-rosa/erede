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
class LeandroRosa_Redecard_Helper_Data extends Mage_Core_Helper_Abstract
{
    protected $configuration;

    public function __construct()
    {
        /** @var LeandroRosa_Redecard_Model_Configuration_eRede $configuration */
        $configuration = Mage::getModel('leandrorosa_redecard/configuration_eRede');
        $this->setConfiguration($configuration);
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        $accessToken = $this->getConfiguration()->getAccountId() . ":" . $this->getConfiguration()->getToken();
        return base64_encode($accessToken);
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


}