<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mockery\Matcher\Type;

class ProfileController extends Controller
{
    public function update(Request $request){

        Log::info('kjslkscfljlscs');
        $user = Auth::user();
        $user->job=$request->input('job');
        $user->company=$request->input('company');
        $user->phone=$request->input('phone');
        $user->mobile=$request->input('mobil');
        $user->country=$request->input('contry');
        $user->additionalemail=$request->input('additionalemail');
        $user->save();
    }

}
