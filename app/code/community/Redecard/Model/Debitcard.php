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

class LeandroRosa_Redecard_Model_Debitcard extends LeandroRosa_Redecard_Model_PaymentAbstract
{
    const CODE          = 'leandrorosa_redecard_debitcard';
    const PAYMENT_TYPE  = LeandroRosa_Redecard_Model_Gateway_eRede_Authorize_Request_RequestBuild::DEBIT_PAYMENT_TYPE;

    protected $_formBlockType           = 'leandrorosa_redecard/debitcard_form';
    protected $_infoBlockType           = 'leandrorosa_redecard/debitcard_info';
    protected $_code                    = self::CODE;
}
