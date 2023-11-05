<?php
include_once "Hewan.php";

class Kelinci implements Hewan {
    public function jenisMakanan(): void {
        echo "Jenis makanan kelinci yaitu sayuran, biasanya kelinci suka wortel";
    }

    public function bersuara(): void {
        echo "Kelinci mengeluarkan banyak suara mulai dari dengkuran hingga geraman";
    }
}
