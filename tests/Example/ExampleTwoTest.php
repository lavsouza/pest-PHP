<?php

use Src\Example\Example;

it('Should return a String', function(){
    $example = new Example;
    $response = $example->say();

    expect($response)->toBeString();     //Pest-PHP
    $this->assertNotEmpty($response);   //Php Unity
})

?>