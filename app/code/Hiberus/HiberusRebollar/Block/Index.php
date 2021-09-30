<?php

namespace Hiberus\HiberusRebollar\Block;

use Hiberus\HiberusRebollar\Api\ExamenRepositoryInterface;
use Hiberus\HiberusRebollar\Model\Examen;
use Hiberus\HiberusRebollar\Api\Data\ExamenInterfaceFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

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
        ScopeConfigInterface     $scopeConfig,
        \Hiberus\HiberusRebollar\Model\ResourceModel\Examen $examenResource,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->examen = $examen;
        $this->examenRepository = $examenRepository;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getNotas() {
        $crearNotas = $this->examenInterfaceFactory->create();
        return $crearNotas->getCollection();
    }

    public function getMejoresNotas():array{
        $notas= array();

        foreach($this->getNotas() as $alumno){
            array_push($notas,$alumno->getMark());
        }
        rsort($notas);

        return $notas;

    }

    public function getElementos() {
       $numeroElementos = $this->scopeConfig->getValue( 'hiberus_elementos/general/elementos', ScopeInterface::SCOPE_STORE);

       return $numeroElementos;
   }

    public function getNota() {
        $nota = $this->scopeConfig->getValue( 'hiberus_elementos/general/aprobados', ScopeInterface::SCOPE_STORE);
        if(!isset($nota)){
            $nota = 5;
        }
        return $nota;
    }



}
