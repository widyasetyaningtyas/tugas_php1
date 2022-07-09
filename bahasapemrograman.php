<?php
class bahasa_pemrograman {
	public $bahasa;
	public $release;

	public function pembuka() {
		return "Bahasa Pemrograman ";
	}
}

class php extends bahasa_pemrograman {
	public function data() {
		return "Nama Bahasa Pemrograman : $this->bahasa <br> Rilis Perdana :$this->release";
	}
}
$php = new php();

$php->bahasa = "PHP: Hypertext Prepocessor";
$php->release = "1995";

echo $php->pembuka();
echo "<br/>";
echo $php->data();
?>