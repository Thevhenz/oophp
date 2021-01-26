<?php 
class ContohStatic {
	public static $angka = 1;

	public static function halo() {
		return "Halo " . self::$angka++ . " kali.";
	}
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";

/*--NOTE--
Static Keyword
-Member yang terkait dengan class, bukan dengan object.
-nilai static akan selalu tetap meskipun object di-instansiasi berulang kali.
-Membuat kode menjadi 'procedural'.
-Biasanya digunakan untuk membuat fungsi bantuan/helper.
-Atau digunakan di class-class utility pada Framework.
*/

//Contoh non Static
class Contoh {
	public $aangka = 1;

	public function haloo() {
		return "Halo " .$this->aangka++. " kali. <br>";
	}
}

echo "Contoh Non Static <br>";
$obj = new Contoh;
echo $obj->haloo();
echo $obj->haloo();
echo $obj->haloo();
?>