<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

Tester\Environment::setup();


/**
 * @return void
 */
function test(callable $cb)
{
	$cb();
}


class Tests
{
	/**
	 * @param  string $expectedFile
	 * @param  string $html
	 * @return void
	 */
	public static function match($expectedFile, $html)
	{
		$expected = trim(file_get_contents($expectedFile));
		// normalize whitespaces
		$expected = preg_replace('#\\n+\\s+#m', "\n", $expected);
		// format tags
		$expected = preg_replace('#>\\s*<#m', ">\n<", $expected);

		$html = trim($html);
		// remove HTML comments
		$html = preg_replace('#<!\\-\\-.*\\-\\->#m', '', $html);
		// remove data-rules
		$html = preg_replace('#\\s+data-nette-rules=\'[^\']+\'#m', '', $html);
		$html = preg_replace('#\\s+data-nette-rules="[^"]+"#m', '', $html);
		// format tags
		$html = preg_replace('#>\\s*<#m', ">\n<", $html);
		// normalize whitespaces
		$html = preg_replace('#\\n+\\s+#m', "\n", $html);

		\Tester\Assert::same($expected, $html);
	}
}
