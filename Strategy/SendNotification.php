<?php

include('autoloader.php');

use Strategy\Modules\Notification;
use Strategy\Modules\Notifications;

// Envio de E-mail
$Notification = new Notification(new Notifications\EmailNotification());
$Notification->send('E-mail enviado com sucesso!');

// Envio de SMS
$Notification = new Notification(new Notifications\SMSNotification());
$Notification->send('SMS enviado com sucesso!');

// Envio de WhatsApp
$Notification = new Notification(new Notifications\WhatsAppNotification());
$Notification->send('WhatsApp enviado com sucesso!');
