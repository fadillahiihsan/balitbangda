<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peneliti extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image', 'nama', 'no', 'nip', 'ttl', 'pangkat', 'jabatan', 'kepakaran'
    ];
}
