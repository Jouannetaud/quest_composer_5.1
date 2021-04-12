<?php
namespace App\wcs;
namespace HelloWorld;

class Hello {

    public function talk()
    {
        return "Hello World";
    }
}

class SayHello
{
    public static function world()
    {
        return 'Hello World, Composer!';
    }
}