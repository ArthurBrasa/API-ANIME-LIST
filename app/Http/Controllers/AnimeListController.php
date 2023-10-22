<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

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
     *     ),
     * )
     */
    public function index(Request $request)
    { 
        
        $page = $request->input('page', 1);
        $perPage = $request->input('per_page', 5);

        # Limitando PerPage
        if ($perPage > 50) {
            $perPage = 50;
        }

        # Paginação API
        $animes = Anime::paginate($perPage, ['*'], 'page', $page);
        $animesArray = $animes->toArray();

        // Remove a chave "links" do array
        unset($animesArray['links']);
        
        return response()->json($animesArray);

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
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Anime não encontrado",
 *     )
 * )
 */
    public function list(Request $request)
    {
        # pegar parametro no path /api/v1/{title}
        $title = $request->route('title');

        # pegar anime com model Anime usando o like
        $anime = Anime::where('title', 'like', "%{$title}%")->first();

        # se não encontrar, retornar 404
        if (!$anime) {
            return response()->json([
                'error' => 'Anime não encontrado',
                'links' => [
                    'self' => route('preview', ['title' => $title]),
                    'all_animes' => route('all_animes')
                ]
            ], 404);
        }else{
            return response()->json([
                'id' => $anime->id,
                'title' => $anime->title,
                'description' => $anime->synopsis,
                'release_date' => $anime->release_date,
                'links' => [
                    'self' => route('preview', ['title' => $title]),
                    'all_animes' => route('all_animes')
                ]
            ]);
        }
        


    }
 /**
 * @OA\Post(
 *     path="/api/v1/anime",
 *     summary="Criar um novo anime",
 *     tags={"Animes"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(property="title", type="string", description="Título do anime (máx. 100 caracteres)"),
 *             @OA\Property(property="synopsis", type="string", description="Sinopse do anime"),
 *             @OA\Property(property="release_date", type="string", format="date", description="Data de lançamento do anime no formato YYYY-MM-DD"),
 *             @OA\Property(property="image_url", type="string", description="URL da imagem do anime (opcional, máx. 300 caracteres)")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Anime criado com sucesso",
 *        
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Requisição inválida",
 *     ),
 *     @OA\Response(
 *         response=409,
 *         description="Conflito - Já existe um anime com o mesmo título",
 *       
 *     )
 * )
 */

    public function create(Request $request)
    {
        # validar dados com validator
        $this->validate($request, [
            'title' => 'required|string|max:100',
            'synopsis' => 'required|string',
            'release_date' => 'required|date',
            'image_url' => 'nullable|string|max:300'
        ]);

        # verificar se já existe um anime com o mesmo título
        $anime = Anime::where('title', $request->input('title'))->first();
        if ($anime) {
            return response()->json([
                'error' => 'Já existe um anime com este título'
            ], 409);
        }

        $anime = Anime::create($request->all());
        return response()->json($anime, 201);
    }
        /**
     * @OA\Put(
     *     path="/api/v1/anime/{id}",
     *     summary="Atualiza um anime existente",
     *     tags={"Animes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do anime a ser atualizado",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         description="Dados do anime a ser atualizado",
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="title", type="string", description="Título do anime"),
     *             @OA\Property(property="synopsis", type="string", description="Sinopse do anime"),
     *             @OA\Property(property="release_date", type="date", description="Data de lançamento no formato YYYY-MM-DD"),
     *             @OA\Property(property="image_url", type="string", description="URL da imagem do anime"),
     *         )
     *     ),
     *     @OA\Response(
     *         response="202",
     *         description="Anime atualizado com sucesso",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Anime não encontrado",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string", description="Mensagem de erro")
     *         )
     *     )
     * )
     */
    public function update(Request $request, int $id)
    {
        # validar dados para id de path
        $this->validate($request, [
            'title' => 'nullable|string|max:100',
            'synopsis' => 'nullable|string',
            'release_date' => 'nullable|date',
            'image_url' => 'nullable|string|max:300'
        ]);

        # validar dados para id de path
        if (!is_numeric($id)) {
            return response()->json([
                'error' => 'ID inválido'
            ], 400);
        }
        
        # encontrar anime pelo id
        $anime = Anime::find($id);
        if (!$anime) {
            return response()->json([
                'error' => 'Anime não encontrado'
            ], 404);
        }
        # update no anime
        $anime->update($request->all());

        return response()->json($anime, 202);
    }

        /**
     * @OA\Delete(
     *     path="/api/v1/anime/{id}",
     *     summary="Remove um anime pelo ID",
     *    tags={"Animes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do anime a ser removido",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="202",
     *         description="Anime removido com sucesso",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Mensagem de sucesso"),
     *             @OA\Property(property="data", type="object", description="Dados do anime removido"),
     *             @OA\Property(property="status", type="string", description="Código de status da resposta"),
     *             @OA\Property(property="links", type="object", description="Links relacionados"),
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Anime não encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", description="Mensagem de erro")
     *         )
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="ID inválido",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", description="Mensagem de erro")
     *         )
     *     )
     * )
     */

    public function delete($id)
    {
        # validar dados para id de path
        if (!is_numeric($id)) {
            return response()->json([
                'error' => 'ID inválido'
            ], 400);
        }

        # encontrar anime pelo id
        $anime = Anime::find($id);
        
        if (!$anime) {
            return response()->json([
                'error' => 'Anime não encontrado'
            ], 404);
        }
        # delete no anime
        $anime->delete();

        return response()->json([
            'message' => 'Anime removido com sucesso',
            'data' => $anime,
            'status' => '202',
            'links' => [
                'all_animes' => route('all_animes')
            ]
        ], 202);
    }
}
   
