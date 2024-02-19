<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class NewsletterEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $content;
    public $filePath;
    public $email;


    /***
     * @param $title
     * @param $content
     * @param $media
     * @param $email
     */
    public function __construct($title, $content, $media, $email){$this->title = $title;$this->content = $content;$this->filePath = $media ? Storage::disk('public')->path($media->getPath()) : null;$this->email = $email;}


    /***
     * @return NewsletterEmail
     */
    public function build(){$mail = $this->subject($this->title)->to($this->email)->html(htmlspecialchars_decode($this->content));

        if ($this->filePath) {
            $mail->attach($this->filePath);
        }

        return $mail;
    }
}
