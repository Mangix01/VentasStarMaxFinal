<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Nombre de la tabla 'categorias'
    protected $primaryKey = 'id'; // LLave primaria de la tabla 'categorias'
    public $timestamps = false; // Desactiva las marcas de tiempo

    protected $fillable = ['categoria', 'descripcion', 'estado']; //Los campos que seran necesarios para ejecutar la tabla y por ende guardar todo en la base de datos

    protected $guarded = []; //Aca vendrian los campos que no qusieramos que considere el modelo
}
