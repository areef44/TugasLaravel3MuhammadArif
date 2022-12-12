<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admins extends Model
{
    use HasFactory;

    public $guarded = ["id"];
    protected $table = "admins";

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Admins $pengguna) {
            $pengguna->password = Hash::make($pengguna->password);
        });

        static::updating(function (Admins $pengguna) {
            if ($pengguna->isDirty(["password"])) {
                $pengguna->password = Hash::make($pengguna->password);
            }
        });
    }
}
