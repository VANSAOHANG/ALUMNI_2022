<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Univercity extends Model
{
    use HasFactory;

    public function Education(){
        return $this->hasmany(Education::class);
    }
    
    
}
