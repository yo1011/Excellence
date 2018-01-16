<?php
namespace Excellence\Operation\Controller\Form;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    protected $_coreRegistry;

    public function __construct(
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_coreRegistry = $coreRegistry;
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    { 
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $registration = $objectManager->create('Excellence\Operation\Model\Crud');
       if( !empty($_POST['send_data']) || empty($this->getRequest()->getParams())){ 
        $data = $this->getRequest()->getPostValue();
        if(isset($data['send_data'])){

            $registration->setData($data);

            if (!empty($_POST['excellence_operation_crud_id'])) {
               $registration->setId($_POST['excellence_operation_crud_id'])->save();
               $this->messageManager->addSuccess( __('Your data is updated.') );
            }else{
               $registration->save();
               $this->messageManager->addSuccess( __('Thanks for registering with us.') );
            }
            $this->_redirect('operation/operation/index');
            return;
         }
         return $this->resultPageFactory->create();
       }else{
        $data = $this->getRequest()->getParams('id');
        if( isset($data['id']) ){
            $id=$data['id'];
            $registration->load($id);
            $data = $registration->getData();
            $this->_coreRegistry->register('data',$data);
            return $this->resultPageFactory->create();
        } else{
            $id=$data['delete_id'];
            $registration->load($id);
            $registration->delete();
            $this->_redirect('operation/operation/index');
            return;
        }

       }
    } 
}