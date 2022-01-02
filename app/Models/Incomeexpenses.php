<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Incomeexpenses extends Model
{
    use SoftDeletes;



    protected $fillable = [
        'user_id',
        'type',
        'amount',
        'details',
        'date',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
