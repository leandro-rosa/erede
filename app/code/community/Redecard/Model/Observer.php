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

class LeandroRosa_Redecard_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     * @return $this
     */
    public function redirect3DS(Varien_Event_Observer $observer)
    {
        if (Mage::getSingleton('checkout/session')->getWasRedirect()) {
            Mage::getSingleton('checkout/session')->setWasRedirect(false);
            return $this;
        }

        if (! Mage::getSingleton('checkout/session')->getLastSuccessQuoteId()) {
            return $this;
        }

        $additionalInformation = Mage::getSingleton('checkout/session')
            ->getLastRealOrder()
            ->getPayment()
            ->getAdditionalInformation();

        $response = new LeandroRosa_Redecard_Model_Gateway_eRede_Authorize_Response_Response($additionalInformation);
        $threeDSecure = $response->getThreeDSecure();

        if ($threeDSecure->getUrl()) {
            Mage::getSingleton('checkout/session')->setWasRedirect(true);
            Mage::app()->getFrontController()->getResponse()->setRedirect($threeDSecure->getUrl());
            Mage::app()->getResponse()->sendResponse();
            exit();
        }

        return $this;
    }
}
