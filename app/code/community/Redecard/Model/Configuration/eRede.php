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

class LeandroRosa_Redecard_Model_Configuration_eRede
{
    const URL_PROD                  = 'payment/leandrorosa_redecard/uri_prod';
    const URL_SANDBOX               = 'payment/leandrorosa_redecard/uri_sandbox';
    const IS_SANDBOX_ENVIRONMENT    = 'payment/leandrorosa_redecard/is_sandbox_environment';
    const TOKEN                     = 'payment/leandrorosa_redecard/token';
    const ACCOUNT_ID                = 'payment/leandrorosa_redecard/account_id';
    const CAPTURE                   = 'payment/leandrorosa_redecard/capture';
    const SOFT_DESCRIPTION          = 'payment/leandrorosa_redecard/soft_description';
    const PLACE_WITH_ERROR          = 'payment/leandrorosa_redecard/place_with_error';

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return bool
     */
    public function isSandboxEnvironment($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }

        return (bool) Mage::getStoreConfig(static::IS_SANDBOX_ENVIRONMENT, $store);
    }

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return string
     */
    public function getToken($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }
        return Mage::getStoreConfig(static::TOKEN, $store);
    }

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return int
     */
    public function getAccountId($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }
        return (int) Mage::getStoreConfig(static::ACCOUNT_ID, $store);
    }

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return bool
     */
    public function getCapture($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }
        return (bool) Mage::getStoreConfig(static::CAPTURE, $store);
    }

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return string
     */
    public function getSoftDescription($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }
        return Mage::getStoreConfig(static::SOFT_DESCRIPTION, $store);
    }

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return string
     */
    public function getUrl($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }

        if ($this->isSandboxEnvironment()) {
            return Mage::getStoreConfig(static::URL_SANDBOX, $store);
        }

        return Mage::getStoreConfig(static::URL_PROD, $store);
    }

    /**
     * @param null|string|bool|int|Mage_Core_Model_Store $store
     * @return bool
     */
    public function placeWithError($store = null)
    {
        if (! $store) {
            $store = Mage::app()->getStore();
        }

        return (bool) Mage::getStoreConfig(static::PLACE_WITH_ERROR, $store);
    }
}
