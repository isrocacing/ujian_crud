<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    //protected $primaryKey = 'id';
    protected $table = 'ujian';
    protected $fillable = ['id','nama_MK','dosen','jumlah_soal','keterangan','created_at','update_at'];
}
