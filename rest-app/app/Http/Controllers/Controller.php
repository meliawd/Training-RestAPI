<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     description="API documentation training",
 *     version="1.0.0",
 *     title="API documentation training",
 *     termsOfService="http://swagger.io/terms/",
 *  @OA\Server(
 *      url="http://inixindo-api.heroku.com/api",
 *      description="Inixindo API Server"
 * )
 * )
 *  @OA\SecurityScheme(
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     securityScheme="bearerAuth"
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
