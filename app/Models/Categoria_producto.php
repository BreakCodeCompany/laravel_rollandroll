<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_producto extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'pgsql';
    protected $table = 'categoria_productos';
    protected $fillable = ['id','nombre'];

    use HasFactory;
}
