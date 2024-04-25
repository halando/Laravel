<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    use HasFactory;


    protected $fillable =[
        "name", "born"
    ];

    public function lending(){
        return $this->hasMany(Lending::class);
    }
    public $timestamps = false;
}
