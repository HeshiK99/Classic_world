<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\brand;

class Brands extends Model
{
    use HasFactory;
    protected $table='brand';
    protected $guarded=[];
    protected $fillable=[];
}
