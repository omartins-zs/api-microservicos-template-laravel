<?php

namespace App\Http\Controllers;

use App\Models\User;
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
     *     path="/api/users",
     *     summary="Retorna todos os usuários",
     *     tags={"User"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de usuários",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 @OA\Property(property="id",   type="integer", example=1),
     *                 @OA\Property(property="name", type="string",  example="Savio Pereira"),
     *                 @OA\Property(property="email",type="string",  example="savio@example.com")
     *             )
     *         )
     *     )
     * )
     */
    public function index(Request $request)
    {
        $users = User::all();

        return response()->json([
            'message' => 'Lista de usuários',
            'data'    => $users
        ], 200);
    }
}
