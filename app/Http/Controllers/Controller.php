<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * @OA\Swagger(
 *     basePath="https://localhost:8080/api/docs", // Defina o URL base com o caminho personalizado
 *     schemes={"http", "https"},
 *     @OA\Info(
 *         title="API",
 *         version="0.1",
 *         description="API para consulta de animes",
 *         @OA\Contact(
 *             name="Arthur",
 *             email="arthurbrasa@outlook.com"
 *         ),
 *         @OA\License(
 *             name="MIT",
 *             url="https://opensource.org/licenses/MIT"
 *         )
 *     )
 * )
 */



class Controller extends BaseController
{
    //
}
