<?php


namespace App\Ioc;

use App\IoC\Container;
use App\IoC\ClassB;
use App\IoC\ClassC;

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
        echo 'ClassA >> ' . $this->classB->show();
    }
}

$container = new Container();

$container->bind(ClassC::class, function () {
    return new ClassC();
});

$container->bind(ClassB::class, function () {
    return new ClassB(new ClassC());
});

$container->bind(ClassA::class, function () {
    return new ClassA(new ClassB(new ClassC()));
});

$classA = $container->make(ClassA::class);

print_r($classA->show());

echo "\n";