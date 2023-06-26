<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $messages = [
        'name.required' => 'O campo "Nome" é obrigatório',
        'name.min' => 'O nome deve ter mais de 3 caracteres',
        'name.max' => 'O nome deve ter menos de 50 caracteres',
        'email.required' => 'O campo "E-mail" é obrigatório',
        'email.email' => 'O campo "E-mail" deve ser um e-mail válido',
        'email.unique' => 'O e-mail informado já está em uso',
        'password.required' => 'O campo "Senha" é obrigatório',
        'password.min' => 'A senha deve ter mais de 3 caracteres',
        'password.max' => 'A senha deve ter menos de 50 caracteres',
        'auth.failed' => 'E-mail e/ou senha inválidos',
    ];
}
