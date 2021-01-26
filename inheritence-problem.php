<?php 

class Produk {
	//Membuat properti
	public 	$judul,
			$penulis,
			$penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;
	
	//membuat method
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe") {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
    }
	public function getLabel() {
		return "$this->penulis,
				$this->penerbit";
    }
    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        }
        else if($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}
class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}		

//Produk
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

/*--NOTE--
Inheritance
-Menciptakan hierarki antar kelas (Parent & Child).
-Child Class, mewarisi semua properti dan method dari parent-nya (yang visible).
-Child Class, memperluas(extend) fungsional dari parent-nya.
*/
?>