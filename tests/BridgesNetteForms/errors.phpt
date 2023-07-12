<?php

use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$textInput = $form->addText('text', 'Text');

	$form->addSubmit('submit', 'Submit');

	$form->addError('First form error');
	$form->addError('Second form error');

	$textInput->addError('First input error');
	$textInput->addError('Second input error');

	Assert::matchFile(__DIR__ . '/errors.expect', $form->__toString(TRUE));
});
