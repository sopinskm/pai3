<?php

namespace Application\Model;

use Symfony\Component\VarDumper\Cloner\DumperInterface;

class Data
{
    public function dzisiaj(): string
    {
        return date(format: 'Y-m-d H:i:s');
    }

    public function dniTygodnia()
    {
    return [
        'Poniedziałek', 'Wtorek', 'Środa', 
        'Czwartek', 'Piątek', 'Sobota', 'Niedziela'
    ];
    }
}