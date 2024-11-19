<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegistroExitoso extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hola!')
            ->line('Gracias por registrarte en nuestra aplicación.')
            ->action('Ir a la aplicación', url('/'))
            ->line('¡Estamos felices de tenerte con nosotros!');
    }
}
