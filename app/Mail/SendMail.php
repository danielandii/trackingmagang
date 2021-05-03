<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $no_tiket, $tanggal_pengaduan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($no_tiket, $tanggal_pengaduan)
    {
                $this->no_tiket = $no_tiket;
                $this->tanggal_pengaduan = $tanggal_pengaduan;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $data = Pengaduan::first();
        return $this->from('Pengaduanm@gmail.com')
        ->view('mail.index')
        ->with( $this->no_tiket,$this->tanggal_pengaduan);
    }
}
