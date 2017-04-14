<?php

namespace AppBundle\Service;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
	public function testAdd($a, $b, $expected)
	{

		$this->assertEquals($expected, $a + $b);
	}

	public function additionProvider(){
	    return [
	        'adding zeros' => [0, 0, 0],
            'one plus one' => [1, 1, 2],
        ];
    }
}