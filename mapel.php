<?php
class mapel {
	public $mapel;
	public $pengampu;

	public function pertama() {
		return "Mapel yang di ajarkan di sekolah ";
	}
}

class matematika extends mapel {
	public function data() {
		return "Nama Mapel : $this->mapel <br> Pengampu :$this->pengampu";
	}
}
$tampil = new matematika();

$tampil->mapel = "Matematika";
$tampil->pengampu = " Bu Etydyah";

echo $tampil->pertama();
echo "<br/>";
echo $tampil->data();
?>