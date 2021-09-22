<?php

namespace Hiberus\Curso\Plugin\Pricing;

class ProductPluginPrice {


    /**
     * @param \Magento\Framework\Pricing\Render\Amount $subject
     * @param $result
     * @return string
     */
    public function afterFormatCurrency(
        \Magento\Framework\Pricing\Render\Amount $subject,
                                       $result
    ){
        $result = $result."/Por unidad";

        return $result;

    }

}


?>
