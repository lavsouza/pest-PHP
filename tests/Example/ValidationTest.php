<?php

use Src\Example\CustomException;
use Src\Example\Validation;

it('Validate min Leght char', function(){
    Validation::minLenght('ca');
})
->throws(Exception::class);

it('Validate is empty', function(){
    Validation::minLenght();
})
->throws(Exception::class);

it('Validate is null', function(){
    Validation::minLenght(null);
})
->throws(Exception::class);

it('Validate custom Exception', function(){
    Validation::maxLenght();
})
->throws(CustomException::class);

?>