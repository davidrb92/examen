<?php

namespace Hiberus\HiberusRebollar\Block;

use Hiberus\HiberusRebollar\Api\ExamenRepositoryInterface;
use Hiberus\HiberusRebollar\Model\Examen;
use Hiberus\HiberusRebollar\Api\Data\ExamenInterfaceFactory;

class Index extends \Magento\Framework\View\Element\Template
{

    protected $registry;
    protected $examen;
    protected $examenRepository;
    protected $examenInterfaceFactory;
    protected $examenResource;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        Examen $examen,
        ExamenRepositoryInterface $examenRepository,
        ExamenInterfaceFactory $examenInterfaceFactory,
        \Hiberus\HiberusRebollar\Model\ResourceModel\Examen $examenResource,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->examen = $examen;
        $this->examenRepository = $examenRepository;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
        parent::__construct($context, $data);
    }

    public function getNotas() {

        $crearNotas = $this->examenInterfaceFactory->create();

        return $crearNotas->getCollection();

    }



}
