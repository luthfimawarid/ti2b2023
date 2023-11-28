<?php
include_once "Hewan.php";

class Beruang implements Hewan {
    public function jenisMakanan(): void {
        echo "Jenis makanan beruang yaitu daging";
    }

    public function bersuara(): void {
        echo "beruang memiliki suara atau yang sangat besar";
    }
}
