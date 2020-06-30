<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;

    protected $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        //creiamo un ponte tra qua e in PostController dove abbiamo passato il paramentro $newPost in SEND
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->//view('mail.newpost')
                    markdown('mail.newpost')
                    ->with([
                        'title' => $this->post->title,
                        'slug' => $this->post->slug,
                        'body' => $this->post->body,
                        'img' => $this->post->img,
                    ])
                    ->subject('nuovo post creato');
    }
}
