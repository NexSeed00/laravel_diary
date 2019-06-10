<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TheSeer\Tokenizer\Exception;

class Diary extends Model
{
    const STATUS = [
        'applying',
        'attended',
        'denied',
    ];

    public function getUserIdTextAttribute()
    {
        // $this->user_id_text

        // switch($this->attributes['status']) {
        //     case 1:
        //         return 'applying';
        //     case 2:
        //         return 'attended';
        //     case 3:
        //         return 'denied';
        //     default:
        //         return '??';
        // }

        $status = $this->attributes['status'];

        return self::STATUS[$status];

    }

    public function likes()
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }

}
