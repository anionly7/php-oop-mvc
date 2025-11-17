<?php
class Mahasiswa
{
    private $nama;
    private $nim;

    public function __construct($nama, $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function sayHello()
    {
        return "Halo, saya adalah Mahasiswa {$this->nama}.<br>" .
            "NIM saya adalah {$this->nim}. Selamat datang di dunia OOP!";
    }
}
