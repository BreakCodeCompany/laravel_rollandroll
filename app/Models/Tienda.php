<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'pgsql';
    protected $table = 'tiendas';
    protected $fillable = ['id','nombre'];

    use HasFactory;
}
