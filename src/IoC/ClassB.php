<?php

namespace App\IoC;

use App\IoC\ClassC;

class ClassB
{
    public $classC;
    
    public function __construct(ClassC $classC)
    {
        $this->classC = $classC;
    }
    
    public function show()
    {
        return 'ClassB >> ' . $this->classC->show();
    }
}