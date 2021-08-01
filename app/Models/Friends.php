<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;
    protected $fillable = ['namasepatu', 'harga', 'stock', 'ukuran'];

    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }
}
