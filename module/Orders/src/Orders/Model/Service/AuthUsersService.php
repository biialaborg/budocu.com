<?php

namespace Orders\Model\Service;
use Util\Model\Service\Base\AbstractService;

class AuthUsersService extends AbstractService 
{
    public function getAll()
    {
        return $this->_repository->getAll();
    }
    
}