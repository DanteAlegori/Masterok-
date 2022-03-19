<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Repair extends Model
{

    protected $fillable = [
        'address', 'user_id', 'description', 'category', 'price', 'image',
    ];

    

    public function user() {
        return $this->belongsTo(User::class);
    }

}
