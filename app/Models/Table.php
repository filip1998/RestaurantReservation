<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    public function restaurant(){
        return $this->belongsTo(Restaurant::class, 'res_id');
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
