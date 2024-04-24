<?php 

use Src\Example\Math;


it('test sum', function(){
    $math = new Math;
    $result = $math->sum(6, 2);

    expect($result)->toBe(8);
    expect($result)->toBeInt();

});

it('Should return not empty of pi', function(){
    $math = new Math;
    $result = $math->pi();

    expect($result)->toBeFloat();

});

it('Should return a array matching their keys', function(){
    $math = new Math;
    $result = $math->location();

    expect($result)->toBeArray();
    expect($result)->toMatchArray([
        'Longitude' => 8565647423, 
        'Altitude' => 854121365]
    );

});

it('Should return a array or empty', function(){
    $math = new Math;
    $result = $math->location();

    expect($result)->toBeArray();
    expect($result)->toMatchArray([
        'Longitude' => 8565647423, 
        'Altitude' => 854121365]
    );

    $result2 = $math->location('example');
    expect($result2)->toBeString();
    expect($result2)->toBe(strtoupper('example'));
    expect($result2)->not->toBeEmpty();

});

it('test sum with dynamic data n datasets', function(
    int $num1,
    int $num2,
    int $sum
){
    $math = new Math;
    $result = $math->sum($num1, $num2);

    expect($result)->toBe($sum);
    expect($result)->toBeInt();

})->with([
    "test 1" => [4,6,10],
    "test 2" => [6,4,10],
    "test 3" => [25, 11, 36],
]);

?>