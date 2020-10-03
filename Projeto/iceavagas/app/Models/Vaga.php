<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'empresa', 'email', 'descricao', 'local', 'data', 'area', 'tipo', 'status', 'user_id', 'link'
    ];
    public function user() {
        
        return $this->belongsTo(User::class);
    }
}
