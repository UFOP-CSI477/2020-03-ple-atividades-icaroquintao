<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','equipamento_id','descricao','datalimite', 'tipo'];
    // protected $guarded = ['_token']; //admin
    //protected $dates = ['datalimite'];

    public function equipamento() {
        
        return $this->belongsTo(Equipamento::class);
    }

    public function user() {
        
        return $this->belongsTo(User::class);
    }

}