<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */

namespace Elminson\beautyDataInConsole;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class testbeautyDataInConsole extends TestCase
{

	/**
	 *
	 */
	function testFirstTestCase()
	{

		$beautyDataInConsole = new beautyDataInConsole();
		$this->assertEquals("index", $beautyDataInConsole->index());
	}

}
