<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = User::all();
        return response()->json($contacts);
    }

    public function getMessageFor($id)
    {
        $messages = Message::where('from', $id)->orWhere('to', $id)->get();
        return response()->json($messages);
    }
}
