<?php
class siswa {
	public $nama;
	public $rombel;
	public $umur;

	public function perkenalan() {
		return "Memperkenalkan diri";
	}
}

class dina extends siswa {
	public function data() {
		return "Halo, nama saya $this->nama, saya dari rombel $this->rombel dan umur saya $this->umur";
	}
}
$beli = new dina();

$beli->nama = " Dina";
$beli->rombel = " XI RPL";
$beli->umur = " 17 tahun";

echo $beli->perkenalan();
echo "<br/>";
echo $beli->data();
?>