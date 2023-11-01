<?php

namespace App\Models;

use App\Models\Merchant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function merchant(){
        return $this->belongsTo(Merchant::class,'area_id');
    }
}
