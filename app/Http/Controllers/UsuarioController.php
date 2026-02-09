<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UsuarioController extends Controller
{
    /**
     * Muestra un listado del recurso.
     */
    public function index(Request $request): View
    {
        $usuarios = Usuario::paginate();

        return view('usuario.index', compact('usuarios'))
            ->with('i', ($request->input('page', 1) - 1) * $usuarios->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create(): View
    {
        $usuario = new Usuario();

        return view('usuario.create', compact('usuario'));
    }

    /**
     * Almacena un recurso recién creado en la base de datos.
     */
    public function store(UsuarioRequest $request): RedirectResponse
    {
        Usuario::create($request->validated());

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario created successfully.');
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show($id): View
    {
        $usuario = Usuario::find($id);

        return view('usuario.show', compact('usuario'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit($id): View
    {
        $usuario = Usuario::find($id);

        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Actualiza el recurso especificado en la base de datos.
     */
    public function update(UsuarioRequest $request, Usuario $usuario): RedirectResponse
    {
        $usuario->update($request->validated());

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario updated successfully');
    }

    /**
     * Elimina el recurso especificado de la base de datos.
     */
    public function destroy($id): RedirectResponse
    {
        Usuario::find($id)->delete();

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario deleted successfully');
    }
}
