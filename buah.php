<?php
class buah {

	public $warna;
	public $nama_buah;
	public $rasa;

	public function beli_buah() {
		return "beli_buah";
	}
}
class semangka extends buah {

	public function lihat_buah() {
		return "nama_buah: $this->nama_buah,warna: $this->warna, rasa: $this->rasa";
	}
}

$beli = new semangka();

$beli->nama_buah = "semangka";
$beli->warna = "merah";
$beli->rasa = "manis";

echo $beli->beli_buah();
echo "<br/>";
echo $beli->lihat_buah();
?>