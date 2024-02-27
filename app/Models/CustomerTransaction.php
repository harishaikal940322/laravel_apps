<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;
    public $table = 'customer_transaction';

    public function custName()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
