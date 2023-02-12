<?php

interface iNotification
{
    // Regra de validação em cada classe.
    public function isValid() : bool;

    // Envio da notificação
    public function send() : bool;
}