<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request)
    {

        $user = new User([
            'ad_soyad' => $request->name,
            'eposta' => $request->email,
            'sifre' => md5($request->password),
            'il' => $request->il,
            'ilce' => $request->ilce,
            'telefon' => $request->telefon,
            'tarih' => $request->tarih,
        ]);
        $user->save();
        $message['success'] = "Kullanıcı Oluşturuldu";
        return response()->json([
            'message' => $message
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        $query = User::query()
            ->where('eposta', $request->email)
            ->where('sifre', md5($request->password))
            ->first();

        if ($query) {
            return [
                'status' => 'success',
                'message' => 'Kullanıcı Girişi Başarılı',
                'data' => UserResource::make($query)
            ];
        } else {
            return [
                'status' => 'error',
                'message' => 'Kullanıcı adı veya parolan yanlış !'
            ];
        }
    }
}
