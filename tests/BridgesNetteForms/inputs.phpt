<?php

declare(strict_types=1);

use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addText('default', 'Text');

	$form->addText('required', 'Text required')
		->setRequired();

	$form->addText('noLabel');

	$form->addText('cols', 'Text with cols', 10);

	$form->addText('maxLength', 'Text with maxLength', NULL, 20);

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.text.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addPassword('default', 'Password');

	$form->addPassword('required', 'Password required')
		->setRequired();

	$form->addPassword('noLabel');

	$form->addPassword('cols', 'Password with cols', 10);

	$form->addPassword('maxLength', 'Password with maxLength', NULL, 20);

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.password.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addTextArea('default', 'TextArea');

	$form->addTextArea('required', 'TextArea required')
		->setRequired();

	$form->addTextArea('noLabel');

	$form->addTextArea('cols', 'TextArea with cols', 10);

	$form->addTextArea('rows', 'TextArea with rows', NULL, 20);

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.textarea.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addEmail('default', 'Email');

	$form->addEmail('required', 'Email required')
		->setRequired();

	$form->addEmail('noLabel');

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.email.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addInteger('default', 'Integer');

	$form->addInteger('required', 'Integer required')
		->setRequired();

	$form->addInteger('noLabel');

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.integer.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addUpload('default', 'Upload');

	$form->addUpload('required', 'Upload required')
		->setRequired();

	$form->addUpload('noLabel');

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.upload.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addMultiUpload('default', 'MultiUpload');

	$form->addMultiUpload('required', 'MultiUpload required')
		->setRequired();

	$form->addMultiUpload('noLabel');

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.multiupload.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addHidden('default');

	$form->addHidden('required')
		->setRequired();

	$form->addHidden('withDefaultValue', 'defaultValue');

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.hidden.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addCheckbox('default', 'Checkbox');

	$form->addCheckbox('required', 'Checkbox required')
		->setRequired();

	$form->addCheckbox('noLabel');

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.checkbox.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addRadioList('default', 'RadioList');

	$form->addRadioList('required', 'RadioList required')
		->setRequired();

	$form->addRadioList('noLabel');

	$form->addRadioList('withItems', 'RadioList with items', [
		'a' => 'Item A',
		'b' => 'Item B',
	]);

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.radiolist.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addCheckboxList('default', 'CheckboxList');

	$form->addCheckboxList('required', 'CheckboxList required')
		->setRequired();

	$form->addCheckboxList('noLabel');

	$form->addCheckboxList('withItems', 'CheckboxList with items', [
		'a' => 'Item A',
		'b' => 'Item B',
	]);

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.checkboxlist.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addSelect('default', 'Select');

	$form->addSelect('required', 'Select required')
		->setRequired();

	$form->addSelect('noLabel');

	$form->addSelect('withItems', 'Select with items', [
		'a' => 'Item A',
		'b' => 'Item B',
	]);

	$form->addSelect('withSize', 'Select with items', NULL, 2);

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.select.expect', $form->__toString(TRUE));
});


test(function () {
	$form = new Nette\Forms\Form;
	Typro\Bridges\NetteForms\FormConfigurator::configure($form);

	$form->addMultiSelect('default', 'MultiSelect');

	$form->addMultiSelect('required', 'MultiSelect required')
		->setRequired();

	$form->addMultiSelect('noLabel');

	$form->addMultiSelect('withItems', 'MultiSelect with items', [
		'a' => 'Item A',
		'b' => 'Item B',
	]);

	$form->addMultiSelect('withSize', 'MultiSelect with items', NULL, 2);

	$form->addSubmit('submit', 'Submit');

	Tests::match(__DIR__ . '/inputs.multiselect.expect', $form->__toString(TRUE));
});
