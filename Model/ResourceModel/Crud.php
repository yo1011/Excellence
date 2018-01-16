<?php
namespace Excellence\Operation\Model\ResourceModel;
class Crud extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('excellence_operation_crud','excellence_operation_crud_id');
    }
}
