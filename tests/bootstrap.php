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
		$expected = trim((string) file_get_contents($expectedFile));
		// normalize whitespaces
		$expected = (string) preg_replace('#\\n+\\s+#m', "\n", $expected);
		// format tags
		$expected = (string) preg_replace('#>\\s*<#m', ">\n<", $expected);

		$html = trim($html);
		// remove HTML comments
		$html = (string) preg_replace('#<!\\-\\-.*\\-\\->#m', '', $html);
		// remove data-rules
		$html = (string) preg_replace('#\\s+data-nette-rules=\'[^\']+\'#m', '', $html);
		$html = (string) preg_replace('#\\s+data-nette-rules="[^"]+"#m', '', $html);
		// format tags
		$html = (string) preg_replace('#>\\s*<#m', ">\n<", $html);
		// normalize whitespaces
		$html = (string) preg_replace('#\\n+\\s+#m', "\n", $html);

		\Tester\Assert::same($expected, $html);
	}
}
