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
		$actions = array('drop', 'drop-and-reload', 'create', 'reload', 'create-and-load-fixtures', 'drop-and-foobar', 'update', 'nothing');
		sort($actions);//make it alfabetical 
		
		//create a validation function and save it into a variable
	    $validation = function ($action) use ($actions) {
	        if (!in_array($action, array_values($actions))) {
	            throw new \InvalidArgumentException(sprintf('Action "%s" is invalid.', $action));
	        }
	
	        return $action;
	    };
	
	    // ask and validate the answer
	    $dialog = $this->getApplication()->getHelperSet()->get('dialog');
		//askAndValidate(OutputInterface $output, string|array $question, callback $validator, integer $attempts = false, string $default = null) 
	    $action = $dialog->askAndValidate($output, 'What would you like to do with the database (default is "nothing"): ', $validation, false, 'nothing', $actions);
	
	    $output->writeln(sprintf('We are going to perform "%s" on the database.', $action));
	}
}
