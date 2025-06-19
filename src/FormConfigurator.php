<?php

	declare(strict_types=1);

	namespace Typro\Bridges\NetteForms;

	use Nette\Forms\Form;
	use Nette\Forms\Rendering\DefaultFormRenderer;


	class FormConfigurator
	{
		/**
		 * @return void
		 */
		public static function configure(Form $form)
		{
			$form->getElementPrototype()->class('form', TRUE);

			$renderer = $form->getRenderer();

			if (!($renderer instanceof DefaultFormRenderer)) {
				throw new \RuntimeException('Unsupported renderer ' . get_class($renderer) . ', supports only DefaultFormRenderer.');
			}

			assert(is_array($renderer->wrappers['error']));
			$renderer->wrappers['error']['container'] = 'ul class=form__errors';
			$renderer->wrappers['error']['item'] = 'li class=form__error';

			assert(is_array($renderer->wrappers['group']));
			$renderer->wrappers['group']['container'] = 'fieldset class=form__group';
			$renderer->wrappers['group']['label'] = 'legend class=form__group__label';
			$renderer->wrappers['group']['description'] = 'p class=form__group__description';

			assert(is_array($renderer->wrappers['controls']));
			$renderer->wrappers['controls']['container'] = 'div class=form__controls';

			assert(is_array($renderer->wrappers['pair']));
			$renderer->wrappers['pair']['container'] = 'div class=form__control-pair';
			$renderer->wrappers['pair']['.required'] = 'form__control-pair--required';

			assert(is_array($renderer->wrappers['control']));
			$renderer->wrappers['control']['container'] = 'div class=form__control';
			$renderer->wrappers['control']['description'] = 'small class=form__control__description';
			$renderer->wrappers['control']['errorcontainer'] = 'div class=form__control__error';
			$renderer->wrappers['control']['erroritem'] = 'p class=form__control__errorItem';

			$renderer->wrappers['control']['.required'] = 'form__control--required';
			$renderer->wrappers['control']['.text'] = 'form__control--text';
			$renderer->wrappers['control']['.password'] = 'form__control--text';
			$renderer->wrappers['control']['.file'] = 'form__control--text';
			$renderer->wrappers['control']['.email'] = 'form__control--text';
			$renderer->wrappers['control']['.number'] = 'form__control--text';

			assert(is_array($renderer->wrappers['label']));
			$renderer->wrappers['label']['container'] = 'div class=form__label';
		}
	}
