<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewArticleAlert extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private $details;
    public function __construct($details)
    {
        //
        $this->details =  $details;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->from('info@newsarticle.com')
                    ->greeting('Hi , Admin')
                    ->subject('News Article Created')
                    ->line($this->details['name'] .' has created a new Article about : ' . $this->details['article_title'])
                    ->action('Approve or Disapprove', url('/admin/article/'.$this->details['article_id']))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
