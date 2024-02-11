<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'chaton',
    description: 'Add a short description for your command',
)]
class ChatonCommand extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $faker = \Faker\Factory::create();

        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $chamallot = new ChatTigré();
            $chamallot->setNom($faker->name);
            $chamallot->setMignonneté($faker->numberBetween(50, 200));
            $chamallot->setTaille($faker->numberBetween(1, 55));
            $chamallot->setMoustacheLength($faker->numberBetween(1, 10));

            $this->entityManager->persist($chamallot);
        }

        $this->entityManager->flush();

        $output->writeln('SoftKitten data added successfully.');


        return Command::SUCCESS;
    }
}
