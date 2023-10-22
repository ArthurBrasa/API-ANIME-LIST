<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Anime 101
        DB::table('animes')->insert([
            'title' => 'The Promised Neverland',
            'synopsis' => 'Emma, Norman e Ray são órfãos que descobrem um terrível segredo sobre o orfanato em que vivem. Eles planejam uma fuga para descobrir a verdade sobre o mundo exterior e proteger seus amigos.',
            'release_date' => '2019-01-11',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/1960/96487.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 102
        DB::table('animes')->insert([
            'title' => 'Haikyuu!!',
            'synopsis' => 'Hinata Shoyo é um entusiasta do vôlei que sonha em ser um jogador de destaque. Ele se junta a uma escola secundária e encontra seu rival, Kageyama Tobio, e juntos eles buscam a glória no vôlei.',
            'release_date' => '2014-04-06',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/3/66830.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
        ]);

        // Anime 103
        DB::table('animes')->insert([
            'title' => 'One Piece',
            'synopsis' => 'Monkey D. Luffy, um jovem com poderes especiais adquiridos após comer uma fruta do diabo, parte em uma jornada para encontrar o One Piece, o maior tesouro do mundo, e se tornar o Rei dos Piratas. Ele forma uma tripulação de piratas chamada Bando do Chapéu de Palha e enfrenta inúmeros desafios em sua busca.',
            'release_date' => '1999-10-20',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/6/73245.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 104
        DB::table('animes')->insert([
            'title' => 'Bleach',
            'synopsis' => 'Bleach segue as aventuras de Ichigo Kurosaki, um adolescente que acidentalmente obtém os poderes de um Ceifeiro de Almas, uma figura responsável por proteger os vivos dos espíritos malignos e encaminhar as almas dos mortos para o outro mundo.',
            'release_date' => '2004-10-05',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/11/18847.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 105
        DB::table('animes')->insert([
            'title' => 'Attack on Titan',
            'synopsis' => 'Em um mundo onde a humanidade está à beira da extinção devido a gigantes humanoides devoradores de humanos, um grupo de jovens decide lutar contra essas ameaças em busca da verdade por trás do mistério.',
            'release_date' => '2013-04-06',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/10/47347.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 107
        DB::table('animes')->insert([
            'title' => 'Hunter x Hunter',
            'synopsis' => 'Gon Freecss embarca em uma jornada para se tornar um Caçador, uma elite que busca tesouros, criaturas raras e desafios. Ele faz amizade com outros Caçadores e enfrenta inúmeros perigos em sua busca.',
            'release_date' => '2011-10-02',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/11/33657.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 108
        DB::table('animes')->insert([
            'title' => 'My Hero Academia',
            'synopsis' => 'Em um mundo onde a maioria das pessoas possui superpoderes, um jovem chamado Izuku Midoriya luta para se tornar um herói, mesmo sem ter poderes iniciais. Ele é aceito em uma escola de heróis e começa sua jornada para se tornar o maior herói.',
            'release_date' => '2016-04-03',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/10/78745.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 109
        DB::table('animes')->insert([
            'title' => 'Sword Art Online',
            'synopsis' => 'Jogadores de um MMORPG virtual ficam presos dentro do jogo e precisam lutar até o topo da torre para serem libertados. O protagonista, Kirito, embarca em uma jornada para escapar e desvendar o mistério.',
            'release_date' => '2012-07-08',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/17/84439.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 110
        DB::table('animes')->insert([
            'title' => 'Cowboy Bebop',
            'synopsis' => 'Em um futuro distante, um grupo de caçadores de recompensas viaja pela galáxia em busca de criminosos. Cada membro da tripulação tem um passado misterioso e lida com seus próprios demônios.',
            'release_date' => '1998-04-03',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/4/19644.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 111
        DB::table('animes')->insert([
            'title' => 'Dragon Ball Z',
            'synopsis' => 'Goku, um guerreiro Saiyajin, protege a Terra de ameaças intergalácticas e busca por desafios cada vez mais poderosos. A série explora a luta entre o bem e o mal no universo.',
            'release_date' => '1989-04-26',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/6/51209.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 112
        DB::table('animes')->insert([
            'title' => 'One Punch Man',
            'synopsis' => 'Saitama é um super-herói que pode derrotar qualquer inimigo com um único soco, mas ele está entediado com a falta de desafios. Ele busca um oponente digno enquanto lida com outros heróis e vilões.',
            'release_date' => '2015-10-05',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/12/76049.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 113
        DB::table('animes')->insert([
            'title' => 'Demon Slayer: Kimetsu no Yaiba',
            'synopsis' => 'Tanjiro Kamado se torna um caçador de demônios após sua família ser massacrada por demônios e sua irmã Nezuko ser transformada em um demônio. Ele busca vingança e uma cura para sua irmã.',
            'release_date' => '2019-04-06',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/1286/99889.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 114
        DB::table('animes')->insert([
            'title' => 'Tokyo Ghoul',
            'synopsis' => 'Kaneki, um jovem, é transformado em um Ghoul, uma criatura que se alimenta de carne humana. Ele luta para sobreviver e encontrar seu lugar em um mundo onde humanos e Ghouls estão em conflito.',
            'release_date' => '2014-07-04',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/5/64451.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 115
        DB::table('animes')->insert([
            'title' => 'Steins;Gate',
            'synopsis' => 'Um grupo de amigos descobre que podem enviar mensagens de texto para o passado usando um micro-ondas modificado. Eles inadvertidamente desencadeiam uma série de eventos que têm consequências significativas.',
            'release_date' => '2011-04-06',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/5/73199.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 116
        DB::table('animes')->insert([
            'title' => 'Neon Genesis Evangelion',
            'synopsis' => 'Em um mundo pós-apocalíptico, adolescentes pilotam robôs gigantes para proteger a Terra de misteriosas criaturas conhecidas como Anjos. A série explora temas complexos de psicologia e existência.',
            'release_date' => '1995-10-04',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/3/73143.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 117
        DB::table('animes')->insert([
            'title' => 'Code Geass: Lelouch of the Rebellion',
            'synopsis' => 'Lelouch vi Britannia adquire o poder Geass, que permite controlar as mentes das pessoas. Ele usa seu poder para se rebelar contra o Império Britânico e alcançar seus objetivos pessoais.',
            'release_date' => '2006-10-06',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/5/12147.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 118
        DB::table('animes')->insert([
            'title' => 'My Neighbor Totoro',
            'synopsis' => 'Dois irmãos, Satsuki e Mei, se mudam para o campo e encontram criaturas mágicas, incluindo Totoro, um espírito da floresta. Eles vivem aventuras mágicas enquanto se ajustam à nova vida.',
            'release_date' => '1988-04-16',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/4/10269.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 120
        DB::table('animes')->insert([
            'title' => 'Fullmetal Alchemist: Brotherhood',
            'synopsis' => 'Dois irmãos alquimistas, Edward e Alphonse Elric, buscam a Pedra Filosofal para recuperar os corpos após um experimento de alquimia dar errado. Eles embarcam em uma jornada para desvendar os segredos da alquimia e enfrentam desafios ao longo do caminho.',
            'release_date' => '2009-04-05',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/1223/96541.jpg',
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        // Anime 121 add na tabela o create_at e update_at
        DB::table('animes')->insert([
            'title' => 'Naruto',
            'synopsis' => 'Naruto Uzumaki é um jovem ninja que carrega uma raposa de nove caudas dentro de si. Ele sonha em se tornar o Hokage, o maior ninja de sua aldeia, e provar seu valor para todos.',
            'release_date' => '2002-10-03',
            'image_url' => 'https://cdn.myanimelist.net/images/anime/13/17405.jpg',
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
    }
}
