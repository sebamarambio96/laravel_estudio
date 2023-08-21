<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = "notes";
    protected $fillable = ['title', 'description', 'done'];
    //si seleccionas los fillable no es necesario ya que son lo que no se pueden modificar  protected $guarded = 
    protected $casts = [
        "description" => "string"
    ];
    // los que no queremos que se muestren
    //protected $hidden = ["password"];
}
