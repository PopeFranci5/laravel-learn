<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function variations()
    {
        return $this->hasMany(MoneyVariations::class);
    }

    public function stocks()
    {
        return $this->hasOne(Stocks::class);
    }
}
