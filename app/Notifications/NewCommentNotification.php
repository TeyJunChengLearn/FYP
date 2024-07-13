<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Comment;

class NewCommentNotification extends Notification
{
    use Queueable;

    protected $comment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
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
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A new comment has been added to your post.')
                    ->action('View Comment', url('/posts/' . $this->comment->post_id))
                    ->line('Thank you for using our forum!');
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
            'description' => $this->comment->description,
            'datetime' => now(),
            'lostandfoundannouncement_id' => $this->comment->lostandfoundannouncement_id,
            'announcement_id' => $this->comment->announcement_id,
            'forumpost_id' => $this->comment->forumpost_id,
            'petowner_id' => $this->comment->petowner_id,
            'animalrescuersandshelters_id' => $this->comment->animalrescuersandshelters_id,
        ];
    }
}
