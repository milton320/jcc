<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    //la relacion 1 a 1 Inversa Personal-Usuario

    public function personal(){
        return $this->belongsTo(Personal::class);
    }


}
