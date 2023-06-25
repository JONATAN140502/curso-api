<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded = [
        ''
    ];
    protected $fillable = [
        'name', 'state'
    ];

    protected $dates = ['deleted_at'];
}
