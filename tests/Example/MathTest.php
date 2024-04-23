<?php 

use Src\Example\Math;


it('test sum', function(){
    $math = new Math;
    $result = $math->sum(6, 2);

    expect($result)->toBe(8);
    expect($result)->toBeInt();

})

?>