<?php

namespace Excellence\Operation\Controller\Operation;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;

    public function __construct(
       \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
	
    public function execute()
    {
        $this->resultPage = $this->resultPageFactory->create();  
		return $this->resultPage;
    }
    
}