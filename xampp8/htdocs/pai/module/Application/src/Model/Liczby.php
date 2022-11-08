<?php

namespace Application\Model;

use Symfony\Component\VarDumper\Cloner\DumperInterface;

class Liczby
{


    public function generuj()
    {
        $stack = array();
        for ($x =0; $x<100; $x++){
            array_push($stack, rand(0,1000));
        }
        asort($stack);
    return $stack;
    }
}

?>