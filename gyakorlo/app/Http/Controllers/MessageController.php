<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create()
    {
        $users = User::all();

        return view('message.create', compact('users'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'message' => 'required|string|max:255',
        ]);

        return redirect()->route('message.create')->with('success', 'Üzenet sikeresen rögzítve!');
    }
}


