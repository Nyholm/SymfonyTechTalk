<?php
namespace Happy\AutocompleteBundle\Command;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class petCommand extends Command {
	
	protected function configure() {
		$this->setName('ask-color')
		 	 ->setDescription('What is your favourite color?');
	}
	
	protected function execute(InputInterface $input, OutputInterface $output) {
		$colors = array('red', 'blue', 'yellow', 'yellow-light', 'yellow-dark');
	    $validation = function ($color) use ($colors) {
	        if (!in_array($color, array_values($colors))) {
	            throw new \InvalidArgumentException(sprintf('Color "%s" is invalid.', $color));
	        }
	
	        return $color;
	    };
	
	    // ask and validate the answer
	    $dialog = $this->getApplication()->getHelperSet()->get('dialog');
	    $color = $dialog->askAndValidate($output, 'Enter your favorite color (default to red): ', $validation, false, 'red', $colors);
	
	    $output->writeln(sprintf('You have just entered: %s', $color));
	}
}
