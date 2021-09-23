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
     * @param $entityId
     * @return \Hiberus\HiberusRebollar\Api\Data\ExamenInterface
     */
    public function getById($entityId);

    /**
     * @param \Hiberus\HiberusRebollar\Api\Data\ExamenInterface $examenInterface
     * @return bool
     */
    public function delete(\Hiberus\HiberusRebollar\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $entityId
     * @return bool
     */
    public function deleteById($entityId);

}
