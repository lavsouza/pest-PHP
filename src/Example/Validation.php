<?php
    namespace Src\Example;

    use Exception;

    class Validation{

        public static function minLenght(?string $value = '', int $lenght = 3){

            if(!$value ||  strlen($value) < $lenght){
                throw new Exception('Invalid qty characters');
            }
        }
        public static function maxLenght(?string $value = '', int $lenght = 255){

            if(!$value ||  strlen($value) > $lenght){
                throw new CustomException('Invalid qty characters');
            }
        }
    }
?>