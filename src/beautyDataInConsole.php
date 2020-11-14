<?php
/**
 * Created by PHPProjectGen.
 * User: edeoleo@gmail.com
 * Date: 11/07/2020
 * Time: 10:45 PM
 */

namespace Elminson\beautyDataInConsole;

/**
 *
 *
 */
class beautyDataInConsole
{

	/**
	 * @var int
	 */
	private $paddingSize;
	private $drawChar;

	/**
	 * PHPProjectGen constructor.
	 */
	public function __construct()
	{

		$this->paddingSize = 4;
		$this->drawChar = "=";

	}

	public function beautyPrint($array)
	{

		$this->getMaxSize($array);

		$this->printLine($this->getMaxSize($array));
		foreach ($array as $key => $value) {

			echo $value;

		}
		$this->printLine($this->getMaxSize($array));



	}

	private function getMaxSize($array)
	{

		$headerSize = 0;

		foreach ($array as $itemKey => $itemValue) {

			$keySize = strlen($itemKey);
			$valueSize = strlen($itemValue);
			$headerSize += ($this->paddingSize * 2) + max($keySize, $valueSize);

		}

		return $headerSize;
	}


	private function printLine($size)
	{
		echo str_repeat($this->drawChar, $size);
	}
}
