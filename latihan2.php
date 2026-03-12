<?php

interface Notifikasi
{
    public function kirim();
}

class Email implements Notifikasi
{
    public function kirim()
    {
        echo "Notifikasi dikirim melalui Email<br>";
    }
}

class SMS implements Notifikasi
{
    public function kirim()
    {
        echo "Notifikasi dikirim melalui SMS<br>";
    }
}

class WhatsApp implements Notifikasi
{
    public function kirim()
    {
        echo "Notifikasi dikirim melalui WhatsApp<br>";
    }
}

$email = new Email();
$email->kirim();

$sms = new SMS();
$sms->kirim();

$whatsapp = new WhatsApp();
$whatsapp->kirim();
