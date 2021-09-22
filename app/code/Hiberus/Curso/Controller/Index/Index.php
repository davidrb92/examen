<?php

namespace Hiberus\Curso\Controller\Index;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface{

    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    protected \Hiberus\Curso\Model\CursoFactory $cursoFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Hiberus\Curso\Model\CursoFactory $cursoFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->cursoFactory = $cursoFactory;
    }


    public function execute()
    {

        return $this->cursoFactory->create();
        $collection = $curso->getCollection();
        foreach($collection as $item){
            echo $item->getData();
        }

        return $this->pageFactory->create();
    }



}

?>
