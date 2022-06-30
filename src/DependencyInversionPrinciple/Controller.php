<?php


namespace App\DependencyInversionPrinciple;

use App\DependencyInversionPrinciple\Container;
use ArgumentCountError;
use Exception;

require_once('vendor/autoload.php');

class Controller
{
    protected $class;
    
    public function __construct(IClass $class)
    {
        $this->class = $class;
    }
    
    public function show()
    {
        $this->class->show();
    }
}

$controller = new Controller(new ClassA());

//dùng logic để thay đổi hành vi trong runtime
//strategy design pattern
//demo thử switch-case:
    
print_r($controller->show());

echo "\n";


// áp dụng thêm Ioc (DI container)

// $container = new Container();

// $container->bind(IClass::class, function () {
//     return new ClassC();
// });

// try {
//     $controller = new Controller();
// } catch (ArgumentCountError $e) {
//     if ($container->isset(IClass::class)) {
//         $controller = new Controller($container->make(IClass::class));
//     }
// }