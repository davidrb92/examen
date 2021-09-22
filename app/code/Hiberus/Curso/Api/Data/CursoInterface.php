<?php

namespace Hiberus\Curso\Api\Data;

interface CursoInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    const TABLE_NAME = 'hiberus_curso';
    const COLUMN_ID = 'entity_id';

    /**
     * @return int
     */
    public function getEnitityId();

    /**
     * @param int $entityId
     *  @return $this
     */
    public function setEntityId($entityId);

    /**
     * @param string $nombre
     * @return $this
     */
    public function setNombre($nombre);

    /**
     * @return string
     */
    public function getNombre();

    /**
     * @param string $apellido
     * @return $this
     */
    public function setApellido($apellido);

    /**
     * @return string
     */
    public function getApellido();

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * @return string
     */
    public function getCreatedAt();





}
