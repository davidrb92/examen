<?php

namespace Hiberus\HiberusRebollar\Model;

use Hiberus\HiberusRebollar\Api\ExamenRepositoryInterface;
use Hiberus\HiberusRebollar\Api\Data\ExamenInterface;
use Magento\Framework\Exception\CouldNotSaveException;

class ExamenRepository implements ExamenRepositoryInterface
{

    protected ResourceModel\HiberusRebollar $resourceExamen;
    protected \Hiberus\HiberusRebollar\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory;

    /**
     * @param ResourceModel\HiberusRebollar $resourceExamen
     * @param \Hiberus\HiberusRebollar\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory
     */
    public function __construct(
        \Hiberus\HiberusRebollar\Model\ResourceModel\Examen $resourceExamen,
        \Hiberus\HiberusRebollar\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory
    ) {
        $this->resourceExamen = $resourceExamen;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
    }

    /**
     * @param ExamenInterface $examen
     * @return ExamenInterface
     * @throws CouldNotSaveException
     */
    public function save(
        ExamenInterface $examen
    ) {

        try {
            $this->resourceExamen->save($examen);
        } catch(\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }

        return $examen;

    }

    /**
     * @param $id_exam
     * @return mixed
     */
    public function getById($id_exam)
    {
        try {
            $examen = $this->examenInterfaceFactory->create();
            $examen->setEntityId($id_exam);
            $this->resourceExamen->load($examen, $id_exam);
        } catch (\Exception $e) {
            $examen = $this->examenInterfaceFactory->create();
        }

        return $examen;
    }

    /**
     * @param \Hiberus\HiberusRebollar\Api\Data\ExamenInterface $examen
     * @return bool
     */
    public function delete(\Hiberus\HiberusRebollar\Api\Data\ExamenInterface $examen)
    {
        try {
            $this->resourceCurso->delete($examen);
        } catch (\Exception $e) {

            return false;
        }

        return true;
    }

    /**
     * @param int $id_exam
     * @return bool
     */

    public function deleteById($id_exam)
    {
        return $this->delete($this->getById($id_exam));
    }

}
