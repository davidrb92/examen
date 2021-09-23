<?php

namespace Hiberus\HiberusRebollar\Model\ResourceModel\Examen;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Hiberus\HiberusRebollar\Model;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model\Examen::class, Model\ResourceModel\Examen::class);
    }

}
