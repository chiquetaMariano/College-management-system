<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MailResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $link = url( "/password/reset/token=" . $this->token );
        return (new MailMessage)
                    ->subject('Reestablecimiento de cuenta')
                    ->greeting('ISFT 38')
                    ->from('isft38@example.com')
                    ->line('Se solicitó un cambio de contraseña para tu cuenta.')
                    ->action('Restablecer contraseña', $link)
                    ->line( "Si no ha solicitado un cambio de contraseña, puede ignorar este correo." )
                    ->line( 'Saludos cordiales,' )
                    ->salutation( 'ISFT 38' );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
