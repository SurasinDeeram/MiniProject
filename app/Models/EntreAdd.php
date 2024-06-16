<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntreAdd extends Model
{
    protected $table = 'entre_adds'; 
    protected $primaryKey = 'id'; 

    public function entre()
    {
        return $this->belongsTo(Entre::class, 'entre_id');
    }
}
