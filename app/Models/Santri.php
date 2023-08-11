<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $table = 'tb_santri';
    protected $fillable = [
        'id_pps','nama','role','nik','password', 'domisili', 'alamat','orangtua','no_hp','status','foto'
    ];
    protected $hidden = [
        'remember_token'
    ];
    protected $casts = [
        'nik_verified_at'=>'datetime',
    ];
    public function foto()
    {
        if ($this->foto) {
            return asset('admin/images/'. $this->foto);
        }else{
            return asset('admin/images/siska.png');
        }
    }
}
