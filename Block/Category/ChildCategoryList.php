<?php

namespace Kreativsoehne\ChildCategoryList\Block\Category;

class ChildCategoryList extends \Magento\Framework\View\Element\Template
{

    protected $_categoryFactory;
    protected $_registry;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        array $data = []
    ) {
        $this->_categoryFactory = $categoryFactory;
        $this->_registry        = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve current parent categorie's sub categories
     */
    public function getChildCategoryCollection()
    {
        $category           = $this->_categoryFactory->create();
        $parentCategoryId   = ($this->_registry->registry('current_category')->getId()) ? $this->_registry->registry('current_category')->getId() : $this->_storeManager->getStore()->getRootCategoryId();
        return $category->load($parentCategoryId)->getChildrenCategories();
    }

}
