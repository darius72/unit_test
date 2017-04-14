<?php

namespace AppBundle\Service;

class FizzBuzz
{
    public function printFizzBuzz($skaicius)
    {
        if (($skaicius % 3 == 0) && ($skaicius % 5 == 0)) {
            return "fizzbuzz";
        }

        if ( $skaicius % 3  == 0 ) {
            return "fizz";
        }

        if ( $skaicius % 5  == 0 ) {
            return "buzz";
        }

        return $skaicius;
    }
}