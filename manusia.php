<?php
class manusia{
	public $nama_saya;
	function berinama ($saya){
		$this->nama_saya=$saya;
	}
}

class teman extends manusia{
	public $nama_teman;

	function berinamateman ($teman){
		$this->nama_teman=$teman;
	}
}

$nama = new teman;

$nama->berinama(" Sari");
$nama->berinamateman(" Sinta");

echo "Nama Saya :" .$nama->nama_saya. "<br/>";
echo "Nama Teman Saya :" .$nama->nama_teman;
?>