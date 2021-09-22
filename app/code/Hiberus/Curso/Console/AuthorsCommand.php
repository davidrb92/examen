<?php
namespace Hiberus\Curso\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class AuthorsCommand extends Command
{
    const NAME = 'name';
    protected \Hiberus\Curso\Model\Author $author;

    public function __construct(
        \Hiberus\Curso\Model\Author $author,
        string                      $name = null)
    {

        parent::__construct($name);
        $this->author = $author;
    }


    protected function configure()
    {
        $this->setName('hiberus:authors:show')->setDescription('Mostrar Autores')->addOption(self::NAME, null, InputOption::VALUE_OPTIONAL, 'Name');

        parent::configure();

    }

    protected function execute(
        InputInterface  $input,
        OutputInterface $output
    )
    {
        if ($input->getOption(self::NAME)) {
            $name = $input->getOption(self::NAME);
        } else {
            $name = $this->author->getAuthorName();
        }
        $output->writeln('<input>Mi autor favorito es :' . $name . '</input>');
        //$this->execute($input,$output);
    }
}


?>
