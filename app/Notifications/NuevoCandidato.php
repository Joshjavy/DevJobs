<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevoCandidato extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $id_vacante;
    private $nombre_vacante;
    private $usuario_id;

    public function __construct($id_vacante, $nombre_vacante, $usuario_id)
    {
        $this->id_vacante = $id_vacante;
        $this->nombre_vacante = $nombre_vacante;
        $this->usuario_id= $usuario_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)//Configurar para mails
    {
        $url=url('candidatos/'.$this->id_vacante);
        return (new MailMessage)
                    ->line('Has recibido un nuevo candidato en tu vacante')
                    ->line('La vacante es: '.$this->nombre_vacante)
                    ->action('Ver notificaciones ',$url)
                    ->line('Gacias por utilizar DebJobs');
    }

    /**
     * Almacena la notificaciones en la base de datos
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'id_vacante'=>$this->id_vacante,
            'nombre_vacabte'=>$this->nombre_vacante,
            'usuario_id'=> $this->usuario_id,
        ];
    }
}
