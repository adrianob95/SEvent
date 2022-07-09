<?php

namespace Database\Seeders;

use App\Models\Evento;
use App\Models\User;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

         User::factory()->create([
            'name' => 'Adriano Barbosa',
            'email' => 'adrianobarbosa95@gmail.com',
            'password' => Hash::make('1010'),
            'permission' => 'usuario',

        ]);
        Evento::factory()->create([
             
            'nome' => '19ª Semana Nacional de Ciência e Tecnologia (SNCT)',
            'tema' => 'Bicentenário da Independência: 200 anos de ciência, tecnologia e inovação no Brasil',
            'local' => 'Intituto Federal de Educação, Ciências e Tecnologia da Bahia',
            'data_inicio' => fake()->date(),
            'hora_inicio' => fake()->time(),
            'data_fim' => fake()->date(),
            'hora_fim' => fake()->time(),
            'free' => fake()->boolean(),
            'palestrante' => fake()->boolean(),
            'programacao' => fake()->boolean(),
            'endereco' => 'Tv. Santo Amaro, 44 - Santo Amaro, BA, 44200-000',
            'hoteis' => fake()->boolean(),
            'galeria' => fake()->boolean(),
            'orgnizacao' => fake()->boolean(),
            'sobre_evento' => 'Todas as pessoas interessadas podem participar das atividades da SNCT. Atualmente, colaboram com a realização deste grande evento as universidades e instituições de pesquisa; escolas públicas e privadas; institutos de ensino tecnológico, centros e museus de C&T; entidades científicas e tecnológicas; fundações de apoio à pesquisa; parques ambientais, unidades de conservação, jardins botânicos e zoológicos; secretarias estaduais e municipais de C&T e de educação; empresas públicas e privadas; meios de comunicação; órgãos governamentais; ONGs e outras entidades da sociedade civil.',
            'sobre_local' => 'O Instituto Federal de Educação, Ciência e Tecnologia da Bahia (IFBA) é resultado das mudanças promovidas no antigo Centro Federal de Educação Tecnológica da Bahia (Cefet-BA).',
            'fotos_local' => fake()->boolean(),
            'email' => fake()->email(),
            'contato' => fake()->phoneNumber(),
            'local_organizacao' => 'Praça Municipal S/N, Centro - Santo Amaro, Bahia - 44200000',
            'facebook' => 'facebook.com/adrianob95',
            'instagram' => 'instagram.com/adrianobarbosa95',
            'twitter' => 'twitter.com/adrianob95',
            'link_youtube' => 'https://www.youtube.com/watch?v=h-j55nIQ9HY',
            'link_mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3894.5581106791!2d-38.725886484866756!3d-12.545406530569863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x715d7465a392eb9%3A0x17cd2e34c52cb076!2sIFBA%20-%20Campus%20Santo%20Amaro!5e0!3m2!1spt-BR!2sbr!4v1657295129022!5m2!1spt-BR!2sbr',
            'user_id' => 1,

        ]);
    }
}