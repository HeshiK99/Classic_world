<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class Categories extends Model
{
    use HasFactory;
    protected $table='category';
    protected $guarded=[];
    protected $fillable=[];
}
