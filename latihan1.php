<?php

class BangunDatar
{
    public function hitungLuas()
    {
        echo "Menghitung luas bangun datar tak terdefinisi...\n";
        return 0;
    }
}

class Persegi extends BangunDatar
{
    public $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuas()
    {
        $luas = $this->sisi * $this->sisi;
        echo "Luas Persegi (sisi " . $this->sisi . ") = " . $luas . "\n";
        return $luas;
    }
}

class Lingkaran extends BangunDatar
{
    public $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function hitungLuas()
    {
        $luas = pi() * $this->r * $this->r;
        echo "Luas Lingkaran (jari-jari " . $this->r . ") = " . $luas . "\n";
        return $luas;
    }
}

class Segitiga extends BangunDatar
{
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas()
    {
        $luas = 0.5 * $this->alas * $this->tinggi;
        echo "Luas Segitiga (alas " . $this->alas . ", tinggi " . $this->tinggi . ") = " . $luas . "\n";
        return $luas;
    }
}

$bangunDatar = new BangunDatar();
$persegi = new Persegi(5);
$lingkaran = new Lingkaran(7);
$segitiga = new Segitiga(6, 8);

echo "--- Hasil Perhitungan Luas ---\n";
$bangunDatar->hitungLuas();
$persegi->hitungLuas();
$lingkaran->hitungLuas();
$segitiga->hitungLuas();
