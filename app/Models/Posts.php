<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;

class Posts extends Model
{
    use HasFactory;
    protected $fillable =['title','content','tags'];

    protected $with = ['user'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
