<?php

namespace App\DependencyInversionPrinciple;

class ClassC implements IClass
{
    public function show()
    {
        echo 'ClassC';
    }
}