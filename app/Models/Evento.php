<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'local',
        'data_inicio',
        'hora_inicio',
        'data_fim',
        'hora_fim',
        'palestrante',
        'programacao',
        'hoteis',
        'galeria',
        'orgnizacao',
        'sobre_evento',
        'sobre_local',
        'fotos_local',
        'email',
        'contato',
        'local_organizacao',
        'facebook',
        'instagram',
        'twitter',
        'free',
        'user_id',
        'tema',
        'endereco',
        'link_youtube',
        'link_mapa',


    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
