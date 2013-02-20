<?php
namespace Happy\AutocompleteBundle\Command;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DatabaseCommand extends Command {
	
	protected function configure() {
		$this->setName('database')
		 	 ->setDescription('Do stuff with the database');
	}
	
	protected function execute(InputInterface $input, OutputInterface $output) {
		
	}
}
