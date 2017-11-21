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

class LeandroRosa_Redecard_Model_Gateway_eRede_Refund_TransportBuild
    extends LeandroRosa_Redecard_Model_Gateway_Client_TransportBuildAbstract
{
    const ENDPOINT = 'transactions';

    protected $tid;

    /**
     * @return string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     * @return $this
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
        return $this;
    }


    /**
     * @inheritDoc
     */
    protected function getParams(array $subject = [])
    {
        if (! $subject['request']) {
            Mage::throwException(Mage::helper('leandrorosa_redecard')->__('Request is not provider'));
        }

        /** @var LeandroRosa_Redecard_Model_Gateway_eRede_Refund_Request_Request $request */
        $request = $subject['request'];

        return [
            'amount' => $request->getAmount()
        ];
    }

    /**
     * @inheritDoc
     */
    protected function getMethod()
    {
        return \Zend_Http_Client::POST;
    }

    /**
     * @inheritDoc
     */
    protected function getEndpoint()
    {
        return static::ENDPOINT . "/" . $this->getTid() . '/refunds';
    }
}