<?php


namespace App;

require_once('vendor/autoload.php');

class ClassA
{
    private $classB;
    
    public function __construct(ClassB $classB)
    {
        $this->classB = $classB;
    }
    
    public function show()
    {
        echo $this->classB->classC->show();
    }
}

$classA = new ClassA(new ClassB(new ClassC()));

print_r($classA->show());

echo "\n";