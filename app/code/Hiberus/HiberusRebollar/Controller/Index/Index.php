<?php

namespace Hiberus\HiberusRebollar\Controller\Index;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface{

    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    protected \Hiberus\HiberusRebollar\Model\ExamenFactory $examenFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Hiberus\HiberusRebollar\Model\ExamenFactory $examenFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->examenFactory = $examenFactory;
    }


    public function execute()
    {

        return $this->examenFactory->create();
        $collection = $examen->getCollection();
        foreach($collection as $item){
            echo $item->getData();
        }

        return $this->pageFactory->create();
    }



}

?>
