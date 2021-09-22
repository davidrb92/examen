<?php

namespace Hiberus\HiberusRebollar\Model;

use Hiberus\HiberusRebollar\Api\Data\ExamenInterface;

class Examen extends \Magento\Framework\Model\AbstractModel implements \Hiberus\HiberusRebollar\Api\Data\ExamenInterface
{
 public function _construct(){
    return $this->_init(\Hiberus\HiberusRebollar\Model\ResourceModel\Examen::class);
}

    /**
     * @inheritDoc
     */
    public function setExamyId($id_exam)
{
    return $this->setData('id_exam',$id_exam);
}
    /**
     * @inheritDoc
     */
    public function getExamId()
{
    return $this->getData('id_exam');
}
    /**
     * @inheritDoc
     */
    public function setNombre($nombre)
{
    return $this->setData('firstname',$nombre);
}
    /**
     * @inheritDoc
     */
    public function getNombre()
{
    return $this->getData('firstname');
}
    /**
     * @inheritDoc
     */
    public function setApellido($apellido)
{
    return $this->setData('lastname',$apellido);
}
    /**
     * @inheritDoc
     */
    public function getApellido()
{
    return $this->getData('lastname');
}
    /**
     * @inheritDoc
     */
    public function setMark($mark)
{
    return $this->setData('mark',$mark);
}
    /**
     * @inheritDoc
     */
    public function getMark()
{
    return $this->getData('mark');
}
}
