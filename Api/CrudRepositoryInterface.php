<?php
namespace Excellence\Operation\Api;

use Excellence\Operation\Api\Data\CrudInterface;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Api\SearchCriteriaInterface;

interface CrudRepositoryInterface 
{
    public function save(CrudInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(CrudInterface $page);

    public function deleteById($id);
}
