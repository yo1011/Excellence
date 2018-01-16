<?php
namespace Excellence\Operation\Model\ResourceModel\Crud;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Excellence\Operation\Model\Crud','Excellence\Operation\Model\ResourceModel\Crud');
    }
}
