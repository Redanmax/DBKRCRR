<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API de Redanmax",
 *      description="API de ejempo para clase de desarrollo de Backend y APIs",
 *      @OA\Contact(
 *          email="reberamirez99@gmail.com",
 *          name="Rebeca Carolina Ramirez Rodriguez",
 *          url="https://localhost/api/"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
