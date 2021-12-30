<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tran extends Model
{
    use HasFactory;
    protected $table = "trans";

    public function tran()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
