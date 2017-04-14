<?php

namespace AppBundle\Service;

class HappyNumberGenerator
{
    public function generate()
    {
        return rand(1, 100);
    }

}