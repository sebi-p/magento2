<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Catalog\Model\Layer\Search;

use Magento\Catalog\Model\Layer\ItemCollectionProviderInterface;
use Magento\Catalog\Model\Resource\Product\CollectionFactory;

class ItemCollectionProvider implements ItemCollectionProviderInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @param \Magento\Catalog\Model\Category $category
     * @return \Magento\Catalog\Model\Resource\Product\Collection
     */
    public function getCollection(\Magento\Catalog\Model\Category $category)
    {
        return $this->collectionFactory->create();
    }
}
