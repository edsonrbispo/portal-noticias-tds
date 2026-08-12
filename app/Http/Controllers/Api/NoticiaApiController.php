<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaApiController extends Controller
{
  
    public function index()  //GET
    {
        $noticias = Noticia::all();

        return response()->json($noticias);

    }

    public function store(Request $request) //POST
    {
        //
    }

    public function show(string $id)  //GET
    {
        $noticia = Noticia::findOrFail($id);
        return response()->json($noticia);
    }

    public function update(Request $request, string $id) //PUT
    {
        //
    }

    
    public function destroy(string $id) //DELETE
    {
        //
    }
}
