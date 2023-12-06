<?php

// Interface untuk menggambarkan fungsi yang berkaitan dengan penyimpanan data Mahasiswa
interface MahasiswaRepositoryInterface {
    public function simpanMahasiswa(Mahasiswa $mahasiswa);
    public function ambilMahasiswa($nim);
}

// Kelas yang bertanggung jawab untuk menyimpan dan mengambil data Mahasiswa dari penyimpanan
class MahasiswaRepository implements MahasiswaRepositoryInterface {
    public function simpanMahasiswa(Mahasiswa $mahasiswa) {
        // Logika untuk menyimpan data Mahasiswa ke penyimpanan (misalnya, database)
        echo "Menyimpan Mahasiswa dengan NIM: " . $mahasiswa->getNim() . "\n";
        // Implementasi penyimpanan data ke database dapat ditambahkan di sini
    }

    public function ambilMahasiswa($nim) {
        // Logika untuk mengambil data Mahasiswa dari penyimpanan (misalnya, database)
        echo "Mengambil Mahasiswa dengan NIM: $nim\n";
        // Implementasi pengambilan data dari database dapat ditambahkan di sini
        return new Mahasiswa($nim, "John Doe", "Informatika");
    }
}

// Kelas yang merepresentasikan data Mahasiswa
class Mahasiswa {
    private $nim;
    private $nama;
    private $jurusan;

    public function __construct($nim, $nama, $jurusan) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJurusan() {
        return $this->jurusan;
    }
}

// Kelas yang bertanggung jawab untuk interaksi dengan Mahasiswa
class KelolaMahasiswa {
    private $repository;

    public function __construct(MahasiswaRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function tambahMahasiswa(Mahasiswa $mahasiswa) {
        // Logika tambah Mahasiswa, jika diperlukan
        $this->repository->simpanMahasiswa($mahasiswa);
    }

    public function dapatkanMahasiswa($nim) {
        // Logika dapatkan Mahasiswa, jika diperlukan
        return $this->repository->ambilMahasiswa($nim);
    }
}

// Contoh penggunaan
$repository = new MahasiswaRepository();
$kelolaMahasiswa = new KelolaMahasiswa($repository);

$mahasiswaBaru = new Mahasiswa("123456", "Jane Doe", "Teknik Elektro");
$kelolaMahasiswa->tambahMahasiswa($mahasiswaBaru);

$mahasiswaDitemukan = $kelolaMahasiswa->dapatkanMahasiswa("123456");
echo "Nama Mahasiswa: " . $mahasiswaDitemukan->getNama() . ", Jurusan: " . $mahasiswaDitemukan->getJurusan() . "\n";

?>
