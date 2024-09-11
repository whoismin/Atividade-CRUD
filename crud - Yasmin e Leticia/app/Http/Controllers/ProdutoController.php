<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);
    
        Produto::create($validatedData);
    
        return redirect()->route('produtos.index')->with('success', 'Produto adicionado com sucesso!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($validatedData);

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}
