<?php
class hewan {
	public $nama_hewan;
	public $berkaki;
	public $habitat;

	public function pembuka() {
		return "Turunan Hewan";
	}
}

class ayam extends hewan {
	public function data() {
		return "$this->nama_hewan adalah termasuk hewan berkaki $this->berkaki yang hidup di $this->habitat";
	} 
}
$lihat = new ayam();

$lihat->nama_hewan = " ayam";
$lihat->berkaki = "2";
$lihat->habitat = " daratan";

echo $lihat->pembuka();
echo "<br/>";
echo $lihat->data();
?>