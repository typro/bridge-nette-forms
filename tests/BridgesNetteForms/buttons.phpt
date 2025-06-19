<?php

declare(strict_types=1);

use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addSubmit('first', 'First');

	$form->addText('text', 'Text');

	$form->addSubmit('submit', 'Submit');

	$form->addButton('button', 'Button');

	$form->addImage('image', 'Image', 'http://example.com/image.jpg', 'Alternative description');

	Tests::match(__DIR__ . '/buttons.expect', $form->__toString(TRUE));
});
