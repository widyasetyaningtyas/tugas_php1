<?php
class orang{
	public $nama_saya;
	function beri_nama($saya){
		$this->nama_saya=$saya;
	}
}

class teman extends orang{
	public $nama_teman;
	function beri_nama_teman($teman){
		$this->nama_teman=$teman;
	}
}
$nama = new teman;

$nama->beri_nama(" Nida");
$nama->beri_nama_teman(" Sari");

echo "Nama Saya :" .$nama->nama_saya. "<br/>";
echo "Nama Teman Saya :" .$nama->nama_teman;
?>