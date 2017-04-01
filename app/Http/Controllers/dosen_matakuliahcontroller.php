<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_matakuliah;
use App\Matakuliah;

class Dosen_matakuliahController extends Controller
{
     public function awal(){
    	return "Hello dari Dosen matakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen_matakuliah = new Dosen_matakuliah();
    	$dosen_matakuliah->dosen_id = 1;
    	$dosen_matakuliah->matakuliah_id = 1;
    	$dosen_matakuliah->save();
    	return "Data Dosen Matakuliah dengan id Dosen {$dosen_matakuliah->dosen_id} telah disimpan";
}
public function semua_dosen() {
	$dosen = dosen_matakuliah::all();  //untuk menampilkan semua data 
	foreach ($dosen as $dos) {  //panggilnya pakai foreach
	echo "nama dosen :" .$dos->dosen->nama; //panggil nama dosen
	echo "<br>"; // spasi
	echo "NIP :" .$dos->dosen->nip; //panggil nip dosen
	echo "<p>";} 
	}
public function semua_matkul() {
	$dosen = dosen_matakuliah::all();  //untuk menampilkan semua data 
	foreach ($dosen as $dos) {  //panggilnya pakai foreach
	echo "nama dosen :" .$dos->dosen->nama; //panggil nama dosen
	$matkul = $dos->matakuliah_id; //panggil id matakuliah
	echo "<br>";
	echo " Mengajar Pada matakuliah :" .matakuliah::where("id", "=", $matkul)->get();
}
}
}