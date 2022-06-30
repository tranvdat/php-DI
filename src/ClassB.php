<?php

namespace App;

use App\ClassC;

class ClassB
{
    public $classC;
    
    public function __construct(ClassC $classC)
    {
        $this->classC = $classC;
    }
    
    public function show()
    {
        return $this->classC->show();
    }
}