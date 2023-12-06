<?php

// Kelas Alamat
class Alamat {
    private $jalan;
    private $kota;
    private $kodePos;

    public function __construct($jalan, $kota, $kodePos) {
        $this->jalan = $jalan;
        $this->kota = $kota;
        $this->kodePos = $kodePos;
    }

    public function getAlamatLengkap() {
        return "{$this->jalan}, {$this->kota}, {$this->kodePos}";
    }
}

// Kelas Customer
class Customer {
    private $nama;
    private $alamat; // Objek dari kelas Alamat

    public function __construct($nama, Alamat $alamat) {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function getInformasiCustomer() {
        return "Nama: {$this->nama}, Alamat: {$this->alamat->getAlamatLengkap()}";
    }
}

// Membuat objek Alamat
$alamatCustomer = new Alamat("Jalan Rasamala", "Kota Mangga", "45212");

// Membuat objek Customer dengan menggunakan objek Alamat yang telah dibuat
$customer1 = new Customer("Luthfi" . "<br>", $alamatCustomer);

// Menampilkan informasi customer
echo $customer1->getInformasiCustomer();
?>