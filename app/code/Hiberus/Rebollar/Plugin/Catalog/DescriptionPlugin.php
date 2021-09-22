<?php

namespace Hiberus\Rebollar\Plugin\Catalog;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class DescriptionPlugin {

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;


    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ){
        $this->scopeConfig = $scopeConfig;
    }


    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $result
     * @return string
     */
    public function afterLoad(
        \Magento\Catalog\Model\Product $subject,
                                       $result
    ){
        $numeroGeneral=$this->scopeConfig->getValue('rebollar_nombre/general/numero_general',ScopeInterface::SCOPE_STORE);
        $nombreGeneral=$this->scopeConfig->getValue('rebollar_nombre/general/nombre_general',ScopeInterface::SCOPE_STORE);
        $result->setDescription($nombreGeneral.' '.$numeroGeneral);
        //$subject->getDescription();
       // $result =$result.' '.$nombreGeneral.''.$numeroGeneral;
      //  return $result;

    }





}

?>
