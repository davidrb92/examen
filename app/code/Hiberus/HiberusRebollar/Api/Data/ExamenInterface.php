<?php

namespace Hiberus\HiberusRebollar\Api\Data;

interface ExamenInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    const TABLE_NAME = 'hiberus_examen';
    const COLUMN_ID = 'id_exam';

    /**
     * @return int
     */
    public function getExamId();

    /**
     * @param int $id_exam
     *  @return $this
     */
    public function setExamyId($id_exam);

    /**
     * @param String $firstname
     * @return $this
     */
    public function setNombre($firstname);

    /**
     * @return String
     */
    public function getNombre();

    /**
     * @param String $lastname
     * @return $this
     */
    public function setApellido($lastname);

    /**
     * @return String
     */
    public function getApellido();

    /**
     * @param decimal $mark
     * @return $this
     */
    public function setMark($mark);

    /**
     * @return decimal
     */
    public function getMark();





}
