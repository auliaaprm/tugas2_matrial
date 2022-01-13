<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'groups_id'
    ];
    
    public function users()
    {
        return $this->hasMany(Users::class);
    }
    public function groups()
    {
        return $this->belongsTo(Groups::class, 'groups_id', 'id');
    }

    public function riwayats()
    {
        return $this->hasMany(Riwayat::class);
    }
}
