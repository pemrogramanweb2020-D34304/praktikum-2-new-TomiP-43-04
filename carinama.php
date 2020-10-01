<?php
if(isset($_GET['carinama'])){
	$cari = $_GET['carinama'];
	echo "<b>Hasil pencarian : ".$cari."</b>";

	foreach($user as $n){
	if(strtolower($n["nama"]) == strtolower(carinama)){
		$a=1;
		$b=$n;
	}
}


$user = array(
	array(  "nama"	        => "Arsene Lupin",
		"nik"	          => 1234,
		"jenis_kelamin" => "male",
		"tgl_lahir"     => "1902-03-23"), 
	array(  "nama"	        => "Sherlock Holmes", 
		"nik"			      => 4321,
		"jenis_kelamin"	=> "male",
		"tgl_lahir"		  		=> "1876-08-16"), 
	array(  "nama" 		      	=> "Irene Adler",
		"nik"			      => 6789,
		"jenis_kelamin"	=> "female",
		"tgl_lahir"		  => "1884-10-07"),
);
?>
