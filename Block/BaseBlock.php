<?php

namespace Excellence\Operation\Block;
use Magento\Framework\UrlFactory;
class BaseBlock extends \Magento\Framework\View\Element\Template
{
    protected $_crudFactory;
    
    public $_coreRegistry;

    public function __construct( \Magento\Framework\Registry $coreRegistry,
    	\Magento\Framework\View\Element\Template\Context $context,
    	\Excellence\Operation\Model\CrudFactory $crudFactory
	)
    {
    	$this->_coreRegistry = $coreRegistry;
    	$this->_crudFactory = $crudFactory;
	parent::__construct($context);
	
    }
}
