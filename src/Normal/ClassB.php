<?php

namespace App\Normal;

use App\Normal\ClassC;

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