<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Mahasiswa;
use App\Pengguna;


class MahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Fajar Kh";
    	$mahasiswa->nim = "1515015088";
    	$mahasiswa->alamat = "Pramuka 6";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
public function semua_mahasiswa() {
	$mahasiswa = mahasiswa::all();  //untuk menampilkan semua data 
	foreach ($mahasiswa as $mhs) {  //panggilnya pakai foreach
	echo "nama :" .$mhs->nama;
	echo "<br>";
	echo "username :" .$mhs->pengguna->username; 
	echo "<p>";} 
	}
	
public function mahasiswa () {
	$mahasiswa = mahasiswa::find(7);
	echo "nama :" .$mahasiswa->nama;
	echo "<br>";
	echo "username :" .$mahasiswa->pengguna->username;
}

}
