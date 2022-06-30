<?php

namespace App\DependencyInversionPrinciple;

require_once('vendor/autoload.php');

class ClassB implements IClass
{
    public function show()
    {
        echo 'ClassB';
    }
}