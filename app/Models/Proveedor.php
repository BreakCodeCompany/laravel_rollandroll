<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'pgsql';
    protected $table = 'proveedors';
    protected $fillable = ['id','nombre','direccion'];

    use HasFactory;
}
