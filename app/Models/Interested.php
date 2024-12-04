<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interested extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
