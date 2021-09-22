<?php

namespace Hiberus\Curso\Model;

use Hiberus\Curso\Api\Data\CursoInterface;

class Curso extends \Magento\Framework\Model\AbstractModel implements \Hiberus\Curso\Api\Data\CursoInterface
{
    public function _construct(){
        return $this->_init(\Hiberus\Curso\Model\ResourceModel\Curso::class);

    }

    /**
     * @inheritDoc
     */
    public function setEntityId($entityId)
    {
        return $this->setData('entity_id',$entityId);
    }
    /**
     * @inheritDoc
     */
    public function getEnitityId()
    {
        return $this->getData('entity_id');
    }
    /**
     * @inheritDoc
     */
    public function setNombre($nombre)
    {
        return $this->setData('nombre',$nombre);
    }
    /**
     * @inheritDoc
     */
    public function getNombre()
    {
          return $this->getData('nombre');
    }
    /**
     * @inheritDoc
     */
    public function setApellido($apellido)
    {
        return $this->setData('apellido',$apellido);
    }
    /**
     * @inheritDoc
     */
    public function getApellido()
    {
        return $this->getData('apellido');
    }
    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData('created_at',$createdAt);
    }
    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData('created_at');
    }
}
