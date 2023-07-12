<?php

use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addText('a', 'Text A');

	$form->addText('b', 'Text B');

	$form->addGroup();

	$form->addText('a1', 'Text A in noname group');

	$form->addGroup('Group B');

	$form->addText('b1', 'Text A in Group B');

	$form->addGroup('Group C')
		->setOption('description', 'Group C description');

	$form->addText('c1', 'Text A in Group C');

	$form->addSubmit('submit', 'Submit');

	Assert::matchFile(__DIR__ . '/groups.expect', $form->__toString(TRUE));
});
