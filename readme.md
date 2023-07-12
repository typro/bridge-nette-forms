
# bridge-nette-forms

Integration of [Typro](https://github.com/typro/typro) to [Nette Forms](https://github.com/nette/forms).

<a href="https://www.janpecha.cz/donate/"><img src="https://buymecoffee.intm.org/img/donate-banner.v1.svg" alt="Donate" height="100"></a>


## Installation

[Download a latest package](https://github.com/typro/bridge-nette-forms/releases) or use [Composer](http://getcomposer.org/):

```
composer require typro/bridge-nette-forms
```

This package requires PHP 5.4.0 or later, [Typro](https://github.com/typro/typro) 3.0+ and [Nette\Forms](https://github.com/nette/forms) 2.4+.


## Usage

``` php
// create form
$form = new Nette\Forms\Form; // or Nette\Application\UI\Form

// modify renderer settings
Typro\Bridges\NetteForms\FormConfigurator::configure($form);
```

------------------------------

License: [New BSD License](license.md)
<br>Author: Jan Pecha, https://www.janpecha.cz/
