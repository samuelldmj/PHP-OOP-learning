<?php 
class clock{
    public const DAY_IN_SECONDS = 60 * 60 * 24; 


    public function tomorrow(){
        return time() + self::DAY_IN_SECONDS;
    }
}

echo clock::DAY_IN_SECONDS . "<br>";

//insatnce of a class
$clock = new clock;
echo $clock->tomorrow()  . "<br>";




?>