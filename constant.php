<?php 

//Tidak bisa berjalan di dalam class
// define('NAMA', 'Muhammad Sofyan');
// echo NAMA;

// echo "<br>";

//Bisa berjalan di dalam class
// const UMUR = 21;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Sofyan';
// }

// echo Coba::NAMA;

//#Magic Constant

// echo __FILE__;

// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>