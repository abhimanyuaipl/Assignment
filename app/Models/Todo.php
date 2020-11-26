<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user-id',
        'body'
       
    ];




    public function user(){
        
            return $this->belongsTo('App\Models\User','user-id','id');
        
    }
}
