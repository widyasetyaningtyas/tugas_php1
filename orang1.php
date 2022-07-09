<?php
class orang{
	public $nama_saya;
	function berinama($saya){
		$this->nama_saya=$saya;
	}
}

class teman extends orang{
	public $nama_teman;
	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
}
$nama = new teman;

$nama->berinama(" Rara");
$nama->berinamateman(" Sefyana");

echo "Nama Saya :" .$nama->nama_saya. "<br/>";
echo "Nama Teman Saya :" .$nama->nama_teman;
?>