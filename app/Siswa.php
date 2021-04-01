<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	protected $table ="register";

    protected $fillable =[
        'id','nis','nama','jns_kelamin','tmp_lahir','tgl_lahir','alamat','asal_sekola','kelas','jurusan'
    ];
}
