<?php

namespace Excellence\Operation\Block\Operation;
use Excellence\Operation\Block\BaseBlock;
class Index extends BaseBlock
{
   public function information(){
		$test = $this->_crudFactory->create();
	    $collection = $test->getCollection();
	    foreach($collection as $row){
	     	 $information[] = $row->getData();
	     }
     return $information;
    }
}
