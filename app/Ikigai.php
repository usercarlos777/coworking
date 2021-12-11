<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ikigai extends Model
{
    protected $fillable = [
        'count',
        'count_money',
        'user_id'
    ];

    public function user()
    {
        return $this->belonsTo(User::class);
    }
}
