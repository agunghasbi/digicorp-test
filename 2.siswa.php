<?php


class Nilai
{
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}


class Siswa
{
    public $nrp;
    public $nama;
    public $daftarNilai = [];

    public function __construct($nrp, $nama)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
    }

    public function insertNilai($mapel, $nilai)
    {
        $nilai = new Nilai($mapel, $nilai);
        $this->daftarNilai[] = $nilai;
    }
}


// Example 1 : siswa dengan mapel inggris dan nilai 100
$siswa1 = new Siswa('12345678', 'Agung');

$siswa1->insertNilai('inggris', 100);

var_dump($siswa1);

// Example 2 : Generate 10 siswa
$listSiswa = [];
$mapels = ['inggris', 'indonesia', 'jepang'];
for ($i = 1; $i <= 10; $i++) {
    $randNama = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", 10)), 0, 10);
    $siswa = new Siswa($i, $randNama);

    $siswa->insertNilai($mapels[rand(0, 2)], rand(0, 100));

    $listSiswa[] = $siswa;
}

var_dump($listSiswa);
