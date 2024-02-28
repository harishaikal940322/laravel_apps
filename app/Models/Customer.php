<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer2';
    protected $fillable = ['name', 'address1', 'address2', 'address3', 'created_at', 'updated_at'];
}
