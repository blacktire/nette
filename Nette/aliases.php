<?php

array_walk(new ArrayIterator(array(
	'Nette\Config\Configurator' => 'Nette\Configurator',
	'Nette\Config\CompilerExtension' => 'Nette\DI\CompilerExtension',
	'Nette\Diagnostics\Bar' => 'Tracy\Bar',
	'Nette\Diagnostics\BlueScreen' => 'Tracy\BlueScreen',
	'Nette\Diagnostics\Dumper' => 'Tracy\Dumper',
	'Nette\Latte\CompileException' => 'Latte\CompileException',
	'Nette\Latte\IMacro' => 'Latte\IMacro',
	'Nette\Latte\Macros\MacroSet' => 'Latte\Macros\MacroSet',
	'Nette\ArrayHash' => 'Nette\Utils\ArrayHash',
	'Nette\ArrayList' => 'Nette\Utils\ArrayList',
	'Nette\DateTime' => 'Nette\Utils\DateTime',
	'Nette\Image' => 'Nette\Utils\Image',
	'Nette\ObjectMixin' => 'Nette\Utils\ObjectMixin',
	'Nette\Utils\NeonException' => 'Nette\Neon\Exception',
	'Nette\Utils\NeonEntity' => 'Nette\Neon\Entity',
	'Nette\Utils\Neon' => 'Nette\Neon\Neon',
)), 'class_alias');