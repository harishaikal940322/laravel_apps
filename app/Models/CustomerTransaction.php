<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;
    public $table = 'customer_transaction';
    protected $fillable = ['invoice', 'customer_id', 'created_at', 'updated_at'];

    public function custName()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
