<?php

namespace App\Http\Controllers;

use App\Models\IdentifiantParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function newPassword(){
        return view('ui.auth.new-password');
    }

    /**
     * Fonction qui enregistre un nouveau mot de passe pour un parent
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function newPasswordStore(Request $request){
        $request->validate([
            'telephone' => ['required'],
            'password' => 'required|string|min:4|confirmed',
        ]);
        $saved = IdentifiantParent::create([
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
        ]);
        if($saved){
            return response()->json(['message' => trans('validation.messages.errors.error'),'title'=>'Enregistrement','status'=>'error']);
        }
        return response()->json(['message' => trans('validation.messages.errors.error'),'title'=>'Enregistrement','status'=>'error']);
    }
}
