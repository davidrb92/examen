<?php

namespace Hiberus\HiberusRebollar\Api;

interface ExamenRepositoryInterface
{

    /**
     * @param \Hiberus\HiberusRebollar\Api\Data\ExamenInterface $examenInterface
     * @return \Hiberus\HiberusRebollar\Api\Data\ExamenInterface
     */
    public function save(\Hiberus\HiberusRebollar\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $id_exam
     * @return \Hiberus\HiberusRebollar\Api\Data\ExamenInterface
     */
    public function getById($id_exam);

    /**
     * @param \Hiberus\HiberusRebollar\Api\Data\ExamenInterface $examenInterface
     * @return bool
     */
    public function delete(\Hiberus\HiberusRebollar\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $id_exam
     * @return bool
     */
    public function deleteById($id_exam);

}
