<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function subscribeCreate(Request $request)
    {
        $isAlreadySubscribed = Subscriber::where('email', $request->email)->count() > 0;
        if ($isAlreadySubscribed) {
            return redirect()->back()->with(['cloneMail' => 'Данная почта уже подписанна на рассылку.']);
        }
        Subscriber::create($request->only('email'));

        $data = [
            'email' => $request->email,
        ];

        Mail::to('sem.alik77777@mail.ru')->send(new WelcomeMail($data));
        return redirect()->back()->with(['message' => 'Почта добавлена в рассылку.']);
    }
}
