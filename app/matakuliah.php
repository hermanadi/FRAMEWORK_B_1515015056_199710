<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'Matakuliah';
    protected $fillable = ['title','keterangan'];

	public function dosen_matakuliah(){
	return $this->HasMany(DosenMatakuliah::class); //one to Many dari dosen matakuliah (one) ke Jadwal matakuliah (many)

	}	
	}

