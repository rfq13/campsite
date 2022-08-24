<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    // belongs to Transaction
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    // belongs to Service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // belongs to Campsite
    public function campsite()
    {
        return $this->belongsTo(Campsite::class);
    }
}
