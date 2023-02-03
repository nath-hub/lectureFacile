<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\LoginRequest;

class AuthController extends Controller
{
    public function InscrisUtilisateur(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'prenom' => 'required',
        ]);

        $utilisateur = new User();
        $utilisateur->phone = $request->phone;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->save();

        return response()->json([
            'msg' => 'Utilisateur creation reussi',
            'status_code' => 200,
            'utilisateur' => $utilisateur,
        ]);
    }

    public function connexion(Request $request)
    {
        $user = User::where('phone', $request->phone)->first();

        if (empty($user)) {
            abort(404);
        }
        if (Auth::loginUsingId($user->id)) {
            return response()->json([
                'msg' => 'Utilisateur connectée',
                'token' => $user->createToken('API TOKEN')->plainTextToken,
                'status_code' => 200,
                'utilisateur' => $user,
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        
        $user = User::findOrFail($id);

        $user->update($request->all());

        return $user;
    }
    
    public function updatestatut(Request $request, $id)
    {
        
        $user = User::findOrFail($id);

        $user->update([
            "statut" => 1,
            ]);

       return view("reussite");
    }
    
    
     public function echec() 
    {return view("echec"); }
    
    
    
    public function accept() 
    {return view("reussite");}
    
    

    public function userInfo($id) 
    {
    $user = User::findOrFail($id);
    return $user;
    }
    
    
}
