<?php

namespace App\DependencyInversionPrinciple;

use App\DependencyInversionPrinciple\Container;

class ClassA implements IClass
{
    public function show()
    {
        echo 'ClassA';
    }
}