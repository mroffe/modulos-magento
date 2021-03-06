<?php
/**
 * Shipping Estimate extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   EcomDev
 * @package    EcomDev_ProductPageShipping
 * @copyright  Copyright (c) 2011 EcomDev BV (http://www.ecomdev.org)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Ivan Chepurnyi <ivan.chepurnyi@ecomdev.org>
 */

/**
 * Session model
 *
 * Using for saving the form data between estimations
 *
 */
class EcomDev_ProductPageShipping_Model_Session extends Mage_Core_Model_Session_Abstract
{
    const SESSION_NAMESPACE = 'productpageshipping';

    public function __construct()
    {
        $this->init(self::SESSION_NAMESPACE);
    }
}
