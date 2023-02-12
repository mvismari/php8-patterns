<?php

namespace Strategy\Modules\Notifications;

use Strategy\Modules\Interfaces\INotification;

class WhatsAppNotification implements INotification
{


        public function isValid(): bool
        {

                // Monte suas validações aqui

                return TRUE;
        }


        public function send(string $message): bool
        {
                if ($this->isValid()) {

                        // Envia a notificação
                        echo $message, PHP_EOL;

                        return TRUE;
                }
                return FALSE;
        }
}
