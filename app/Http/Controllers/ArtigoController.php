<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    public function index() {
        if (!auth()->user()->hasRole(['administrator', 'registered']))
            return json_encode(['error' => 'Não autorizado']);

        $user = User::find(auth()->user()->id);
        return json_encode(['user' => $user]);
    }
}
