<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'Ruangan';
    protected $fillable = ['title'];

	public function jadwal_matakuliah(){
	return $this->HasMany(Jadwal_mahasiswa::class); //one to Many dari jadwal_matakuliah (one) ke Jadwal matakuliah (many)

	}	
	}

