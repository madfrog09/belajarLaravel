<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
	protected $table = "siswas";
	protected $fillable = [
        'nis', 'nama_lengkap', 'kelas', 'angkatan', 'ttl', 'telp_ortu', 'email', 'nama_pengguna', 'katasandi', 'token','aktif','created_at','updated_at'
    ];

	//fungsi buat generate token
    public function GenerateToken()
    {
        $token = $this->token;

        if (!$token) {
            
            $token = str_random(40);
            $this->token = $token;
            $this->save();
        }

        return $token;
    }

	//fungsi buat remove token
    public function removeToken()
    {
        $token = $this->token;
        if ($token) {
            $this->token = "";
            $this->save();
        }
    }
}
