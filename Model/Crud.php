<?php
namespace Excellence\Operation\Model;
class Crud extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'excellence_operation_crud';

    protected function _construct()
    {
        $this->_init('Excellence\Operation\Model\ResourceModel\Crud');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
