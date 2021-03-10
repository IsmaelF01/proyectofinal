<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        $id = Auth::id();
        $user = User::find($id);
        if($user->role->role == 'cliente'){
            return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended('fooding/restaurantes');
        }
        if($user->role->role == 'grestaurante'){
            return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended('intranet/restaurante');
        }
        if($user->role->role == 'repartidor'){
            return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended('intranet/repartidor');
        }

        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended(config('fortify.home'));
    }

}
