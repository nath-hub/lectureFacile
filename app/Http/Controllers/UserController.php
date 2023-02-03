<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
          $users = User::latest()->paginate(10);

        return view('index', compact('users'));
    }
    
     public function create()
    {
        return view('create');
    }
    
    public function store(User $user, Request $request)
    {
         $user::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "email" => $request->email,
            "phone" => $request->phone,
            'code' => $request->code,
            "dateNais" => $request->dateNais
        ]);

        return redirect()->route('index')
            ->withSuccess(__('User created successfully.'));
    }
    
    
    public function show(User $user)
    {
          return view('show', [
            'user' => $user
        ]);
    }
    
    
    public function edit(Utilisateur $user)
    {
         return view('edit', [
            'user' => $user
        ]);
    }
    
    
    public function update(Request $request, User $user)
    {
         $user->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "email" => $request->email,
            "phone" => $request->phone,
            'code' => $request->code,
            "dateNais" => $request->dateNais
        ]);

        return redirect()->route('index')
            ->withSuccess(__('User updated successfully.'));
    }
    
    
    public function destroy(User $user)
    {
         $user->delete();

        return redirect()->route('index')
            ->withSuccess(__('User deleted successfully.'));
    }
}
