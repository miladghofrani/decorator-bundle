<?php

namespace MiladGhofrani\DecoratorBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MakeTransformerCommand extends Command
{
    protected static $defaultName = 'make:transformer';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        (new SymfonyStyle($input, $output))
            ->error(
                sprintf(
                    "To run \"%s\" you need the \"%s\" which is currently not installed.\n\nTry running \"composer require %s\".",
                    static::$defaultName,
                    'MakerBundle',
                    'symfony/maker-bundle --dev'
                )
            )
        ;

        return Command::SUCCESS;
    }
}
