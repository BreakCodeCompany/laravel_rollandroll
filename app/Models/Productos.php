<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{   use HasFactory;
    protected $primaryKey = 'codigo';   
    protected $connection = 'pgsql';
    protected $table = 'productos';
    protected $fillable = [
        'codigo','nombre', 'id_proveedors', 'id_categoria', 'stock', 'id_medida', 'imagen', 'descripcion'];

    public function show_categoria_producto(){   
        return $this->belongsTo(Categoria_producto::class, 'id_categoria');
    }
    public function show_proveedor(){   
        return $this->belongsTo(Proveedor::class, 'id_proveedors');
    }
    public function show_medida(){   
        return $this->belongsTo(Medidas::class, 'id_medida');
    }
}
