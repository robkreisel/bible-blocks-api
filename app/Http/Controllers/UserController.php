<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return User::paginate();
    }

    public function store(Request $request)
    {
        $user = User::create(
            $request->only('name', 'email')
            + ['password' => Hash::make(1234)]
        );

        return response($user, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update($request->only('name', 'email'));

        return response($user, Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        User::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}