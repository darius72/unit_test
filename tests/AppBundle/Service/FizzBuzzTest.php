<?php

namespace AppBundle\Service;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider FizzBuzzProvider
     */
    public function testPrintFizzBuzz($a, $b)
    {
        $fizzIskvietimas = new FizzBuzz();
        $this->assertEquals($b, $fizzIskvietimas->printFizzBuzz($a));
    }

    public function FizzBuzzProvider(){
        return [
            'minus one' => [-1, -1],
            'zero' => [0, 'fizzbuzz'],
            'one' => [1, 1],
            'three' => [3, 'fizz'],
            'four' => [4, 4],
            'five' => [5, 'buzz'],
            'nine' => [9, 'fizz'],
            'ten' => [10, 'buzz'],
            'fifteen' => [15, 'fizzbuzz'],
        ];
    }
}