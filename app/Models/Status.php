<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'statuses';


    protected $fillable = [
        'body'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', "user_id");
    }

}
