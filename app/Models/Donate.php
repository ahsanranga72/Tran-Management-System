<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;
    protected $table = "donates";

    public function donate()
    {
        return $this->belongsTo(Tran::class, 'tran_id');
        return $this->belongsTo(User::class, 'user_id');
    }
}
