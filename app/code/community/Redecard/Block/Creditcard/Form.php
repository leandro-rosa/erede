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
class LeandroRosa_Redecard_Block_Creditcard_Form extends LeandroRosa_Redecard_Block_AbstractForm
{
    protected $configuration;
    protected $quote;

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        parent::_construct();

        /** @var LeandroRosa_Redecard_Model_Configuration_Creditcard $configuration */
        $configuration = Mage::getModel('leandrorosa_redecard/configuration_creditcard');

        /** @var Mage_Sales_Model_Quote $quote */
        $quote = Mage::getSingleton('checkout/cart')->getQuote();

        $this->setConfiguration($configuration);
        $this->setQuote($quote);
        $this->setTemplate('leandrorosa/redecard/creditcard/form.phtml');
    }

    /**
     * @return string[]
     */
    public function getInstallments()
    {
        $result = [];

        for($i=1; $i<=$this->getConfiguration()->getMaxInstallmentQty(); $i++) {
            $value = $this->getQuote()->getGrandTotal() / $i;
            if ($value < $this->getConfiguration()->getMinInstallmentValue()) {
                break;
            }

            $result[$i] = $this->getInstallmentLabel($i);
        }

        if (empty($result)) {
            $result = [
                1 => $this->getInstallmentLabel(1)
            ];
        }

        return $result;
    }

    protected function getInstallmentLabel($qty)
    {
        $value = $this->getQuote()->getGrandTotal() / $qty;

        return Mage::helper('leandrorosa_redecard')->__(
            '%s x %s',
            $qty,
            Mage::helper('core')->formatCurrency($value, false)
        );

    }
    /**
     * @return LeandroRosa_Redecard_Model_Configuration_Creditcard
     */
    protected function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param LeandroRosa_Redecard_Model_Configuration_Creditcard $configuration
     * @return $this
     */
    protected function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * @return Mage_Sales_Model_Quote
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @param Mage_Sales_Model_Quote $quote
     * @return $this
     */
    protected function setQuote(Mage_Sales_Model_Quote $quote)
    {
        $this->quote = $quote;
        return $this;
    }


}
