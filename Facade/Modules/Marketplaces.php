<?php

namespace Facade\Modules;

use Facade\Modules\Marketplaces as MktPlace;

class Marketplaces
{

    public function __construct(
        private $americanas = new MktPlace\Americanas,
        private $magalu = new MktPlace\Magalu,
        private $mercadolivre = new MktPlace\MercadoLivre,
    )
    {
    }

    public function Integrar()
    {
        $this->americanas->Integrar();
        $this->magalu->Integrar();
        $this->mercadolivre->Integrar();
    }
}
