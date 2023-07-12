<?php

use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addText('text', 'Text')
		->setOption('description', 'Some input description');

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/descriptions.expect', $form->__toString(TRUE));
});
