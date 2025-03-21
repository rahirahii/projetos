<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [
        'rm',
        'ano_escolar',
        'user_id'
    ];

 public function user(){
    return $this->belongsTo(User::class, 'user_id', 'id');
 }   
}
