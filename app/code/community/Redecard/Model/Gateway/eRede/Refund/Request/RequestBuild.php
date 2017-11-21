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

class LeandroRosa_Redecard_Model_Gateway_eRede_Refund_Request_RequestBuild
{
    protected $request;

    public function __construct()
    {
        /** @var LeandroRosa_Redecard_Model_Gateway_eRede_Refund_Request_Request $request */
        $request = Mage::getModel('leandrorosa_redecard/gateway_eRede_refund_request_request');
        $this->setRequest($request);
    }

    /**
     * @inheritDoc
     * @return LeandroRosa_Redecard_Model_Gateway_eRede_Refund_Request_Request
     */
    public function build(array $subject = [])
    {
        if(! isset($subject['order']) || ! $subject['order'] instanceof Mage_Sales_Model_Order) {
            Mage::throwException(Mage::helper('leandrorosa_redecard')->__('Order is not provider'));
        }

        /** @var Mage_Sales_Model_Order $order */
        $order = $subject['order'];

        $this->getRequest()
            ->setAmount($order->getGrandTotal() * 100);

        return $this->getRequest();
    }

    /**
     * @return LeandroRosa_Redecard_Model_Gateway_eRede_Refund_Request_Request
     */
    protected function getRequest()
    {
        return $this->request;
    }

    /**
     * @param LeandroRosa_Redecard_Model_Gateway_eRede_Refund_Request_Request $request
     * @return $this
     */
    protected function setRequest(LeandroRosa_Redecard_Model_Gateway_eRede_Refund_Request_Request $request)
    {
        $this->request = $request;
        return $this;
    }
}
