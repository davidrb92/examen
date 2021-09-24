<?php

namespace Hiberus\HiberusRebollar\Console;



use Hiberus\HiberusRebollar\Block\Index;
use Hiberus\HiberusRebollar\Model\Examen;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class ExamenCommand extends Command{

    /**
     * @var Examen
     */
    protected Examen $alumnos;

    /**
     * @var Index
     */
    protected Index $block;

    /**
     * @param Index $block
     */
    public function __construct(Index $block, Examen $alumnos)
    {
        $this->block = $block;
        $this->alumnos = $alumnos;
        parent::__construct();
    }


    protected function configure()
    {
        $this->setName('hiberus:rebollar')->setDescription('Mostrar notas');
        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $notas = $this->block->getNotas();
        foreach ($notas as $nota) {
            $this->alumnos->setExamyId($nota->getExamId());
            $this->alumnos->setNombre($nota->getNombre());
            $this->alumnos->setApellido($nota->getApellido());
            $this->alumnos->setMark($nota->getMark());
            $output->writeln('<info> Id:'
                . $this->alumnos->getExamId() . ' | Nombre:'
                . $this->alumnos->getNombre() . ' | Apellido:'
                . $this->alumnos->getApellido() . ' | Nota:'
                . $this->alumnos->getMark() . '</info>');
        }
    }
}
