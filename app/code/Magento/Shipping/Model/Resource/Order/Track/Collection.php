<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Shipping\Model\Resource\Order\Track;

/**
 * Flat sales order shipment tracks collection
 *
 */
class Collection extends \Magento\Sales\Model\Resource\Order\Shipment\Track\Collection
{
    /**
     * Model initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magento\Shipping\Model\Order\Track', 'Magento\Sales\Model\Resource\Order\Shipment\Track');
    }
}
