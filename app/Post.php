<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getStatusAttribute($attributes)
    {
        return [
            '0' => 'Indéterminée',
            '1' => 'Blanche',
            '2' => 'Blonde',
            '3' => 'Brune',
            '4' => 'Ambrée',
            '5' => 'Rosée',
            '6' => 'Noire',
        ] [$attributes];
    }
}
