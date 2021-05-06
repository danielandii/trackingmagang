<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendTanggapanMail extends Mailable
{
    use Queueable, SerializesModels;
    public $tanggal_tanggapan, $pengaduan_status, $pengaduan_email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tanggal_tanggapan, $pengaduan_status, $pengaduan_email)
    {
                $this->tanggal_tanggapan = $tanggal_tanggapan;
                $this->pengaduan_status = $pengaduan_status;
                $this->pengaduan_email = $pengaduan_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Pengaduanm@gmail.com')
        ->view('mail.tanggapan')
        ->with(  $this->tanggal_tanggapan,$this->pengaduan_status, $this->pengaduan_email);
        // return $this->view('view.name');
    }
}
