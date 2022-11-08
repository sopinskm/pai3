<?php

namespace Application\Model;

use Symfony\Component\VarDumper\Cloner\DumperInterface;

class Miesiace
{


    public function pobierzWszystkie()
    {
    return [
        'Styczeń' => 'blue',
        'Luty' => 'red',
        'Marzec' => 'green',
        'Kwiecień' => 'yellow',
        'Maj' => 'black',
        'Czerwiec' => 'grey',
        'Lipiec' => 'lime',
        'Sierpień' => 'pink',
        'Wrzesień' => 'cyan',
        'Październik' => 'orange',
        'Listopad' => 'purple',
        'Grudzień' => 'brown',
    ];
    }
}

?>