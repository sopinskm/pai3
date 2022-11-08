<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Liczby;
use Application\Model\Data;
use Application\Model\Miesiace;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    //public function __construct(private Data $data)
    //{}

    //public function __construct(private Miesiace $miesiace)
    //{}
    
    public function __construct(private Liczby $liczby)
    {}

    public function indexAction()
    {
        return new ViewModel();
    }

    public function dataAction()
    {
        return new ViewModel([
            //'dzisiaj' => $this->data->dzisiaj(),
            //'dni_tygodnia' => $this->data->dniTygodnia(),  
        ]);
    }

    public function miesiaceAction()
    {
        return new ViewModel([ 
            'tablica_miesiecy' => $this->miesiace->pobierzWszystkie(),
        ]);
    }

    public function liczbyAction()
    {
        return new ViewModel([ 
            'tablica_liczb' => $this->liczby->generuj(),
        ]);
    }
}
