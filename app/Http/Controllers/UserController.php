<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('users.index', [
            'users' => (User::all())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
 
        $user->type = $request->type;
        $user->foto_cliente = $request->foto_cliente;
        $user->nombre_cliente = $request->nombre_cliente;
        $user->password = $request->password;
        $user->direccion_cliente = $request->direccion_cliente;
        $user->email = $request->email;
        $user->estado = "ACTIVO";
        
        
        $user->save();

        

        return view('users.index', [
             'users' => (User::all())
         ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user = User::find($id);

        $user->type = $request->type;
        $user->foto_cliente = $request->foto_cliente;
        $user->nombre_cliente = $request->nombre_cliente;
        $user->password = $request->password;
        $user->direccion_cliente = $request->direccion_cliente;
        $user->email = $request->email;
        $user->estado = $request->estado;;

        $user->save();


        return redirect()->action([UserController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->action([UserController::class, 'index']);
    }
}
