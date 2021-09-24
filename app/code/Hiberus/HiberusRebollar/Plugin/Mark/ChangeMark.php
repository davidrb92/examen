<?php

namespace Hiberus\HiberusRebollar\Plugin\Mark;
use \Hiberus\HiberusRebollar\Model\Examen;


class ChangeMark {

    public function afterGetMark(Examen $subject, $result){
        if($result<5.0) {

            $result= 4.9;
        }

        return $result;

    }


}

?>
