<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CategoriaFormRequest;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index() //Request $request
    {
        $categorias = Categoria::orderBy('id', 'desc')->get();  // Obtener todas las categorías, ordenadas por 'id' descendente

        return view('categoria.index', ['categoria' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaFormRequest $request)
    {
        try {
            $categoria = new Categoria;
            $categoria->categoria = $request->get('categoria');
            $categoria->descripcion = $request->get('descripcion');
            
            if($categoria->save()) {
                return redirect()
                    ->route('categorias.index')
                    ->with('success', 'Categoría creada exitosamente');
            }
        
            return redirect()
                ->back()
                ->with('error', 'No se pudo guardar la categoría')
                ->withInput();
        
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Error al crear la categoría')
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categoria=Categoria::findOrFail($id);
        return view('categoria.show',["categoria"=>$categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria=Categoria::findOrFail($id);
        return view('categoria.edit',["categoria"=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaFormRequest $request, $id)
    {
        $categoria=Categoria::findOrFail($id);

        $categoria->categoria=$request->get('categoria');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->estado='1';
        $categoria->update();
        return Redirect::to('categoria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = '';
        $categoria = Categoria::findOrFail($id);
        
        if ($categoria->estado == 1) {
            $categoria->update([
                'estado' => 0
            ]);
            $message = 'Categoría eliminada';
        } else {
            $categoria->update([
                'estado' => 1
            ]);
            $message = 'Categoría restaurada';
        }
    
        return redirect()->route('categorias.index')->with('success', $message);
    }
}
