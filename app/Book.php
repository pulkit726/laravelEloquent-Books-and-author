<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use Notifiable;
    protected $fillable = [
        'book_name', 'book_price', 'user_id','book_status'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
