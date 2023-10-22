<?php

namespace App\Http\Controllers;

use App\pagination\CustomLenghtAwarePaginator;
use Illuminate\Http\Request;

class AnimeListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * 
     * @OA\Get(
     *     path="/api/v1/anime",
     *     tags={"Animes"},
     *     summary="Lista de Animes",
     *     @OA\Response(
     *         response=200,
     *         description="Lista de Animes",
     *         @OA\JsonContent(type="array", @OA\Items(type="string"))
     *     ),
     * )
     */


    
    private static $lista = [
        'naruto' => 'Um jovem ninja busca se tornar o Hokage e proteger sua vila.',
        'bleach' => 'Um adolescente adquire poderes de um Shinigami e luta contra espíritos malignos.',
        'one_piece' => 'Luffy parte em busca do tesouro One Piece como pirata.',
        'dragon_ball' => 'Goku embarca em aventuras para encontrar as Esferas do Dragão.',
        'death_note' => 'Um estudante encontra um caderno capaz de matar quem tem seu nome nele escrito.',
        'fullmetal_alchemist' => 'Dois irmãos alquimistas buscam a Pedra Filosofal para restaurar seus corpos.',
        'sword_art_online' => 'Jogadores ficam presos em um MMORPG e devem lutar para sobreviver.',
        'hunter_x_hunter' => 'Gon procura seu pai e se torna um caçador de tesouros.',
        'fairy_tail' => 'Natsu e seus amigos fazem parte da guilda de magos Fairy Tail.',
        'nanatsu_no_taizai' => 'Um grupo de cavaleiros busca retomar o reino de Liones.',
        'boku_no_hero_academia' => 'Um jovem sem poderes busca se tornar um herói em um mundo de super-heróis.',
        'shingeki_no_kyojin' => 'Humanidade luta contra gigantes devoradores de humanos.',
        'attack_on_titan' => 'Humanidade luta contra gigantes devoradores de humanos.',
        'my_hero_academia' => 'Um jovem sem poderes busca se tornar um herói em um mundo de super-heróis.',
        'demon_slayer' => 'Tanjiro luta contra demônios para vingar sua família.',
        'one_punch_man' => 'Saitama derrota inimigos com um único soco.',
        'black_clover' => 'Asta busca se tornar o Mago Imperador do reino Clover.',
        're_zero' => 'Subaru é transportado para outro mundo e lida com revivências constantes.',
        'neon_genesis_evangelion' => 'Pilotos de mechas combatem seres misteriosos chamados Anjos.',
        'cowboy_bebop' => 'Bounty hunters caçam criminosos no espaço.',
        'code_geass' => 'Lelouch ganha um poder misterioso e busca vingança.',
        'fruits_basket' => 'Tohru se muda com a família Sohma e descobre segredos deles.',
        'jojo_s_bizarre_adventure' => 'A família Joestar luta contra inimigos sobrenaturais.',
        'parasyte' => 'Shinichi luta contra parasitas alienígenas que invadem os corpos humanos.',
        'dr_stone' => 'Senku tenta trazer a ciência de volta em um mundo de pedra.',
        'haikyuu' => 'Um time de vôlei busca ser o melhor do Japão.',
        'tokyo_ghoul' => 'Kaneki lida com sua nova identidade de meio-humano, meio-ghoul.',
        'steins_gate' => 'Cientistas descobrem uma máquina do tempo e lidam com as consequências.',
        'mob_psycho_100' => 'Mob tem poderes psíquicos e lida com entidades sobrenaturais.',
        'kimi_no_na_wa' => 'Dois jovens trocam de corpo intermitentemente.',
        'akira' => 'Kaneda luta contra o governo em Neo-Tokyo.',
        'spirited_away' => 'Chihiro entra em um mundo mágico e deve resgatar seus pais.',
        'princess_mononoke' => 'Ashitaka luta entre humanos e deuses da floresta.',
        'grave_of_the_fireflies' => 'Dois irmãos lutam pela sobrevivência no Japão pós-guerra.',
        'my_neighbor_totoro' => 'Duas irmãs fazem amizade com criaturas mágicas na floresta.',
        'kiki_s_delivery_service' => 'Kiki é uma jovem bruxa que inicia um serviço de entregas.',
        'howl_s_moving_castle' => 'Sophie viaja com o castelo mágico de Howl.',
        'castle_in_the_sky' => 'Pazu e Sheeta procuram uma ilha flutuante misteriosa.',
        'whisper_of_the_heart' => 'Shizuku busca seu propósito na vida.',
        'the_wind_rises' => 'A vida do designer de aviões Jiro Horikoshi.',
        'perfect_blue' => 'Uma ex-idol lida com uma perseguição obsessiva.',
        'paprika' => 'Um dispositivo permite acesso aos sonhos das pessoas.',
        'millennium_actress' => 'Uma atriz relembra sua carreira em uma jornada surreal.',
        'tokyo_godfathers' => 'Três sem-teto encontram um bebê e buscam seus pais.',
        'redline' => 'Uma corrida intergaláctica mortal chamada Redline.',
        'ponyo' => 'Uma sereia se torna amiga de um garoto humano.',
        'the_boy_and_the_beast' => 'Um garoto é treinado por um guerreiro animal.',
        'the_garden_of_words' => 'Um estudante e uma mulher se encontram em um jardim.',
        '5_centimeters_per_second' => 'A história de amor de dois amigos ao longo dos anos.',
        'your_lie_in_april' => 'Um pianista ajuda uma violinista a superar seu passado.',
        'clannad' => 'Tomoya ajuda pessoas com problemas pessoais em sua escola.',
        'toradora' => 'Dois estudantes ajudam um ao outro a conquistar seus interesses amorosos.',
        'spice_and_wolf' => 'Um mercador viaja com uma deusa loba.',
        'the_rising_of_the_shield_hero' => 'Naofumi lida com a traição e se torna o Herói do Escudo.',
        'drifters' => 'Heróis históricos são transportados para um mundo mágico.',
        'overlord' => 'Um jogador fica preso em um MMORPG como um lich poderoso.',
        'no_game_no_life' => 'Irmãos talentosos em jogos são transportados para um mundo de jogos.',
        'the_promised_neverland' => 'Órfãos descobrem segredos sinistros sobre seu orfanato.',
        'violet_evergarden' => 'Uma ex-soldado se torna escritora de cartas emocionais.',
        'the_ancient_magus_bride' => 'Chise é comprada por um mago e entra em um mundo mágico.',
        'assassination_classroom' => 'Alunos tentam assassinar seu professor alienígena.',
        'black_butler' => 'Ciel faz um pacto demoníaco para buscar vingança.',
        'tokyo_revengers' => 'Takemichi volta no tempo para impedir uma tragédia.',
        'jujutsu_kaisen' => 'Estudantes lutam contra maldições e demônios com jujutsu.',
        'demon_slayer_kimetsu_no_yaiba' => 'Tanjiro luta contra demônios para vingar sua família.',
        'vinland_saga' => 'Thorfinn busca vingança em uma era viking.',
        'fire_force' => 'Bombeiros especiais combatem incêndios sobrenaturais.',
        'beelzebub' => 'Oga cuida do filho do rei dos demônios.',
        'gurren_lagann' => 'Simon pilota um mecha para lutar contra tirania espacial.',
        'high_school_dxd' => 'Issei se envolve em uma luta entre anjos e demônios.',
        'konosuba_god_s_blessing_on_this_wonderful_world' => 'Um grupo de aventureiros inúteis tenta sobreviver em um mundo de fantasia.',
        'rurouni_kenshin' => 'Um espadachim busca redenção após seu passado como assassino.',
        'gintama' => 'Gintoki é um samurai preguiçoso em uma era de alienígenas.',
        'detective_conan' => 'Shinichi Kudo se torna um detetive após ser transformado em criança.',
    ];
    public function index(Request $request)
    {

        
        
        $page = $request->input('page', 1);
        $perPage = $request->input('per_page', 10);
        
        $data = array_keys(self::$lista);

        # Limitando PerPage
        if($perPage>50)
            $perPage = 50;
        
        
        # Paginação API
        $pagedData = new CustomLenghtAwarePaginator(
            array_slice($data, ($page - 1) * $perPage, $perPage),
            count($data),
            $perPage,
            $page,
            ['path' => $request->url()]
        );

        return response()->json($pagedData);
    }

    /**
 * @OA\Get(
 *     path="/api/v1/anime/{title}",
 *     tags={"Animes"},
 *     summary="Obter informações sobre um anime por título",
 *     @OA\Parameter(
 *         name="title",
 *         in="path",
 *         required=true,
 *         description="Título do anime desejado",
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Informações sobre o anime",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="title", type="string", description="Título do anime"),
 *             @OA\Property(property="description", type="string", description="Descrição do anime"),
 *             @OA\Property(
 *                 property="links",
 *                 type="object",
 *                 @OA\Property(property="self", type="string", description="URL para esta rota"),
 *                 @OA\Property(property="all_animes", type="string", description="URL para listar todos os animes")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Anime não encontrado",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="error", type="string", description="Mensagem de erro"),
 *             @OA\Property(
 *                 property="links",
 *                 type="object",
 *                 @OA\Property(property="self", type="string", description="URL para esta rota"),
 *                 @OA\Property(property="all_animes", type="string", description="URL para listar todos os animes")
 *             )
 *         )
 *     )
 * )
 */
    public function list(Request $request)
    {
        # pegar parametro no path /api/v1/{title}
        $title = $request->route('title');

        $lowercaseTitle = strtolower($title);
        if(array_key_exists($lowercaseTitle, self::$lista)){
            $response = [
                'title' => $title,
                "description" => self::$lista[$lowercaseTitle],
                'links' => [
                    'self' => $request->url(),
                    'all_animes' => route('all_animes')
                ]
                ];

        
            return response()->json($response);
        }
        else {
            return response()->json([
                'error' => 'Anime not found',
                'links' => [
                    'self' => $request->url(),
                    'all_animes' => route('all_animes')
                ]
            ], 404);
        }


    }
}   
