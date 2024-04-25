<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{
    use HasFactory;

    protected $fillable =[
        "writer", "type", "title", "lender_id",
    ];

    public function lender(){
        return $this->belongsTo(Lender::class);
    }
    public $timestamps = false;
}
