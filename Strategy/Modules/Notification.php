<?php

namespace Strategy\Modules;

use Strategy\Modules\Interfaces\INotification;

class Notification implements INotification
{
    private $notification;

    public function __construct(iNotification $notification){
        $this->notification = $notification;
    }
    
	public function isValid(): bool {
        return $this->notification->isValid();

	}
	

	public function send(string $message): bool {
        return $this->notification->send($message);
	}
}