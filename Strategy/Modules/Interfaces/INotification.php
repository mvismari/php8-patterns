<?php

namespace Strategy\Modules\Interfaces;

interface INotification
{
    // Regra de validação em cada classe.
    public function isValid() : bool;

    // Envio da notificação
    public function send(string $Message) : bool;
}