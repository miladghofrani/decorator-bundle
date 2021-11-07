<?php

namespace miladghofrani\DecoratorBundle\Maker;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;

class MakeTransformer extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:transformer';
    }

    public static function getCommandDescription(): string
    {
        return 'Creates a transformer class';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig)
    {
        $command
            ->setDescription(self::getCommandDescription())
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the transformer class (e.g. <fg=yellow>ExampleTransformer</>)');

        $inputConfig->setArgumentAsNonInteractive('name');
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator)
    {
        $storyClassNameDetails = $generator->createClassNameDetails(
            $input->getArgument('name'),
            'Transformer',
            'Transformer'
        );

        $generator->generateClass(
            $storyClassNameDetails->getFullName(),
            __DIR__.'/../Resources/skeleton/Transformer.tpl.php',
            []
        );

        $generator->writeChanges();

        $this->writeSuccessMessage($io);

        $io->text([
            'Next: Open your transformer class and write your mapping and decorating for raw data.',
        ]);
    }

    public function configureDependencies(DependencyBuilder $dependencies)
    {
    }
}
