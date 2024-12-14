<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'tb_users';
    protected $primaryKey = 'user_id';

    public $incrementing = true; 
    protected $keyType = 'int'; 

    
    protected $fillable = [
        'user_email',
        'user_password',  
        'user_nama',
        'user_alamat',
        'user_hp',
        'user_pos',
        'user_role',
        'user_aktif',
    ];

    
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'pel_id_user', 'user_id');
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'pel_id_gol', 'gol_id');
    }
}
    



