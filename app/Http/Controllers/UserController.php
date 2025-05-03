<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @OA\Tag(
     *     name="User",
     *     description="Informações de usuário"
     * )
     *
     * @OA\Get(
     *     path="/user",
     *     summary="Retorno de usuário Teste",
     *     tags={"User"},
     *     @OA\Response(
     *         response=200,
     *         description="Usuário Teste",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 @OA\Property(property="name", type="string", example="Savio Pereira"),
     *                 @OA\Property(property="type_id", type="integer", example=1),
     *             )
     *         )
     *     )
     * )
     */
    public function index(Request $request)
    {
        return response()->json([
            'message' => 'Welcome to the API',
            'data' => $request
        ]);
    }
}
