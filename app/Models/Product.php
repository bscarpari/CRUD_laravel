<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    // Atributos que podem ser preenchidos
    protected $fillable = [
        'title',
        'description',
        'photo',
        'price',
    ];

    // Regras para validação
    public $rules = [
        'title' => 'required|min:3|max:50',
        'description' => 'max:255',
        'price' => 'numeric|required',
        'photo' => 'required',
    ];

    // Mensagens de erro
    public $messages = [
        'title.required' => 'O campo "Título" é obrigatório',
        'title.min' => 'O título deve ter mais de 3 caracteres',
        'title.max' => 'O título deve ter menos de 50 caracteres',
        'description' => 'A descrição deve ter menos de 255 caracteres',
        'price.numeric' => 'O preço deve ser um número',
        'price.required' => 'O campo "Preço" é obrigatório',
        'photo.required' => 'O campo "Foto" é obrigatório',
    ];
}
