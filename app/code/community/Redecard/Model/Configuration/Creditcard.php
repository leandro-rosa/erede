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

class LeandroRosa_Redecard_Model_Configuration_Creditcard
{
    const MAX_INSTALLMENTS_QTY      = 'payment/leandrorosa_redecard_creditcard/max_installments_qty';
    const MIN_INSTALLMENTS_VALUE    = 'payment/leandrorosa_redecard_creditcard/min_installments_value';
    const THREE_D_SECURE            = 'payment/leandrorosa_redecard_creditcard/three_d_secure';

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return int
     */
    public function getMaxInstallmentQty($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }
        return (int) Mage::getStoreConfig(static::MAX_INSTALLMENTS_QTY, $store);
    }

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return float
     */
    public function getMinInstallmentValue($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }
        return (float) Mage::getStoreConfig(static::MIN_INSTALLMENTS_VALUE, $store);
    }

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return bool
     */
    public function getThreeDSecure($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }
        return (bool) Mage::getStoreConfig(static::THREE_D_SECURE, $store);
    }
}
