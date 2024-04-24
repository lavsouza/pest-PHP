<?php 

use Src\Example\Math;

beforeAll(function(){
    echo "beforeAll \n";
});

afterAll(function(){
    echo "afterAll \n";
});

beforeEach(function(){
    echo "beforeEach \n";
    $this->math = new Math;
});

afterEach(function(){
    echo "afterEach \n";
});

it('test sum', function(){
    $result = $this->math->sum(6, 2);

    expect($result)->toBe(8);
    expect($result)->toBeInt();

});

it('Should return not empty of pi', function(){
    $result = $this->math->pi();

    expect($result)->toBeFloat();

});

it('Should return a array matching their keys', function(){
    $result = $this->math->location();

    expect($result)->toBeArray();
    expect($result)->toMatchArray([
        'Longitude' => 8565647423, 
        'Altitude' => 854121365]
    );

});

it('Should return a array or empty', function(){
    $result = $this->math->location();

    expect($result)->toBeArray();
    expect($result)->toMatchArray([
        'Longitude' => 8565647423, 
        'Altitude' => 854121365]
    );

    $result2 = $this->math->location('example');
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