<?php
class bangun_datar {
	public $nama_bangun_datar;
	
	public function pembuka() {
		return "Bngun Datar ";
	}
}

class lingkaran extends bangun_datar {
	public function data() {
		return "$this->nama_bangun_datar termasuk dalam bangun datar";
	}
}
$lihat = new lingkaran();

$lihat->nama_bangun_datar = "lingkaran";

echo $lihat->pembuka();
echo "<br/>";
echo $lihat->data();
?>