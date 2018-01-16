<?php

namespace Excellence\Operation\Block\Form;
use Excellence\Operation\Block\BaseBlock;
class Index extends BaseBlock
{
	public function getUrl($route = '', $params = [])
  {
    return $this->_urlBuilder->getUrl($route, $params);
  }
 
   public function getUserData()
  {
     return $this->_coreRegistry->registry('data');
  }

   public function unregisterData()
  {
       return  $this->_coreRegistry->unregister('data');
  }
}