<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BookController extends Controller
{

    public function index()
    {
        return BookResource::collection(Book::all());
    }

    public function show($id)
    {
        return new BookResource(Book::find($id));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->only('name', 'symbol', 'testament', 'category', 'year', 'era', 'author', 'order'));

        return response(new BookResource($book), Response::HTTP_ACCEPTED);
    }

}
