<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merchant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function area(){
        return $this->hasOne(Area::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function bankAccount(){
        return $this->hasOne(BankAccount::class);
    }
}
