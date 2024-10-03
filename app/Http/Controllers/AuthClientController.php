<?php

namespace App\Http\Controllers;

use App\Models\AuthClient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class AuthClientController extends Controller
{
    public function show()
    {
        /** @var User $user */
        $user = Auth::user();

        $authClient = $user->authclient;


        $outAuthClient= $authClient->getThisFirm()->get();

        $client = "test";
        $data = [
            'client' => $client,
            'outAuthClient' => $outAuthClient
        ];


        return Inertia::render('AuthClient/AuthClient', $data);
    }
}
