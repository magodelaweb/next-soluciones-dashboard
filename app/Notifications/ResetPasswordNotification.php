<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;
    protected $url;
    public function __construct($url)
    {
        $this->url=$url;
    }
    public function via($notifiable)
    {
        return ['mail'];
    }
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('¡Hola!')
                    ->line('Recibió este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.')
                    ->action('Resetear Password', $this->url)
                    ->line('Este enlace de restablecimiento de contraseña caducará en 60 minutos.')
                    ->line('Si no solicitó un restablecimiento de contraseña, no se requiere ninguna otra acción.');
    }
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
