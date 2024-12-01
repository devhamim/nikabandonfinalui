<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethord extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_package(){
        return $this->belongsTo(package::class, 'packages');
    }
}
