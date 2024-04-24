<?php 

namespace Src\Example;

class Math{

    public function sum(int $num1, int $num2): int{
        return $num1 + $num2;
    }

    public function pi(): float{
        return 3.14;
    }

    public function location(string $full = null): array|string
    {
        if($full){
            return strtoupper($full);
        }

        return [
            'Longitude' => 8565647423, 
            'Altitude' => 854121365];
    }

}

?>